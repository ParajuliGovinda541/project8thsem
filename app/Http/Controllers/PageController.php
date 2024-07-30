<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function aboutus()
     {
         return view('aboutus');
     }

     public function contactus()
     {
         return view('contactus');
     }
     public function products()
     {
         return view('products');
     }
     public function category()
     {
         return view('category');
     }
     public function login()
     {
         return view('login');
     }
     public function register()
     {
         return view('register');
     }
}
