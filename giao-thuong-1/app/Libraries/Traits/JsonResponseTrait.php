<?php
namespace App\Libraries\Traits;

use App\Libraries\Request\Data\ResponseJson;
use App\Libraries\Request\HttpStatusCode;
use Exception;

trait JsonResponseTrait {
    /**
     * Response code
     * @var int $responseCode
     */
    protected $responseCode = HttpStatusCode::OK;

    /**
     * Response messages
     * @var array $responseMessage
     */
    protected $responseMessage = [
        // 2xx Success
        HttpStatusCode::OK => 'OK',
        // 4xx Client Error
        HttpStatusCode::BAD_REQUEST => 'Bad Request',
        HttpStatusCode::UNAUTHORIZED => 'Unauthorized',
        HttpStatusCode::FORBIDDEN => 'Forbidden',
        HttpStatusCode::NOT_FOUND => 'Not Found',
        HttpStatusCode::REQUEST_TIMEOUT => 'Request Timeout',
        HttpStatusCode::LENGTH_REQUIRED => 'Length Required',
        HttpStatusCode::UNSUPPORTED_MEDIA_TYPE => 'Unsupported Media Type',
        // 5xx Server Error
        HttpStatusCode::INTERNAL_SERVER_ERROR => 'Internal Server Error',
        HttpStatusCode::SERVICE_UNAVAILABLE => 'Service Unavailable'
    ];

    /**
     * Response output
     * @var ResponseJson $output
     */
    protected $output;

    /**
     * Set status code
     * @param int $code
     * @return JsonResponseTrait
     */
    private function setResponseCode(int $code)
    {
        $this->responseCode = $code;
        return $this;
    }

    /**
     * Get status code
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Get response message
     *
     * @return mixed
     */
    public function getResponseMessage()
    {
        $message = $this->responseMessage[$this->responseCode] ?? null;
        return $message;
    }

    /**
     * Set response headers
     * @param  array $headers
     * @return JsonResponseTrait
     */
    private function setResponseHeader(array $headers = [])
    {
        $protocol = isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0';
        header($protocol . ' ' . $this->getResponseCode() . ' ' . $this->getResponseMessage());
        header('Content-Type: application/json; charset=utf-8');

        try {
            foreach($headers as $header) {
                header($header);
            }
        } catch(Exception $e) {}

        return $this;
    }

    /**
     * Respond error
     *
     * @param  integer  $code
     * @param  array  $headers
     */
    public function toRespondError(int $code = 400, array $headers = [])
    {
        $listErrorCode = [
            HttpStatusCode::BAD_REQUEST,
            HttpStatusCode::UNAUTHORIZED,
            HttpStatusCode::FORBIDDEN,
            HttpStatusCode::NOT_FOUND,
            HttpStatusCode::REQUEST_TIMEOUT,
            HttpStatusCode::LENGTH_REQUIRED,
            HttpStatusCode::UNSUPPORTED_MEDIA_TYPE,
            HttpStatusCode::INTERNAL_SERVER_ERROR,
            HttpStatusCode::SERVICE_UNAVAILABLE
        ];

        if(!in_array($code, $listErrorCode))
        {
            $code = HttpStatusCode::NOT_FOUND;
        }

        // set response header
        $this->setResponseCode($code)->setResponseHeader($headers);
        die();
    }

    /**
     * Respond success
     *
     * @param  array $headers
     * @return \Illuminate\Http\JsonResponse
     */
    public function toRespondOk(array $headers = [])
    {
        return $this->toRespond(HttpStatusCode::OK, $headers);
    }

    /**
     * Respond output
     *
     * @param int $code
     * @param array $headers
     * @return \Illuminate\Http\JsonResponse
     */
    public function toRespond(int $code, array $headers = [])
    {
        // set response header
        $this->setResponseCode($code)->setResponseHeader($headers);
        // respond data
        return response()->json($this->output->toArray());
    }
}
