<?php

namespace App\Libraries\Request\Data;

use App\Libraries\stdClass;

/**
 * Class ResponseJson
 * @package App\Libraries\Request\Data
 */
class ResponseJson extends stdClass
{
    /**
     * @var int $success
     */
    public $success = 0;
    /**
     * @var int $errorCode
     */
    public $errorCode = 0;
    /**
     * @var mixed $data
     */
    public $data;
    /**
     * @var string $message
     */
    public $message = '';
    /**
     * @var int $recordsTotal
     */
    public $recordsTotal = 0;
    /**
     * @var false|string $serverTime
     */
    public $serverTime;

    /**
     * Output constructor.
     * @param array $dataSet
     */
    public function __construct(array $dataSet = [])
    {
        $this->serverTime = date("d-m-Y h:i:s");
        parent::__construct($dataSet);
    }

    /**
     * Set status as success
     * @param null $message
     * @return ResponseJson
     */
    public function succeeded($message = null) {
        $this->success = 1;
        $this->message = $message;
        return $this;
    }

    /**
     * Set status as failed
     * @param null $message
     * @param int $error_code
     * @return ResponseJson
     */
    public function failed($message = null, $error_code = 0) {
        $this->success = 0;
        $this->message = $message;
        $this->errorCode = (int)$error_code;
        return $this;
    }

    /**
     * Set data
     * @param array $data
     * @return ResponseJson
     */
    public function data(array $data) {
        $this->data = $data;
        return $this;
    }

    /**
     * Check if action is success
     * @reuturn bool
     */
    public function isSuccess()
    {
        return $this->success == 1;
    }
}
