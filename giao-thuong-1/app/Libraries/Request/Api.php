<?php
namespace App\Libraries\Request;

use App\Libraries\Constant;
use App\Libraries\Request\Data\Input;
use App\Libraries\Request\Data\ResponseJson;
use App\Libraries\Traits\JsonResponseTrait;
use Exception;
use Illuminate\Support\Facades\Session;

/**
 * Class Api
 * @package App\Libraries\Request
 */
class Api
{
    use JsonResponseTrait;

    /**
     * @var string $accessToken
     */
    protected $accessToken;
    protected $refreshToken;
    protected $clientId;
    protected $clientSecret;
    protected $username;
    protected $password;

    /**
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * Api constructor.
     */
    public function __construct()
    {
        // Set HttpClient
        $this->httpClient = new HttpClient([
            'Content-Type' => 'application/json',
            'Authorization' => '' // 'Bearer {access_token}'
        ]);
        $this->output = new ResponseJson();
    }

    /**
     * Get authentication
     *
     * @return $this
     * @throws Exception
     */
    protected function auth()
    {
//        try
//        {
//            $result = $this->post(
//                'oauth/token',
//                [
//                    "grant_type"    => "password",
//                    "client_id"     => $this->clientId,
//                    "client_secret" => $this->clientSecret,
//                    "username"      => $this->username,
//                    "password"      => $this->password,
//                    "scope"         => ""
//                ]
//            );
//            $this->accessToken = $result['access_token'];
//            $this->refreshToken = $result['refresh_token'];
//        }
//        catch (Exception $e) {}

        return $this;
    }

    /**
     * Set access token
     *
     * @param string $access_token
     * @return $this
     */
    protected function setAccessToken(string $access_token)
    {
        $this->accessToken = $access_token;
        $this->httpClient->header([
            'Authorization' => 'Bearer ' . $access_token
        ]);

        return $this;
    }

    /**
     * Get access token
     *
     * @return string
     * @throws Exception
     */
    public function getAccessToken() 
    {
        $access_token = $this->accessToken ?? Session::get(Constant::SESSION_API_ACCESS_TOKEN_KEY);
        if(!empty($access_token))
        {
            return $access_token;
        }

        try
        {
            $this->auth();
            $access_token = $this->accessToken;
            Session::put(Constant::SESSION_API_ACCESS_TOKEN_KEY, $access_token);
        }
        catch (Exception $exception)
        {
            throw new Exception('Failed to authenticate with API.');
        }

        return (string)$access_token;
    }

    /**
     * Get refresh token
     *
     * @return string
     */
    public function getRefreshToken() 
    {
        return (string)$this->refreshToken;
    }

    /**
     * Make GET request
     *
     * @param string $url
     * @param Input|array $input
     * @return ResponseJson
     */
    public function get(string $url, $input = null)
    {
        $this->call(HttpClient::METHOD_GET, $url, $input);
        return $this->output;
    }

    /**
     * Make POST request
     *
     * @param string $url
     * @param Input|array $input
     * @return ResponseJson
     */
    public function post(string $url, $input = null)
    {
        $this->call(HttpClient::METHOD_POST, $url, $input);
        return $this->output;
    }

    /**
     * Make PUT request
     *
     * @param string $url
     * @param Input|array $input
     * @return ResponseJson
     */
    public function put(string $url, $input = null)
    {
        $this->call(HttpClient::METHOD_PUT, $url, $input);
        return $this->output;
    }

    /**
     * Make DELETE request
     *
     * @param string $url
     * @param Input|array $input
     * @return ResponseJson
     */
    public function delete(string $url, $input = null)
    {
        $this->call(HttpClient::METHOD_DELETE, $url, $input);
        return $this->output;
    }

    /**
     * Make request
     * @param string $methodType
     * @param string $url
     * @param null $input
     * @return ResponseJson
     */
    private function call(string $methodType, string $url, $input = null)
    {
        try
        {
            try
            {
                $this->setAccessToken($this->getAccessToken());

                switch ($methodType)
                {
                    case HttpClient::METHOD_GET:
                        $content = $this->httpClient->get($url, $input);
                        break;
                    case HttpClient::METHOD_POST:
                        $content = $this->httpClient->post($url, $input);
                        break;
                    case HttpClient::METHOD_PUT:
                        $content = $this->httpClient->put($url, $input);
                        break;
                    case HttpClient::METHOD_DELETE:
                        $content = $this->httpClient->delete($url, $input);
                        break;
                    default:
                        $content = null;
                }

                $result = json_decode($content, true);
                if(Constant::DEV_MODE == 1)
                {
                    $result or dd($content);
                }
            }
            catch (Exception $exception)
            {
                throw new Exception("API connection failed.");
            }

            if(JSON_ERROR_NONE != json_last_error())
            {
                throw new Exception('API returns error. Please try again.');
            }

            $result['message'] = $result['message'] ?? $result['msg'] ?? '';
            $this->output->fill($result);
        }
        catch (Exception $exception)
        {
            $this->output->error = 1;
            $this->output->message = $exception->getMessage();
        }

        return $this->output;
    }

    /**
     * Get api url
     * @param string $path
     * @return string
     * @throws Exception
     */
    public function apiCenter(string $path)
    {
        $apiCenterUrl = env('API_CENTER_URL');
        $url = trim($apiCenterUrl, '/ ');
        if(!$url)
        {
            throw new Exception('Api center not found.');
        }

        $url .= '/' . trim($path, '/ ');
        return $url;
    }
}