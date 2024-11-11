<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttributeGroup;
use App\Models\AttributeValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (View::exists('index.admin.v1.attribute-value.index')){
            $attributeValues=AttributeValue::with('attributeGroup')->paginate(10);
            return view('index.admin.v1.attribute-value.index',compact('attributeValues'));
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (view::exists('index.admin.v1.attribute-value.create')){
            $attributesGroup=AttributeGroup::all();
            return view('index.admin.v1.attribute-value.create',compact('attributesGroup'));
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
            'title' => 'required|max:255',
            'attribute_group' => 'required',

        ]);
        try {
            $attributevalue=new AttributeValue();
            $attributevalue->title=$request->input('title');
            $attributevalue->attributeGroup_id=$request->input('attribute_group');
            $attributevalue->save();
            Session::flash('attribute-value_success','با موفقیت ایجاد شد');
            return redirect('admin/attribute-values');
        }catch (\Exception $er){
            Session::flash('attribute-value_error','خطا در ذخیره سازی');
            return redirect('admin/attribute-values/create');
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
        if (view::exists('index.admin.v1.attribute-value.edit')){
            if((AttributeValue::findorfail($id))!=null){
                $attributeValue=AttributeValue::with('attributeGroup')->whereId($id)->first();
                $attributeGroups=AttributeGroup::all();
                return view('index.admin.v1.attribute-value.edit',compact('attributeValue','attributeGroups'));
            }
            else{
                Session::flash('attribute-value_error','خطا در بازیابی رکورد');
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
            'attribute-group-id'=>'required',

        ]);
        try {
            $attributeValue=AttributeValue::findorfail($id);
            $attributeValue->title=$request->input('title');
            $attributeValue->attributeGroup_id=$request->input('attribute-group-id');
            $attributeValue->save();
            Session::flash('attribute-values_success','با موفقیت ویرایش شد');
            return redirect('admin/attribute-values');
        }catch (\Exception $er){
            return $er;
            Session::flash('attribute-value_error','خطا در ذخیره سازی');

            return Redirect()->back();
        }
    }

    public function delete($id)
    {
        try{
            $attributeValue=AttributeValue::findorfail($id);
            $attributeValue->delete();
            Session::flash('attribute-value_success','ویژگی با موفقیت حذف شد');
            return redirect('/admin/attribute-values');
        }
        catch (\Exception $m){
            Session::flash('attribute_value_error','خطایی در حذف ویژگی به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/attribute-values');
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
