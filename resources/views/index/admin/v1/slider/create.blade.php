@extends('template.admin.v1.layout')
@section('styles')
    <link rel="stylesheet" href="{{asset('/assets/admin/v1/css/dropzone.css')}}">
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">

            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">افزودن اسلاید جدید</h4>
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
                                        <a href="{{route('slides.create')}}" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">افزودن اسلاید</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                @if(Session::has('slide_error'))
                    <div class="alert alert-error">
                    </div>{{Session('slide_error')}}<div>
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
                <form method="POST" action="{{route('slides.store')}}" enctype="multipart/form-data">
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
                                    <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">متن اصلی</label>
                                    <input name="description" value="{{old('description')}}" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="فقط حروف انگلیسی" id="example-text-input">
                                </div>
                                <div class="mb-4">
                                    <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">لینک</label>
                                    <input name="link" value="{{old('link')}}" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="فقط حروف انگلیسی" id="example-text-input">
                                </div>
                                <div class="mt-8">
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="mb-3">
                                                <div class="mb-2">
                                                    <label for="choices-single-groups" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">وضعیت</label>
                                                </div>
                                                <select name="status" >
                                                    <option value="" selected>انتخاب کنید</option>
                                                    <option value="0">غیرفعال</option>
                                                    <option value="1">فعال</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="photo">گالری تصاویر</label>
                                    <input type="hidden" name="photo_id" id="slide-photo">
                                    <div id="photo" class="dropzone" ></div>
                                    <div class="=row">
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
@section('scripts')
    <script type="text/javascript" src="{{asset('/assets/admin/v1/js/dropzone.js')}}"></script>
    <script>
        Dropzone.autoDiscover=false;
        var drop=new Dropzone('#photo',{
            addRemoveLinks:true,
            url:"{{route('images.upload')}}",
            sending:function (file,xhr,formData) {
                formData.append("_token","{{csrf_token()}}")

            },
            success: function (file,response) {
                document.getElementById('slide-photo').value=response.image_slide_id
            }
        });

    </script>
@endsection
