<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (View::exists('index.admin.v1.blog.index')){
            $blogs=Blog::with('image')->paginate(10);
            return view('index.admin.v1.blog.index',compact('blogs'));
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (view::exists('index.admin.v1.blog.create')){
            return view('index.admin.v1.blog.create');
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
            'title'=>'required|min:3|max:255',
            'body'=>'required|min:3',
            'creator'=>'required|min:3|max:100',

        ]);
        try {
            $blog=new Blog();
            $blog->title=$request->input('title');
            $blog->body=$request->input('body');
            $blog->creator=$request->input('creator');
            $blog->image_id=$request->input('photo_id');
            $blog->save();
            Session::flash('blog_success','با موفقیت ایجاد شد');
            return redirect('admin/blogs');
        }catch (\Exception $er){
            Session::flash('blog_error','خطا در ذخیره سازی');
            return redirect('admin/blogs/create');
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
        if (view::exists('index.admin.v1.blog.edit')){
            if((Blog::findorfail($id))!=null){
                $blog=Blog::with('image')->whereId($id)->first();
                return view('index.admin.v1.blog.edit',compact('blog'));
            }
            else{
                Session::flash('blog_error','خطا در بازیابی رکورد');
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
            'title'=>'required|min:3|max:255',
            'body'=>'required|min:3',
            'creator'=>'required|min:3|max:100',

        ]);
        try {
            $blog=Blog::findorfail($id);
            $blog->title=$request->input('title');
            $blog->body=$request->input('body');
            $blog->creator=$request->input('creator');
            if(($request->input('photo_id')!=null)&&($request->input('image_id')!=null)){
                $blog->image_id=$request->input('photo_id');
            }elseif (($request->input('image_id')==null)&&($request->input('photo_id')!=null)){
                $blog->image_id=$request->input('photo_id');
            }
            elseif (($request->input('image_id')!=null)&&($request->input('photo_id')==null)){
                $blog->image_id=$request->input('image_id');
            }
            else{
                $blog->image_id=null;
            }
            $blog->save();
            Session::flash('blog_success','با موفقیت ایجاد شد');
            return redirect('admin/blogs');
        }catch (\Exception $er){
            Session::flash('blog_error','خطا در ذخیره سازی');

            return Redirect()->back();
        }
    }
    public function delete($id)
    {
        try{
            $blog=Blog::findorfail($id);
            $blog->delete();
            Session::flash('blog_success','خبر با موفقیت حذف شد');
            return redirect('/admin/blogs');
        }
        catch (\Exception $m){
            Session::flash('blog_error','خطایی در حذف خبر به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/blogs');
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
