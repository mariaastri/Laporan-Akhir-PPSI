<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index(){
        $data = Product::all();
        return view('frontend.shop', compact('data'));
    }
}
