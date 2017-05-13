<?php

namespace App\Http\Controllers;

use App\Goods;
use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class OrdersController extends Controller
{
    public function buyAction ($id) {
        $product = Goods::find($id);
        if($product) {
            return view('order', ['goods_id' => $id]);
        }
    }

    public function orderAction() {
        $allData = Input::all();

        $order = new Orders();

        $order->customer_name = $allData['customer_name'];
        $order->phone = $allData['phone'];
        $order->city = $allData['city'];
        $order->comment = $allData['comment'];
        $order->amount = $allData['amount'];

        $order->save();
        ?><h1><?='Your order is accepted, we will call you soon';?></h1>
        <?php
        return view('layouts.head');
    }
}


