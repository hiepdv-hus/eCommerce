<?php

namespace App\Http\Controllers\Admin\Sale;

use App\Http\Controllers\Base\BackendController;
use App\Http\Data\Input\OrderInput;
use App\Http\Models\Cart;
use App\Http\Models\CartItem;
use App\Http\Models\Customer;
use App\Http\Models\Order;
use App\Http\Models\OrderItem;
use App\Http\Models\OrderReceiver;
use App\Libraries\Constant;
use App\Libraries\Exception\LException;
use App\Libraries\Facades\ApiCenter;
use App\Libraries\Request\Data\Input;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends BackendController
{
    public function list() {
        return view('admin.order.list');
    }

    public function add() {
        return view('admin.order.add');
    }

    public function edit() {
        return view('admin.order.edit');
    }

    public function getDetail(OrderInput $input) {
        try {

        } catch (Exception $exception) {
            $this->handleException($exception);
        }

        $this->toRespondOk();
    }

    public function getList(OrderInput $input) {
        try {

        } catch (Exception $exception) {
            $this->handleException($exception);
        }

        $this->toRespondOk();
    }

    public function insert(OrderInput $input) {
        try {

        } catch (Exception $exception) {
            $this->handleException($exception);
        }

        $this->toRespondOk();
    }

    public function update(OrderInput $input) {
        try {

        } catch (Exception $exception) {
            $this->handleException($exception);
        }

        $this->toRespondOk();
    }

    public function delete(Request $request) {
        try {

        } catch (Exception $exception) {
            $this->handleException($exception);
        }

        $this->toRespondOk();
    }
}
