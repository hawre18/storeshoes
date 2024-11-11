<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (View::exists('index.admin.v1.brand.index')){
            $brands=Brand::with('image')->paginate(10);
            return view('index.admin.v1.brand.index',compact('brands'));
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (view::exists('index.admin.v1.brand.create')){
            return view('index.admin.v1.brand.create');
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:100',

        ]);
        try {
            $brand=new brand();
            $brand->name=$request->input('name');
            $brand->body=$request->input('body');
            $brand->image_id=$request->input('photo_id');
            $brand->save();
            Session::flash('brand_success','با موفقیت ایجاد شد');
            return redirect('admin/brands');
        }catch (\Exception $er){
            Session::flash('brand_error','خطا در ذخیره سازی');
            return redirect('admin/brands/create');
        }
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
        if (view::exists('index.admin.v1.brand.edit')){
            if((Brand::findorfail($id))!=null){
                $brand=Brand::with('image')->whereId($id)->first();
                return view('index.admin.v1.brand.edit',compact('brand'));
            }
            else{
                Session::flash('brand_error','خطا در بازیابی رکورد');
            }

        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|min:3|max:100',

        ]);
        try {
            $brand=Brand::findorfail($id);
            $brand->name=$request->input('name');
            $brand->body=$request->input('body');
            if(($request->input('photo_id')!=null)&&($request->input('image_id')!=null)){
                $brand->image_id=$request->input('photo_id');
            }elseif (($request->input('image_id')==null)&&($request->input('photo_id')!=null)){
                $brand->image_id=$request->input('photo_id');
            }
            elseif (($request->input('image_id')!=null)&&($request->input('photo_id')==null)){
                $brand->image_id=$request->input('image_id');
            }
            else{
                $brand->image_id=null;
            }
            $brand->save();
            Session::flash('brand_success','با موفقیت ایجاد شد');
            return redirect('admin/brands');
        }catch (\Exception $er){
            Session::flash('brand_error','خطا در ذخیره سازی');

            return Redirect()->back();
        }
    }
    public function delete($id)
    {
        try{
            $brand=Brand::findorfail($id);
            $brand->delete();
            Session::flash('brand_success','اسلاید با موفقیت حذف شد');
            return redirect('/admin/brands');
        }
        catch (\Exception $m){
            Session::flash('brand_error','خطایی در حذف اسلاید به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/brands');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
