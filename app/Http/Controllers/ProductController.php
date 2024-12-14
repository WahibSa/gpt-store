<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Product';
        return view('product', compact('title'));
    }
}
