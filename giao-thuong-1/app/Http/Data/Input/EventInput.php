<?php

namespace App\Http\Data\Input;

use App\Libraries\Request\Data\Input;

/**
 * Class EventInput
 * @package App\Http\Data\Input
 */
class EventInput extends Input
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
