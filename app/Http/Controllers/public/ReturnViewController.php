<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReturnViewController extends Controller
{
    public function blog()
    {
        return view('public.blog');
    }
    public function shop()
    {
        return view('public.shop');
    }
}
