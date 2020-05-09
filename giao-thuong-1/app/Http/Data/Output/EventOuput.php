<?php

namespace App\Http\Data\Output;

use App\Libraries\Flat\Entities\EventEntity;
use App\Libraries\Request\Data\IO;

/**
 * Class EventOuput
 * @package App\Http\Data\Output
 */
class EventOuput extends IO
{
    public $title;
    public $slug;
    public $description;
    public $detail;
    public $media_id;
    public $category_id;
    public $user_create_id;
    public $user_update_id;
    public $is_deleted;
    public $created_time;

    /**
     * @var array $resultMap
     */
    protected $resultMap = [];
}
