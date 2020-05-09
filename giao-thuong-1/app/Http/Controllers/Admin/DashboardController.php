<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\BackendController;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends BackendController
{
    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}
