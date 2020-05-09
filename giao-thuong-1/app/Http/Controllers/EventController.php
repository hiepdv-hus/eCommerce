<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\FrontendController;
use App\Http\Data\Input\EventInput;
use App\Http\Data\Output\EventOuput;
use App\Event;
use App\Libraries\Flat\Entities\EventEntity;
use Illuminate\Http\Request;
use Exception;

class EventController extends FrontendController
{
    public function index(){
//        try {
//            $event = new Event();
//            $event->getDbContext()->orderByDescending(EventEntity::created_time);
//            $event->loadCollection();
//            $this->output->succeeded()
//                ->data($event->getCollection()->toOutput(EventOuput::class));
//        } catch (Exception $exception) {
//            $this->output->failed($exception->getMessage());
//        }

        $discount_products=Event::all();
        return view('event', compact('discount_products'));
    }

    public function detail($id, Request $request){
        $product=Event::find($id);
        compact($product);
    }

}
