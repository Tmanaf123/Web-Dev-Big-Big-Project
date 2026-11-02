<?php

namespace App\Http\Controllers;

use App\Models\CurtainCategory;
use App\Models\CurtainProduct;
use Illuminate\Http\Request;


class CurtainProductController extends Controller
{
    public function index()
    {
        $categories = CurtainCategory::all();
        $products = CurtainProduct::all();

        return view('products', compact('categories', 'products'));
    }
}
