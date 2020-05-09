<?php
namespace App\Libraries\Request;

use App\Libraries\Request\Data\Input;

/**
 * Class HttpClient
 * @package App\Libraries\Request
 */
class HttpClient
{
    public const METHOD_GET = 'GET';
    public const METHOD_POST = 'POST';
    public const METHOD_PUT = 'PUT';
    public const METHOD_DELETE = 'DELETE';

    /**
     * @var array $headers
     */
    private $headers = [
        'Content-Type' => 'application/json',
        'Authorization' => '' // 'Bearer {access_token}'
    ];

    /**
     * @var array $body
     */
    private $body = [];

    /**
     * HttpClient constructor.
     * @param array $header
     */
    public function __construct(array $header = [])
    {
        $this->headers = array_merge($this->headers, $header);
    }

    /**
     * Set headers
     * @param array $headers
     * @return $this
     */
    public function header(array $headers)
    {
        $this->headers = array_merge($this->headers, $headers);
        return $this;
    }

    /**
     * Set body
     * @param array $data
     * @return $this
     */
    public function body(array $data)
    {
        $this->body = array_merge($this->body, $data);
        return $this;
    }

    /**
     * Make GET request
     * @param string $url
     * @param Input|null $input
     * @return mixed
     */
    public function get(string $url, $input = null)
    {
        if($input != null)
        {
            if($input instanceof Input)
            {
                $this->body(array_filter($input->toArray(), function ($i)
                {
                    return (is_scalar($i) || is_null($i));
                }));
            }
            else if(is_array($input))
            {
                $this->body($input);
            }

            if($this->body)
            {
                $url .= "?" . http_build_query($this->body);
            }
        }

        return $this->execute($url, self::METHOD_GET, $this->headers);
    }

    /**
     * Make POST request
     * @param string $url
     * @param Input|null $input
     * @return mixed
     */
    public function post(string $url, $input = null)
    {
        if($input instanceof Input)
        {
            $this->body($input->toArray());
        }
        else if(is_array($input))
        {
            $this->body($input);
        }

        return $this->execute($url, self::METHOD_POST, $this->headers, $this->body);
    }

    /**
     * Make PUT request
     * @param string$url
     * @param Input|null $input
     * @return mixed
     */
    public function put(string $url, $input = null )
    {
        if($input != null){
            $this->body($input->toArray());
        }

        return $this->execute($url, self::METHOD_PUT, $this->headers, $this->body);
    }

    /**
     * Make DELETE request
     * @param string $url
     * @param Input|array $input
     * @return mixed
     */
    public function delete(string $url, $input = null)
    {
        if($input != null)
        {
            if($input instanceof Input)
            {
                $this->body($input->toArray());
            }
            else if(is_array($input))
            {
                $this->body($input);
            }

            if($this->body)
            {
                $url .= "?" . http_build_query($this->body);
            }
        }

        return $this->execute($url, self::METHOD_DELETE, $this->headers, $this->body);
    }

    /**
     * Execute the request with specific request type
     * @param string $url
     * @param string$method
     * @param array $headers
     * @param array $data
     * @return mixed
     */
    private function execute(string $url, string $method, array $headers = [], array $data = [])
    {
        $url = trim(preg_replace('/[\\/]+/', '/', $url), '/');
        $url = preg_replace('/(http(s?))\:\/(.*?)/i', '$1://$3', $url);

        // Init CURL
        $ch = curl_init();

        if(!empty($data))
        {
            if($method == self::METHOD_POST || $method == self::METHOD_PUT)
            {
                // body data
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));
            }
            else{
                if(!empty($data)){
                    $url = strtok($url, '?') . '?' . http_build_query($data);
                }
            }
        }

        $useragent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36';
        $timeout= 120;

        curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout );
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout );

        // headers
        $_headers = [];
        foreach ($headers as $k => $v) {
            $_headers[] = "$k:$v";
        }

        if ($_headers) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $_headers);
        }

        $result = curl_exec($ch);

        curl_close($ch);
        // reset
        $this->reset();

        return $result;
    }

    /**
     * Reset header, body
     * @return $this
     */
    private function reset()
    {
        $this->headers = [
            'Content-Type' => 'application/json',
            'Authorization' => ''
        ];

        $this->body = [];

        return $this;
    }
}
