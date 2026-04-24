<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function index()
    {
        // Fetch all products, and automatically grab the cooperative that owns them
        $products = Product::with('cooperative')->latest()->get();
        
        return view('pages.market', compact('products'));
    }
}