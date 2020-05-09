<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\FrontendController;
use Illuminate\Support\Facades\Route;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends FrontendController
{
    /**
     * Index page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home', [
            'is_home' => Route::getCurrentRoute()->uri() == '/'
        ]);
    }
}
