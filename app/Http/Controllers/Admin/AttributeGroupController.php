<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttributeGroup;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class AttributeGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (View::exists('index.admin.v1.attributeGroup.index')){
            $attribute_groups=AttributeGroup::paginate(10);
            return view('index.admin.v1.attributeGroup.index',compact('attribute_groups'));
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (view::exists('index.admin.v1.attributeGroup.create')){
            return view('index.admin.v1.attributeGroup.create');
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
            'title'=>'required|min:3|max:100',
            'type'=>'required',

        ]);
        try {
            $attribute_group=new AttributeGroup();
            $attribute_group->title=$request->input('title');
            $attribute_group->type=$request->input('type');
            $attribute_group->save();
            Session::flash('attribute-group_success','با موفقیت ایجاد شد');
            return redirect('admin/attribute-groups');
        }catch (\Exception $er){
            Session::flash('attribute-group_error','خطا در ذخیره سازی');
            return redirect('admin/attribute-groups/create');
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
        if (view::exists('index.admin.v1.attributeGroup.edit')){
            if((AttributeGroup::findorfail($id))!=null){
                $attribute_group=AttributeGroup::first();
                return view('index.admin.v1.attributeGroup.edit',compact('attribute_group'));
            }
            else{
                Session::flash('attribute-group_error','خطا در بازیابی رکورد');
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
            'title'=>'required|min:3|max:100',
            'type'=>'required',

        ]);
        try {
            $attribute_group=AttributeGroup::findorfail($id);
            $attribute_group->title=$request->input('title');
            $attribute_group->type=$request->input('type');
            $attribute_group->save();
            Session::flash('attribute-groups_success','با موفقیت ویرایش شد');
            return redirect('admin/attribute-groups');
        }catch (\Exception $er){
            Session::flash('attribute-group_error','خطا در ذخیره سازی');

            return Redirect()->back();
        }
    }
    public function delete($id)
    {
        try{
            $attribute_group=AttributeGroup::findorfail($id);
            $attribute_group->delete();
            Session::flash('attribute-group_success','گروه ویژگی با موفقیت حذف شد');
            return redirect('/admin/attribute-groups');
        }
        catch (\Exception $m){
            Session::flash('attribute_group_error','خطایی در حذف گروه ویژگی به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/attribute-groups');
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
