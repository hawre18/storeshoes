@extends('template.admin.v1.layout')
@section('content')
<div class="main-content">

    <div class="page-content dark:bg-zinc-700">

        <div class="container-fluid px-[0.625rem]">

            <div class="grid grid-cols-1 mb-5">
                <div class="flex items-center justify-between">
                    <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">جزئیات محصول</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                    برنامه ها
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-gray-400 -rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">جزئیات محصول</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class=" grid grid-cols-1">

                <div class="grid grid-cols-1 xl:grid-cols-12 gap-5">

                    <div class="col-span-12 xl:col-span-8">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <h4 class="text-gray-700 text-21 dark:text-gray-100">{{$product->title}}</h4>
                                </div>
                                <div class="mb-4">
                                    @foreach($product->images as $image)
                                        <div class="col-sm-3" id="updated_image_{{$image->id}}">
                                            <img class="img-responsive"  src="{{asset('storage/photos/'.$image->path)}}">
                                        </div>
                                    @endforeach
                                </div>

                                <div class="grid grid-cols-12">
                                    <div class="col-span-4">
                                        <div class="text-center">
                                            <h6 class="mb-2 text-gray-700 dark:text-gray-100">دسته بندی ها</h6>
                                            @foreach($product->categories as $category)
                                                <p class="text-gray-500 dark:text-zinc-100 text-15 mb-3">{{$category->title}}</p>
                                            @endforeach
                                            <p class="text-gray-500 dark:text-zinc-100 text-15 mb-3">پروژه</p>
                                        </div>
                                    </div>
                                    <div class="col-span-4">
                                        <div class="text-center">
                                            <h6 class="mb-2 text-gray-700 dark:text-gray-100">تاریخ</h6>
                                            <p class="text-gray-500 dark:text-zinc-100 text-15 mb-3">20 بهمن 1403</p>
                                        </div>
                                    </div>
                                    <div class="col-span-4">
                                        <div class="text-center">
                                            <p class="text-gray-500 dark:text-zinc-100 mb-2">کاربر ایجاد کننده</p>
                                            <h5 class="text-15 mb-3 text-gray-700 dark:text-gray-100">گیلبرت اسمیت</h5>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4 border-gray-100 dark:border-zinc-600">

                                <div class="mt-4">
                                    <div class="text-gray-500 dark:text-zinc-100 text-14">
                                        <div class="mt-4">
                                            <h5 class="mb-3 text-gray-700 dark:text-gray-100">ویژگی ها: </h5>
                                            <div>
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-4">
                                                        <div>
                                                            <ul class="ltr:pl-5 rtl:pr-5 list-disc">
                                                                @foreach($product->attributeValues as $attributeValue)
                                                                <li class="py-1">{{$attributeValue->attributeGroup->title.":"." "}}{{$attributeValue->title}}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h2>توضیحات کوتاه: </h2>
                                            <p class="mb-4">{!! $product->short_description !!}</p>
                                            <hr>
                                            <h2>توضیحات بلند: </h2>
                                            <p class="mb-4">{!! $product->long_description !!}</p>

                                        </div>
                                    </div>
                                    <hr class="my-5 border-gray-50 dark:border-zinc-600">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
    </div>
</div>
@endsection
