<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (View::exists('index.admin.v1.slider.index')){
            $slides=Slide::with('image')->paginate(10);
            return view('index.admin.v1.slider.index',compact('slides'));
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (view::exists('index.admin.v1.slider.create')){
            return view('index.admin.v1.slider.create');
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

        ]);
        try {
            $slide=new Slide();
            $slide->title=$request->input('title');
            $slide->description=$request->input('description');
            $slide->status=$request->input('status');
            $slide->link=$request->input('link');
            $slide->image_id=$request->input('photo_id');
            $slide->save();
            Session::flash('slide_success','با موفقیت ایجاد شد');
            return redirect('admin/slides');
        }catch (\Exception $er){
            Session::flash('slide_error','خطا در ذخیره سازی');
            return redirect('admin/slides/create');
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
        if (view::exists('index.admin.v1.slider.edit')){
            if((Slide::findorfail($id))!=null){
                $slide=Slide::with('image')->whereId($id)->first();
                return view('index.admin.v1.slider.edit',compact('slide'));
            }
            else{
                Session::flash('slide_error','خطا در بازیابی رکورد');
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

        ]);
        try {
            $slide=Slide::findorfail($id);
            $slide->title=$request->input('title');
            $slide->description=$request->input('description');
            $slide->link=$request->input('link');
            $slide->link=$request->input('status');
            if(($request->input('photo_id')!=null)&&($request->input('image_id')!=null)){
                $slide->image_id=$request->input('photo_id');
            }elseif (($request->input('image_id')==null)&&($request->input('photo_id')!=null)){
                $slide->image_id=$request->input('photo_id');
            }
            elseif (($request->input('image_id')!=null)&&($request->input('photo_id')==null)){
                $slide->image_id=$request->input('image_id');
            }
            else{
                $slide->image_id=null;
            }
            $slide->save();
            Session::flash('slide_success','با موفقیت ایجاد شد');
            return redirect('admin/slides');
        }catch (\Exception $er){
            Session::flash('slide_error','خطا در ذخیره سازی');

            return Redirect()->back();
        }
    }

    public function delete($id)
    {
        try{
            $slide=Slide::findorfail($id);
            $slide->delete();
            Session::flash('slide_success','اسلاید با موفقیت حذف شد');
            return redirect('/admin/slides');
        }
        catch (\Exception $m){
            Session::flash('slide_error','خطایی در حذف اسلاید به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/slides');
        }
    }
    public function publish($id,$status)
    {
        try{
            if($status==1) {
                DB::table('slides')
                    ->where('id', $id)
                    ->update(array('status' => 1));
                Session::flash('slide_success', 'اسلاید با موفقیت منتشر شد');
                return redirect('/admin/slides');
            }elseif ($status==0) {
                DB::table('slides')
                    ->where('id', $id)
                    ->update(array('status' => 0));
                Session::flash('slide_error', 'اسلاید با موفقیت منقضی شد');
                return redirect('/admin/slides');
            }
        }
        catch (\Exception $m){
            Session::flash('slide_error','خطایی در انجام عملیات روی  اسلاید به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/slides');
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
