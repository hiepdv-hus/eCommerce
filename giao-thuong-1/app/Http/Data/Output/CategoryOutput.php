<?php

namespace App\Http\Data\Output;

use App\Libraries\Request\Data\Collection;
use App\Libraries\Request\Data\IO;

/**
 * Class CategoryOutput
 * @package App\Http\Data\Output
 */
class CategoryOutput extends IO
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

    protected $classMap = [
        'articles' => [Collection::class, ArticleOutput::class]
    ];
}
