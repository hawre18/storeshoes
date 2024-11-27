<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttributeGroup;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (View::exists('index.admin.v1.product.index')){
            $products=Product::paginate(10);
            return view('index.admin.v1.product.index',compact('products'));
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
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
        $validatedData = $request->validate([
            'title' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255',
            'status' => 'required|numeric',
            'price' => 'required|numeric',
            'discount_price' => 'nullable',
            'short_description' => 'required|min:3|max:255',
            'long_description' => 'required|min:3',
            'brand' => 'required',
        ]);
        try{
            $newProduct=new Product();
            $newProduct->title=$request->title;
            $newProduct->sku=$this->generateSKU();
            $newProduct->slug=$request->slug;
            $newProduct->status=$request->status;
            $newProduct->price=$request->price;
            $newProduct->discount_price=$request->discount_price;
            $newProduct->short_description=$request->short_description;
            $newProduct->long_description=$request->long_description;
            $newProduct->brand_id=$request->brand;
            $newProduct->admin_id=1;//Auth::user()->id;
            $newProduct->save();
            $attributes=explode(',',$request->input('attributes')[0]);
            $images=explode(',',$request->input('image_id')[0]);
            $newProduct->images()->sync($images);
            $newProduct->categories()->sync($request->categories);
            $newProduct->attributeValues()->sync($attributes);
            Session::flash('product_success','محصول با موفقیت ثبت شد');
            return redirect('/admin/products');
        }
        catch (\Exception $m){
            Session::flash('product_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/products');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (View::exists('index.admin.v1.product.show')){
            $product=Product::with('admin','brand','images','categories','attributeValues')->whereId($id)->first();
            return view('index.admin.v1.product.show',compact('product'));
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (View::exists('index.admin.v1.product.edit')){
            $brands=Brand::all();
            $product=Product::with('images','categories','attributeValues')->whereId($id)->first();
            return view('index.admin.v1.product.edit',compact('product','brands'));
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255',
            'status' => 'required|numeric',
            'price' => 'required|numeric',
            'discount_price' => 'nullable',
            'short_description' => 'required|min:3|max:255',
            'long_description' => 'required|min:3',
            'brand' => 'required',
        ]);
        try{
            $product=Product::findorfail($id);
            $product->title=$request->title;
            $product->slug=$request->slug;
            $product->status=$request->status;
            $product->price=$request->price;
            $product->discount_price=$request->discount_price;
            $product->short_description=$request->short_description;
            $product->long_description=$request->long_description;
            $product->brand_id=$request->brand;
            $product->admin_id=1;//Auth::user()->id;
            $product->save();
            $attributes=explode(',',$request->input('attributes')[0]);
            $photos=explode(',',$request->input('image_id')[0]);
            $product->images()->sync($photos);
            $product->categories()->sync($request->categories);
            $product->attributeValues()->sync($attributes);
            Session::flash('product_success','محصول با موفقیت ویرایش شد');
            return redirect('/admin/products');
        }
        catch (\Exception $m){
            Session::flash('product_error','خطایی در ویرایش به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/products');
        }
    }
    public function delete($id)
    {
        try{
            $product=Product::findorfail($id);
            $product->delete();
            Session::flash('product_success','محصول با موفقیت حذف شد');
            return redirect('/admin/products');
        }
        catch (\Exception $m){
            Session::flash('product_error','خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/products');
        }
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
