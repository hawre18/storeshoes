<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showDetails($id)
    {
        $product=Product::with('brand','images','categories','attributeValues')->whereId($id)->first();
        return response()->json($product);
    }
}
