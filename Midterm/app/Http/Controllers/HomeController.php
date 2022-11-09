<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('frontpage.landingpage',['title' => "Landing Page"]);
    }
    function cartPage(){
        return view('layouts.cart',['title' => "Cart Page"]);
    }
}
