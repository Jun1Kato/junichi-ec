<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
    //    $order = Order::first();　// Userモデル（usersテーブル）で一番最初にヒットするデータをコレクションで返す
 
    //    dd($order->id); // nameの値をデバッグ
    $orders = DB::table('orders')->get();

        return view('complete', ['orders' => $orders]);
    }
}
