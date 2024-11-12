<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttributeGroup;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (view::exists('index.admin.v1.product.create')){
            $brands=Brand::all();
            return view('index.admin.v1.product.create',compact('brands'));
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }
    public function checkSKU($number)
    {
        return Product::where('sku',$number)->exists();
    }
    public function generateSKU()
    {
        $number=mt_rand(1000,999999);
        if ($this->checkSKU($number)){
            return $this->generateSKU();
        }
        return (string)$number;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function apiGetCategoryAttributes($id)
    {
        $attributeGroups=AttributeGroup::with('attributeValue')
            ->whereHas('categories',function ($q)use ($id){
                $q->where('category_id',$id);
            })->get();
        $response=[
            'attributeGroups'=>$attributeGroups
        ];
        return response()->json($response,200);

    }
    public function apiGetProduct($id)
    {
        $products=Product::with('photos')->whereHas('categories',function ($q)use($id){
            $q->where('id',$id);
        })->paginate(10);
        $response=[
            'products'=>$products
        ];
        return response()->json($response,200);

    }

}
