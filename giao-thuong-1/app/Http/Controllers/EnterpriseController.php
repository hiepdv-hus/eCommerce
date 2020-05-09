<?php

namespace App\Http\Controllers;

use App\Enterprise;
use App\Http\Controllers\Base\FrontendController;
use Illuminate\Http\Request;
use Exception;

class EnterpriseController extends FrontendController
{
    public function detail($id, Request $request){
        $product=Enterprise::find($id);
        return view('enterpriseDetail', compact('product'));
    }
}
