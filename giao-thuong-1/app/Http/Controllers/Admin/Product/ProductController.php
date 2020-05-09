<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Base\BackendController;
use App\Http\Data\Input\ProductInput;
use Exception;
use Illuminate\Http\Request;

class ProductController extends BackendController
{
    public function list() {
        return view('admin.product.list');
    }

    public function add() {
        return view('admin.product.add');
    }

    public function edit() {
        return view('admin.product.edit');
    }

    public function getDetail(ProductInput $input) {
        try {

        } catch (Exception $exception) {
            $this->handleException($exception);
        }

        $this->toRespondOk();
    }

    public function getList(ProductInput $input) {
        try {

        } catch (Exception $exception) {
            $this->handleException($exception);
        }

        $this->toRespondOk();
    }

    public function insert(ProductInput $input) {
        try {

        } catch (Exception $exception) {
            $this->handleException($exception);
        }

        $this->toRespondOk();
    }

    public function update(ProductInput $input) {
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
