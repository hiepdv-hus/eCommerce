<?php

namespace App\Http\Data\Output;

use App\Libraries\Request\Data\Collection;
use App\Libraries\Request\Data\IO;

/**
 * Class MediaOutput
 * @package App\Http\Data\Output
 */
class MediaOutput extends IO
{
    public $type;
    public $name;
    public $url;
    public $size;
    /**
     * @var Collection $thumbnail
     */
    public $thumbnail;
    /**
     * @var array $classMap
     */
    protected $classMap = [
        'thumbnail' => [Collection::class, MediaThumbnailOutput::class]
    ];

    public function __construct($data = [])
    {
//        $this->thumbnail = new Collection(MediaThumbnailOutput::class);
        parent::__construct($data);
    }
}