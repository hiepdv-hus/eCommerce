<?php

namespace App\Libraries\Auth;

use App\Libraries\Format\Str;
use App\Libraries\Auth\JWT\JWT;
use App\Libraries\Exception\LException;
use Exception;

class Auth
{
    /**
     * @var Request $request
     */
    protected $request;

    /**
     * @var AppModel $app
     */
    private $app;

    private $accessToken;
    private $appKey;
    private $appSecret;
    private $verified = false;

    /**
     * Auth constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Get access token
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Get authorization
     * @return string
     */
    public function getAuthorization()
    {
        return 'Bearer ' . $this->accessToken;
    }

    /**
     * Verify access
     * @throws LException
     * @return void
     */
    public function guard()
    {
        $this->app = new AppModel();

        // Verify access by app_key and app_secret
        if($this->request->isPost())
        {
            $app_key = $this->request->post('app_key');
            $app_secret = $this->request->post(('app_secret'));

            if(!Str::isEmpty($app_key) || !Str::isEmpty($app_secret))
            {
                $this->verifyApp($app_key, $app_secret);
            }
        }

        // Verify access by token
        if(!$this->verified)
        {
            $token = $this->request->getBearerToken();
            $this->verifyToken($token);
        }

        // Set api key
        $this->appKey = $this->app->entity->app_key;
        // Set api secret
        $this->appSecret = $this->app->entity->app_secret;
        // Set access token
        $this->accessToken = JWT::encode(
            [
                'iss' => '',
                'sub' => $this->appKey.'/'.$this->appSecret,
                'iat' => time(),
                'exp' => strtotime("+300seconds")
            ],
            $this->getEncryptKey()
        );
    }

    /**
     * Verify app
     * @param $app_key
     * @param $app_secret
     * @return boolean
     * @throws Exception
     */
    protected function verifyApp($app_key, $app_secret)
    {
        if(Str::isEmpty($app_key) && Str::isEmpty($app_secret))
        {
            return false;
        }

        $app_key = addslashes($app_key);
        $app_secret = addslashes($app_secret);
        $this->app->loadByAppKeys($app_key, $app_secret);

        if(!$this->app->exists())
        {
            return false;
        }

        $this->verified = true;
        return true;
    }

    /**
     * Verify token
     * @param $token
     * @return bool
     * @throws LException
     */
    protected function verifyToken($token)
    {
        if(Str::isEmpty($token))
        {
            throw new LException('Access denied.');
        }

        $secret_encryption_key = $this->getEncryptKey();
        // Verify token
        $content = JWT::decode($token, $secret_encryption_key, array('HS256'));
        $this->app->entity->fill($content->app);

        $this->verified = true;
        return true;
    }

    /**
     * Get encryption key
     * @return string
     * @throws LException
     */
    protected function getEncryptKey()
    {
        $secret_encryption_key = '';

        if(Str::isEmpty($secret_encryption_key))
        {
            throw new LException('Secret encryption key not found.');
        }

        return trim($secret_encryption_key);
    }
}