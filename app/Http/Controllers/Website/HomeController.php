<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('website.index');
    }
    public function checkOut(){
    	return view('website.checkout');
    }
    public function cartView(){
    	return view('website.cart');
    }
    public function contact(){
    	return view('website.contact');
    }
}
