<?php

namespace App\Http\Data\Input;

use App\Libraries\Request\Data\Input;

/**
 * Class CategoryInput
 * @package App\Http\Data
 */
class CategoryInput extends Input
{
    public $parent_id;
    public $name;
    public $slug;
    public $description;
    public $type;
    public $meta_data;
    public $user_create_id;
    public $user_update_id;
    public $is_deleted;
    public $is_active;
    public $created_time;

    /**
     * @var array $resultMap
     */
    protected $resultMap = [];

}
