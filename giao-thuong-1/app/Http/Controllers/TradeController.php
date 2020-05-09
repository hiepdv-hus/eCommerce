<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\FrontendController;
use App\News;
use Illuminate\Http\Request;
use Exception;

class TradeController extends FrontendController
{
    public function list(){
        $discount_products=News::all();
        return view('tradeList',compact('discount_products'));
    }

    public function detail($id, Request $request){
        $product=News::find($id);
        return view('tradeDetail', compact('product'));
    }
}
