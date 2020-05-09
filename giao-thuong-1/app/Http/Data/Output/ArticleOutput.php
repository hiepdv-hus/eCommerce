<?php

namespace App\Http\Data\Output;

use App\Libraries\Request\Data\IO;

/**
 * Class ArticleOutput
 * @package App\Http\Data\Output
 */
class ArticleOutput extends IO
{
    public $id;
    public $title;
    public $description;
    public $slug;
    public $link;
    public $featured_image;
    public $is_active;
    public $created_time;

    /**
     * @var array $resultMap
     */
    protected $resultMap = [];
}
