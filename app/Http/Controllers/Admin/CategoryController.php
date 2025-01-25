<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttributeGroup;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (view::exists('index.admin.v1.category.index')){
            $categories=Category::with('childrenRecursive')
                ->where('parent_id',null)->paginate(20);
            return view('index.admin.v1.category.index',compact('categories'));
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(View::exists('index.admin.v1.category.create')){
            $categories=Category::all();
            return view('index.admin.v1.category.create',compact(['categories']));
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
            'title' => 'required|min:3|max:100|regex:/^[ آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/',
            'name' => 'required|min:3|max:100',
        ]);
        try{
            $category=new Category();
            $category->name=$request->input('name');
            $category->title=$request->input('title');
            $category->parent_id=$request->input('parent_id');
            $category->admin_id = 1;
            $category->image_id=$request->input('photo_id');
            $category->save();
            Session::flash('category_success','عملیات موفقیت آمیز بود');
            return redirect('admin/categories');
        }catch (\Exception $er){
            return $er;
            Session::flash('category_error','خطا در انجام عملیات');
            return redirect('admin/categories');
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
    public function edit($id)
    {
        $categories=Category::all();
        $category=Category::findorfail($id);
        return view('index.admin.v1.category.edit',compact(['category','categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required|min:3|max:100|alpha',
            'name'=>'required|min:3|max:100|alpha',
        ]);
        try {
            $category=Category::findorfail($id);
            $category->name=$request->input('name');
            $category->title=$request->input('title');
            $category->parent_id=$request->input('parent_id');
            if(($request->input('photo_id')!=null)&&($request->input('image_id')!=null)){
                $category->image_id=$request->input('photo_id');
            }elseif (($request->input('image_id')==null)&&($request->input('photo_id')!=null)){
                $category->image_id=$request->input('photo_id');
            }
            elseif (($request->input('image_id')!=null)&&($request->input('photo_id')==null)){
                $category->image_id=$request->input('image_id');
            }
            else{
                $category->image_id=null;
            }
            $category->save();
            Session::flash('category_success','عملیات موفقیت آمیز بود');
            return redirect('admin/categories');
        }catch (\Exception $er){
            Session::flash('category_error','خطا در انجام عملیات');
            return redirect('admin/categories');
        }
    }

    public function delete($id)
    {
        try{
            $category=Category::findorfail($id);
            $category->delete();
            Session::flash('category_success','عملیات موفقیت آمیز بود');
            return redirect('admin/categories');
        }catch (\Exception $er){
            Session::flash('category_error','خطا در انجام عملیات');
            return redirect('admin/categories');
        }

    }

    public function indexSetting($id){
        if(View::exists('index.admin.v1.category.setting')){
            $category=Category::findorfail($id);
            $attributeGroups=AttributeGroup::all();
            return view('index.admin.v1.category.setting',compact(['category','attributeGroups']));
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }
    public function Setting(Request $request,$id){
        try{
            $category=Category::findorfail($id);
            $category->attributeGroups()->sync($request->attributeGroups);
            $category->save();
            Session::flash('category_success','عملیات با موفقیت انجام شد');
            return redirect()->to('admin/categories');}
        catch (\Exception $m){
            Session::flash('category_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/categories');
        }
    }
    public function apiIndex()
    {
        $categories=Category::with('childrenRecursive')
            ->where('parent_id',null)
            ->get();
        $response=[
            'categories'=>$categories
        ];
        return response()->json($response,200);

    }
    public function apiIndexAttribute(Request $request)
    {
        $categories=$request->all();
        $attributeGroup=AttributeGroup::with('attributeValue','categories')
            ->whereHas('categories',function ($q) use ($categories){
                $q->whereIn('categories.id',$categories);
            })->get();
        $response=[
            'attributes'=>$attributeGroup
        ];
        return response()->json($response,200);

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
