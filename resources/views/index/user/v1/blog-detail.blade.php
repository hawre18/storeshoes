@extends('template.user.v1.layout')
@section('content')
    <br>
    <br>
<!-- blog-detail -->
    <div class="blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-detail-main">
                        <div class="blog-detail-main-heading">
                            <div class="title">{{$blog->title}}</div>
                            <div class="meta">توسط <span>{{$blog->creator}}</span> در <span>{{\Hekmatinasser\Verta\Verta::instance($blog->created_at)->formatDate(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</span></div>
                            <div class="image">
                                <img class="lazyload" data-src="{{asset('storage/photos/'.$blog->image->path)}}" src="{{asset('storage/photos/'.$blog->image->path)}}" alt="">
                            </div>
                        </div>


                        <div class="desc">
                        {!! $blog->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-sidebar-mobile d-flex">
        <button data-bs-toggle="offcanvas" data-bs-target="#sidebarmobile" aria-controls="offcanvasRight"><i class="icon-open"></i></button>
    </div>
    <!-- /blog-detail -->

    <!-- مقالات مرتبط -->
    <section class="mb_30">
        <div class="container">
            <div class="flat-title">
                <h5 class="">مقالات</h5>
            </div>
            <div class="hover-sw-nav view-defaul hover-sw-5">
                <div class="swiper tf-sw-recent" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        @foreach($blogs as $row)
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item">
                                    <div class="article-thumb radius-10">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="{{asset('storage/photos/'.$row->image->path)}}" src="{{asset('storage/photos/'.$row->image->path)}}" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="{{route('blogs.list',[$row->id])}}" class="tf-btn style-2 btn-fill radius-3 animate-hover-btn">{{$row->title}}</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="{{route('blogs.list',[$row->id])}}" class="">{!! substr($row->body,0,150) !!}</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="{{route('blogs.list',[$row->id])}}" class="tf-btn btn-line fw-6">ادامه مطلب<i class="icon icon-arrow1-top-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="nav-sw nav-next-slider nav-next-recent box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                <div class="nav-sw nav-prev-slider nav-prev-recent box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                <div class="sw-dots d-flex style-2 sw-pagination-recent justify-content-center"></div>
            </div>
        </div>
    </section>
    <!-- /مقالات مرتبط -->
@endsection
