@extends('template.user.v1.layout')
@section('content')
    <!-- page-title -->
    <div class="tf-page-title">
        <div class="container-full">
            <div class="row">
                <div class="col-12">
                    <div class="heading text-center">لیست وبلاگ</div>
                    <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                        <li>
                            <a href="{{url('/')}}">صفحه اصلی</a>
                        </li>
                        <li>
                            <i class="icon-arrow-right"></i>
                        </li>
                        <li>
                            لیست
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /page-title -->

    <!-- blog-list -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-list-main">
                    <div class="list-blog">
                        @foreach($blogs as $blog) @endforeach
                        <div class="blog-article-item style-row">
                            <div class="article-thumb">
                                <a href="blog-detail.html">
                                    <img class="lazyload" data-src="{{asset('storage/photos/'.$blog->image->path)}}" src="{{asset('storage/photos/'.$blog->image->path)}}" alt="img-blog">
                                </a>
                            </div>
                            <div class="article-content">
                                <div class="article-title">
                                    <a href="blog-detail.html" class="">{{$blog->title}}</a>
                                </div>
                                <div class="desc">
                                    {!! substr($blog->body,0,150) !!}
                                </div>
                                <div class="article-btn">
                                    <a href="{{route('blog.details',[$blog->id])}}" class="tf-btn btn-line fw-6">ادامه مطلب<i class="icon icon-arrow1-top-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-sidebar-mobile">
        <button data-bs-toggle="offcanvas" data-bs-target="#sidebarmobile" aria-controls="offcanvasRight"><i class="icon-open"></i></button>
    </div>
    <!-- /blog-list -->

@endsection
