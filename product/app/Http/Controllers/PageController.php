<?php

// app/Http/Controllers/PageController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function ourProducts()
    {
        return view('our_products');
    }
    public function ourPackages()
    {
        return view('packages');
    }
}
