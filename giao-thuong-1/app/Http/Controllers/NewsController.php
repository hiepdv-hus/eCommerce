<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\FrontendController;
use Illuminate\Http\Request;
use Exception;

class NewsController extends FrontendController
{
    public function index() {
        return view('news');
    }
}
