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

    public function getProductDetails($id, $query, $count = 10, $inRandomOrder = true)
    {
        $product=Product::with(['images','attributeValues.attributeGroup','brand','categories'])->whereId($id)->first();
        //$commentsProduct=Comment::with('user')->whereProduct_id($id)->orderBy('created_at','desc')
            //->whereStatus('1')->get();
       // return $product->categories[0]->id;
        $relatedProducts=Product::with(['categories','images'])->whereHas('categories',function ($q)use($product){
            $q->where('id',$product->categories[0]->id);
       })->inRandomOrder()->take(8)->get();
        return view('index.user.v1.productDetail',compact(['product','relatedProducts']));
    }

}
