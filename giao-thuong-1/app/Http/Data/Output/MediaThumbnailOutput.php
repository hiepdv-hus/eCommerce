<?php

namespace App\Http\Data\Output;

use App\Libraries\Request\Data\IO;

/**
 * Class MediaThumbnailOutput
 * @package App\Http\Data\Output
 */
class MediaThumbnailOutput extends IO
{
    public $mediaId;
    public $dimension;
    public $width;
    public $height;
    public $url;

    /**
     * @var array $resultMap
     */
    protected $resultMap = [];
}