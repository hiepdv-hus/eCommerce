<?php

namespace App\Libraries\Request\Data;

use App\Libraries\stdClass;

/**
 * Class Input
 * @package App\Libraries\Request\Data
 */
class Input extends IO
{
    /**
     * @var int $statusUid
     */
    public $statusUid;
    /**
     * @var string $querySearch
     */
    public $querySearch;
    /**
     * @var string $dateFrom
     */
    public $dateFrom;
    /**
     * @var string $dateTo
     */
    public $dateTo;
    /**
     * @var int $skip
     */
    public $skip = 0;
    /**
     * @var int $take
     */
    public $take = 10;
}
