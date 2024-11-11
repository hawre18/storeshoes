@extends('template.admin.v1.layout')
@section('content')
<div class="main-content">
    <div class="page-content dark:bg-zinc-700">

        <div class="container-fluid px-[0.625rem]">

            <div class="grid grid-cols-1 mb-5">
                <div class="flex items-center justify-between">
                    <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">افزودن دسته بندی جدید</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                   مدیریت
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-gray-400 -rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{route('categories.create')}}" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">افزودن دسته بندی</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            @if(Session::has('category_error'))
                <div class="alert alert-error">
                </div>{{Session('category_error')}}<div>
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error )
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{route('categories.store')}}">
                @csrf
                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">اطلاعات</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">عنوان</label>
                                <input name="title" value="{{old('title')}}" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="کفش" id="example-text-input">
                            </div>
                            <div class="mb-4">
                                <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">نام</label>
                                <input name="name" value="{{old('name')}}" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="فقط حروف انگلیسی" id="example-text-input">
                            </div>
                            <div class="mt-8">
                                <div class="grid grid-cols-12 gap-5">
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <label for="choices-single-groups" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">زیر دسته</label>
                                            </div>
                                            <select name="parent_id" >
                                                <option value="">انتخاب کنید</option>
                                                @foreach($categories as $row)
                                                    <option value="{{$row->id}}">{{$row->title}}</option>
                                               @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="grid grid-cols-12 gap-5">
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="mb-3">
                                            <button type="submit" class="btn active:bg-green-600">ثبت</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection