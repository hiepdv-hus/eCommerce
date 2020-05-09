<?php
/**
 * Register input
 */

use App\Http\Data\Input\CustomerInput;
use App\Http\Data\Input\MediaInput;
use App\Http\Data\Input\NewsInput;
use App\Http\Data\Input\SystemUserInput;

return [
    SystemUserInput::class,
    CustomerInput::class,
    NewsInput::class,
    MediaInput::class
];
