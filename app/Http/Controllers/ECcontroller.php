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
    public function showProduct(Request $request)
    {
        $value = $request->input('id');
        return view('product')->with('val', $value);
        ;
    }
    public function showPurchase(Request $request)
    {
        $value = $request->input('id');
        return view('purchase')->with('val', $value);
    }
    public function exePurchase(Request $request)
    {
        $firstname = $request->firstname;
        return view('complete')->with('firstname', $firstname);
    }
    public function showComplete()
    {
        return view('complete');
    }
}
