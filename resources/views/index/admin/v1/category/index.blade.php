@extends('template.admin.v1.layout')
@section('content')
    <div class="main-content">
        <div class="page-content dark:bg-zinc-700 h-screen">

            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">لیست دسته بندی ها</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">لیست دسته بندی ها</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits w-full text-right">
                                        <thead>
                                        <tr class="border-b border-gray-50 text-gray-700 dark:text-gray-100 dark:border-zinc-600">
                                            <th class="p-3">ردیف</th>
                                            <th class="p-3">نام</th>
                                            <th class="p-3">عنوان</th>
                                            <th class="p-3">دسته بندی والد</th>
                                            <th class="p-3">عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-gray-600">
                                        @foreach($categories as $row)
                                        <tr class="border-b border-gray-50 dark:border-zinc-600" data-id="1">
                                            <td class="p-3 dark:text-zinc-100" data-field="id" style="width: 80px">{{$loop->index+1}}</td>
                                            <td class="p-3 dark:text-zinc-100" data-field="name">{{$row->name}}</td>
                                            <td class="p-3 dark:text-zinc-100" data-field="age">{{$row->title}}</td>
                                            @if(count($row->childrenRecursive)==0)
                                                <td class="p-3 dark:text-zinc-100" data-field="age">والد</td>
                                            @endif
                                            <td class="p-3 dark:text-zinc-100" style="width: 100px">
                                                <a class="btn btn-outline-secondary btn-sm edit" title="ویرایش" href="{{route('categories.edit',$row->id)}}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a class="btn btn-outline-secondary btn-sm edit" title="حذف" href="{{route('categories.delete',$row->id)}}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <a class="btn btn-outline-secondary btn-sm edit" title="ایجاد ویژگی" href="{{route('index.setting',$row->id)}}">
                                                    <i class="fas fa-box-open"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @if(count($row->childrenRecursive)>0)
                                            @include('index.admin.v1.category.subCategory',['categories'=>$row->childrenRecursive , 'level'=>1 ])
                                        @endif
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>

@endsection
