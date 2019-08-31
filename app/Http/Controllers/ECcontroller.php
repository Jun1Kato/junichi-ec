<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ECcontroller extends Controller
{
    public function showHome()
    {
        $products = DB::table('products')->distinct()->get();
        return view('home')->with('products', $products);
    }
    public function showSignUp()
    {
        return view('signup');
    }
    public function showSignIn()
    {
        return view('signin');
    }
    public function showProduct()
    {
        return view('product');
    }
    public function showPurchase()
    {
        return view('purchase');
    }
    public function exePurchase()
    {
        return redirect('complete');
    }
    public function showComplete()
    {
        return view('complete');
    }
}
