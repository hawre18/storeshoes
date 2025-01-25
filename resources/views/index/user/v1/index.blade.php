@extends('template.user.v1.layout')
@section('slider')
    <!-- Slider -->
    <div class="tf-slideshow slider-effect-fade position-relative">
        <div class="swiper tf-sw-slideshow" data-preview="1" data-mobile="1" data-space="0" data-loop="true" data-auto-play="false" data-delay="0" data-speed="1000">
            <div class="swiper-wrapper">
                @foreach(App\Models\Slide::with('image')->where('status',1)->get() as $slider)
                    <div class="swiper-slide">
                        <div class="wrap-slider">
                            <img src="{{asset('storage/photos/'.$slider->image->path)}}" alt="fashion-slideshow">
                            <div class="box-content">
                                <div class="container">
                                    <h1 class="fade-item fade-item-1">{{$slider->title}}</h1>
                                    <p class="fade-item fade-item-2">{{$slider->description}}</p>
                                    <a href="{{$slider->link}}" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>جزئیات</span><i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="wrap-pagination">
            <div class="container">
                <div class="sw-dots sw-pagination-slider justify-content-center"></div>
            </div>
        </div>
    </div>
    <!-- /Slider -->
@endsection
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Categories -->
    <section class="flat-spacing-4 flat-categorie">
        <div class="container-full">
            <div class="flat-title-v2">
                <div class="box-sw-navigation">
                    <div class="nav-sw nav-next-slider nav-next-collection"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-collection"><span class="icon icon-arrow-right"></span></div>
                </div>
                <span class="text-3 fw-7 text-uppercase title wow fadeInUp" data-wow-delay="0s">خرید بر اساس دسته بندی</span>
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-8">
                    <div class="swiper tf-sw-collection" data-preview="3" data-tablet="2" data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-loop="false" data-auto-play="false">
                        <div class="swiper-wrapper">
                            @foreach($categories=App\Models\Category::where('parent_id',null)->with('image')->paginate(5) as $cat)
                                <div class="swiper-slide" lazy="true">
                                    <div class="collection-item style-left hover-img">
                                        <div class="collection-inner">
                                            <a href="{{route('category.index',['id'=>$cat])}}" class="collection-image img-style">
                                                <img class="lazyload" data-src="{{asset('storage/photos/'.$cat->image->path)}}" src="{{asset('storage/photos/'.$cat->image->path)}}" alt="collection-img">
                                            </a>
                                            <div class="collection-content">
                                                <a href="{{route('category.index',['id'=>$cat])}}" class="tf-btn collection-title hover-icon fs-15"><span>{{$cat->title}}</span><i class="icon icon-arrow1-top-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="discovery-new-item">
                        <h5>جدیدترین ها</h5>
                        <a href="shop-collection-list.html"><i class="icon-arrow1-top-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /Categories -->
    <!-- Seller -->
    <section class="flat-spacing-5 pt_0 flat-seller">
        <div class="container">
            <div class="flat-title">
                <span class="title wow fadeInUp" data-wow-delay="0s">پرفروش ترین</span>
                <p class="sub-title wow fadeInUp" data-wow-delay="0s">جدیدترین سبک ها را بخرید: با جدیدترین محصولات ما آشنا باشید</p>
            </div>
            <div class="grid-layout loadmore-item wow fadeInUp" data-wow-delay="0s" data-grid="grid-4">
                @foreach(App\Models\Product::with('images')->orderBy('sellerCount','DESC')->paginate(12) as $product)
                    <div class="card-product fl-item">
                        <div class="card-product-wrapper">
                            <a href="{{route('product.details',[$product->id])}}" class="product-img">
                                <img class="lazyload img-product getsrc{{$product->id}}"  data-src="{{asset('storage/photos/'.$product->images[0]->path)}}" src="{{asset('storage/photos/'.$product->images[0]->path)}}" alt="image-product">
                                <img class="lazyload img-hover" data-src="{{asset('storage/photos/'.$product->images[0]->path)}}" src="{{asset('storage/photos/'.$product->images[0]->path)}}" alt="image-product">
                            </a>
                            <div class="list-product-btn">
                                <a href="{{route('cart.add',['id'=>$product->id])}}"  class="box-icon bg_white quick-add tf-btn-loading">
                                    <span class="icon icon-bag"></span>
                                    <span class="tooltip">افزودن به سبد خرید</span>
                                </a>
                                <a href="#" class="box-icon bg_white wishlist btn-icon-action">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                    <span class="icon icon-delete"></span>
                                </a>
                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">افزودن به مقایسه</span>
                                    <span class="icon icon-check"></span>
                                </a>

                                <a href="javascript:void(0)"  id="show-product" data-url="{{ route('products.quickView', $product->id) }}" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">نمایش سریع</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-product-info">
                            <a href="{{route('product.details',[$product->id])}}" class="title link">{{$product->title}}</a>
                            @if($product->discount_price)
                                <span class="price"><strike>{{$product->price}}<toman> تومان </toman></strike></span>
                                <span class="price">{{$product->discount_price}}<toman> تومان </toman></span>
                            @else
                                <span class="price">{{$product->price}}<toman> تومان </toman></span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="tf-pagination-wrap view-more-button text-center">
                <button class="tf-btn-loading tf-loading-default style-2 btn-loadmore "><span class="text">بارگزاری بیشتر</span></button>
            </div>
        </div>
    </section>
    <!-- /Seller -->
    <!-- Lookbook -->
    <section class="flat-spacing-6">
        <div class="flat-title wow fadeInUp" data-wow-delay="0s">
            <span class="title">ظاهر را خرید کنید</span>
            <p class="sub-title">الهام بگیرید و به خودتان اجازه دهید از یک مد منحصر به فرد به مد دیگر الهام بگیرید.</p>
        </div>
        <div class="swiper tf-sw-lookbook" data-preview="2" data-tablet="2" data-mobile="1" data-space-lg="0" data-space-md="0">
            <div class="swiper-wrapper">
                <div class="swiper-slide" lazy="true">
                    <div class="wrap-lookbook lookbook-1">
                        <div class="image">
                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/shop/file/lookbook-3.jpg')}}" src="{{asset('assets/user/v1/images/shop/file/lookbook-3.jpg')}}" alt="image-lookbook">
                        </div>
                        <div class="lookbook-item item-1">
                            <div class="inner">
                                <div class="btn-group dropdown dropup dropdown-center">
                                    <button class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span></span>
                                    </button>
                                    <ul class="dropdown-menu p-0 border-0">
                                        <li>
                                            <div class="lookbook-product">
                                                <a href="product-detail.html" class="image">
                                                    <img class="lazyload" data-src="{{asset('assets/user/v1/images/shop/products/img-p2.png')}}" src="{{asset('assets/user/v1/images/shop/products/img-p2.png')}}" alt="lookbook-item">
                                                </a>
                                                <div class="content-wrap">
                                                    <div class="product-title">
                                                        <a href="#">بدنه ی شلواری</a>
                                                    </div>
                                                    <div class="price">112.00<toman> تومان </toman></div>
                                                </div>
                                                <a href="#quick_view" data-bs-toggle="modal" class=""><i class="icon-view"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lookbook-item item-2">
                            <div class="inner">
                                <div class="btn-group dropdown dropup dropdown-center">
                                    <button class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span></span>
                                    </button>
                                    <ul class="dropdown-menu p-0 border-0">
                                        <li>
                                            <div class="lookbook-product">
                                                <a href="product-detail.html" class="image">
                                                    <img class="lazyload" data-src="{{asset('assets/user/v1/images/shop/products/img-p4.png')}}" src="{{asset('assets/user/v1/images/shop/products/img-p4.png')}}" alt="">
                                                </a>
                                                <div class="content-wrap">
                                                    <div class="product-title">
                                                        <a href="#">تی شرت راه راه تابستانه</a>
                                                    </div>
                                                    <div class="price">20.00<toman> تومان </toman></div>
                                                </div>
                                                <a href="#quick_view" data-bs-toggle="modal" class=""><i class="icon-view"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" lazy="true">
                    <div class="wrap-lookbook lookbook-2">
                        <div class="image">
                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/shop/file/lookbook-4.jpg')}}" src="{{asset('assets/user/v1/images/shop/file/lookbook-4.jpg')}}" alt="image-lookbook">
                        </div>
                        <div class="lookbook-item item-1">
                            <div class="inner">
                                <div class="btn-group dropdown dropup dropdown-center">
                                    <button class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span></span>
                                    </button>
                                    <ul class="dropdown-menu p-0 border-0">
                                        <li>
                                            <div class="lookbook-product">
                                                <a href="product-detail.html" class="image">
                                                    <img class="lazyload" data-src="{{asset('assets/user/v1/images/shop/products/img-p5.png')}}" src="{{asset('assets/user/v1/images/shop/products/img-p5.png')}}" alt="">
                                                </a>
                                                <div class="content-wrap">
                                                    <div class="product-title">
                                                        <a href="#">زیرپوش آجدار آدیداس</a>
                                                    </div>
                                                    <div class="price">20.00<toman> تومان </toman></div>
                                                </div>
                                                <a href="#quick_view" data-bs-toggle="modal" class=""><i class="icon-view"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-pagination">
                <div class="container-full">
                    <div class="sw-dots sw-pagination-lookbook justify-content-center"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Lookbook -->
    <!-- Testimonial -->
    <section class="flat-spacing-5 pt_0 flat-testimonial">
        <div class="container">
            <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                <span class="title">مشتریان خوشحال</span>
                <p class="sub-title">بشنوید که درباره ما چه می گویند</p>
            </div>
            <div class="wrap-carousel">
                <div class="swiper tf-sw-testimonial" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="15">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item style-column wow fadeInUp" data-wow-delay="0s">
                                <div class="rating">
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                </div>
                                <div class="heading">بهترین سایت مد آنلاین</div>
                                <div class="text">
                                    “ من همیشه چیزی شیک و مقرون به صرفه در این وب سایت مد پیدا می کنم ”
                                </div>
                                <div class="author">
                                    <div class="name">جمشید ایرانی</div>
                                    <div class="metas">مشتری از ایالات متحده آمریکا</div>
                                </div>
                                <div class="product">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/shop/products/img-p2.png')}}" src="{{asset('assets/user/v1/images/shop/products/img-p2.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="content-wrap">
                                        <div class="product-title">
                                            <a href="product-detail.html">بدنه ی شلواری</a>
                                        </div>
                                        <div class="price">105.95<toman> تومان </toman></div>
                                    </div>
                                    <a href="product-detail.html" class=""><i class="icon-arrow1-top-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item style-column wow fadeInUp" data-wow-delay=".1s">
                                <div class="rating">
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                </div>
                                <div class="heading">انتخاب عالی و کیفیت</div>
                                <div class="text">
                                    "من عاشق انواع سبک ها و لباس های با کیفیت بالا در این وب سایت مد هستم."
                                </div>
                                <div class="author">
                                    <div class="name">آلن لین</div>
                                    <div class="metas">مشتری از فرانسه</span></div>
                                </div>
                                <div class="product">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/shop/products/img-p3.png')}}" src="{{asset('assets/user/v1/images/shop/products/img-p3.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="content-wrap">
                                        <div class="product-title">
                                            <a href="product-detail.html">پیراهن نخی</a>
                                        </div>
                                        <div class="price">7.95<toman> تومان </toman></div>
                                    </div>
                                    <a href="product-detail.html" class=""><i class="icon-arrow1-top-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item style-column wow fadeInUp" data-wow-delay=".2s">
                                <div class="rating">
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                </div>
                                <div class="heading">بهترین خدمات مشتری</div>
                                <div class="text">
                                    "بالاخره یک وب سایت مد با گزینه های شیک و جذاب در اندازه خودم پیدا کردم."
                                </div>
                                <div class="author">
                                    <div class="name">پیتر روپ</div>
                                    <div class="metas">مشتری از ایالات متحده آمریکا</div>
                                </div>
                                <div class="product">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/shop/products/img-p4.png')}}" src="{{asset('assets/user/v1/images/shop/products/img-p4.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="content-wrap">
                                        <div class="product-title">
                                            <a href="product-detail.html">تی شرت راه راه تابستانه</a>
                                        </div>
                                        <div class="price">از طرف 18.95 تومان</div>
                                    </div>
                                    <a href="product-detail.html" class=""><i class="icon-arrow1-top-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item style-column wow fadeInUp" data-wow-delay=".3s">
                                <div class="rating">
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                </div>
                                <div class="heading">انتخاب عالی و کیفیت</div>
                                <div class="text">
                                    "من عاشق انواع سبک ها و لباس های با کیفیت بالا در این وب سایت مد هستم."
                                </div>
                                <div class="author">
                                    <div class="name">هلن آسه</div>
                                    <div class="metas">مشتری از ژاپن</span></div>
                                </div>
                                <div class="product">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/shop/products/img-p5.png')}}" src="{{asset('assets/user/v1/images/shop/products/img-p5.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="content-wrap">
                                        <div class="product-title">
                                            <a href="product-detail.html">مشتری از ژاپن</a>
                                        </div>
                                        <div class="price">16.95<toman> تومان </toman></div>
                                    </div>
                                    <a href="product-detail.html" class=""><i class="icon-arrow1-top-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-sw nav-next-slider nav-next-testimonial lg"><span class="icon icon-arrow-left"></span></div>
                <div class="nav-sw nav-prev-slider nav-prev-testimonial lg"><span class="icon icon-arrow-right"></span></div>
                <div class="sw-dots style-2 sw-pagination-testimonial justify-content-center"></div>
            </div>
        </div>
    </section>
    <!-- /Testimonial -->
    <!-- brand -->
    <section class="flat-spacing-5 pt_0">
        <div class="container">
            <div class="swiper tf-sw-brand" data-loop="false" data-play="false" data-preview="6" data-tablet="3" data-mobile="2" data-space-lg="0" data-space-md="0">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/brand/brand-01.png')}}" src="{{asset('assets/user/v1/images/brand/brand-01.png')}}" alt="image-brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/brand/brand-02.png')}}" src="{{asset('assets/user/v1/images/brand/brand-02.png')}}" alt="image-brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/brand/brand-03.png')}}" src="{{asset('assets/user/v1/images/brand/brand-03.png')}}" alt="image-brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/brand/brand-04.png')}}" src="{{asset('assets/user/v1/images/brand/brand-04.png')}}" alt="image-brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/brand/brand-05.png')}}" src="{{asset('assets/user/v1/images/brand/brand-05.png')}}" alt="image-brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/brand/brand-06.png')}}" src="{{asset('assets/user/v1/images/brand/brand-06.png')}}" alt="image-brand">
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-dots style-2 sw-pagination-brand justify-content-center"></div>
        </div>
    </section>
    <!-- /brand -->
    <!-- اینستاگرام -->
    <section class="flat-spacing-7">
        <div class="container">
            <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                <span class="title">اینستاگرام</span>
                <p class="sub-title">الهام بگیرید و به خودتان اجازه دهید از یک مد منحصر به فرد به مد دیگر الهام بگیرید.</p>
            </div>
            <div class="wrap-carousel wrap-shop-gram">
                <div class="swiper tf-sw-shop-gallery" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="7" data-space-md="7">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".2s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/shop/gallery/gallery-7.jpg')}}" src="{{asset('assets/user/v1/images/shop/gallery/gallery-7.jpg')}}" alt="image-gallery">
                                </div>
                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">افزودن سریع</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".3s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/shop/gallery/gallery-3.jpg')}}" src="{{asset('assets/user/v1/images/shop/gallery/gallery-3.jpg')}}" alt="image-gallery">
                                </div>
                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">افزودن سریع</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".4s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/shop/gallery/gallery-5.jpg')}}" src="{{asset('assets/user/v1/images/shop/gallery/gallery-5.jpg')}}" alt="image-gallery">
                                </div>
                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">افزودن سریع</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".5s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/shop/gallery/gallery-8.jpg')}}" src="{{asset('assets/user/v1/images/shop/gallery/gallery-8.jpg')}}" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">مشاهده محصول</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".6s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/shop/gallery/gallery-6.jpg')}}" src="{{asset('assets/user/v1/images/shop/gallery/gallery-6.jpg')}}" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">مشاهده محصول</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-dots sw-pagination-gallery justify-content-center"></div>
            </div>
        </div>
    </section>
    <!-- /اینستاگرام -->
    <!-- Icon box -->
    <section class="flat-spacing-7 flat-iconbox wow fadeInUp" data-wow-delay="0s">
        <div class="container">
            <div class="wrap-carousel wrap-mobile">
                <div class="swiper tf-sw-mobile" data-preview="1" data-space="15">
                    <div class="swiper-wrapper wrap-iconbox">
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-border-line text-center">
                                <div class="icon">
                                    <i class="icon-shipping"></i>
                                </div>
                                <div class="content">
                                    <div class="title">ارسال رایگان</div>
                                    <p>ارسال رایگان بالای سفارش 120 تومان</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-border-line text-center">
                                <div class="icon">
                                    <i class="icon-payment fs-22"></i>
                                </div>
                                <div class="content">
                                    <div class="title">پرداخت انعطاف پذیر</div>
                                    <p>با چند کارت اعتباری پرداخت کنید</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-border-line text-center">
                                <div class="icon">
                                    <i class="icon-return fs-22"></i>
                                </div>
                                <div class="content">
                                    <div class="title">14 روز بازگشت</div>
                                    <p>ظرف 30 روز برای تعویض</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-border-line text-center">
                                <div class="icon">
                                    <i class="icon-suport"></i>
                                </div>
                                <div class="content">
                                    <div class="title">پشتیبانی حق بیمه</div>
                                    <p>بیمه پشتیبانی برجسته</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="sw-dots style-2 sw-pagination-mb justify-content-center"></div>
            </div>
        </div>
    </section>
    <!-- /Icon box -->
@endsection
@section('modal')
    <!-- modal quick_add -->
    <div class="modal fade modalDemo" id="quick_add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap">
                    <div class="tf-product-info-item">
                        <div class="image">
                            <img src="" alt="">
                        </div>
                        <div class="content">
                            <a href="product-detail.html">زیرپوش آجدار آدیداس</a>
                            <div class="tf-product-info-price">
                                <!-- <div class="price-on-sale">8.00<toman> تومان </toman></div>
                                <div class="compare-at-price">10.00<toman> تومان </toman></div>
                                <div class="badges-on-sale"><span>20</span>% تخفیف</div> -->
                                <div class="price">18.00<toman> تومان </toman></div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-product-info-variant-picker mb_15">
                        <div class="variant-picker-item">
                            <div class="variant-picker-label">
                                رنگ: <span class="fw-6 variant-picker-label-value">نارنجی</span>
                            </div>
                            <div class="variant-picker-values">
                                <input id="values-orange" type="radio" name="color" checked>
                                <label class="hover-tooltip radius-60" for="values-orange" data-value="نارنجی">
                                    <span class="btn-checkbox bg-color-orange"></span>
                                    <span class="tooltip">نارنجی</span>
                                </label>
                                <input id="values-black" type="radio" name="color">
                                <label class=" hover-tooltip radius-60" for="values-black" data-value="سیاه">
                                    <span class="btn-checkbox bg-color-black"></span>
                                    <span class="tooltip">مشکی</span>
                                </label>
                                <input id="values-white" type="radio" name="color">
                                <label class="hover-tooltip radius-60" for="values-white" data-value="سفید">
                                    <span class="btn-checkbox bg-color-white"></span>
                                    <span class="tooltip">سفید</span>
                                </label>
                            </div>
                        </div>
                        <div class="variant-picker-item">
                            <div class="variant-picker-label">
                                اندازه: <span class="fw-6 variant-picker-label-value">S</span>
                            </div>
                            <div class="variant-picker-values">
                                <input type="radio" name="size" id="values-s" checked>
                                <label class="style-text" for="values-s" data-value="S">
                                    <p>S</p>
                                </label>
                                <input type="radio" name="size" id="values-m">
                                <label class="style-text" for="values-m" data-value="M">
                                    <p>M</p>
                                </label>
                                <input type="radio" name="size" id="values-l">
                                <label class="style-text" for="values-l" data-value="L">
                                    <p>L</p>
                                </label>
                                <input type="radio" name="size" id="values-xl">
                                <label class="style-text" for="values-xl" data-value="XL">
                                    <p>XL</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tf-product-info-quantity mb_15">
                        <div class="quantity-title fw-6">مقدار</div>
                        <div class="wg-quantity">
                            <span class="btn-quantity minus-btn">-</span>
                            <input type="text" name="number" value="1">
                            <span class="btn-quantity plus-btn">+</span>
                        </div>
                    </div>
                    <div class="tf-product-info-buy-button">
                        <form>
                            <a href="javascript:void(0);" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>به سبد خرید اضافه کنید -&nbsp;</span><span class="tf-qty-price">18.00<toman> تومان </toman></span></a>
                            <div class="tf-product-btn-wishlist btn-icon-action">
                                <i class="icon-heart"></i>
                                <i class="icon-delete"></i>
                            </div>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="icon icon-check"></span>
                            </a>
                            <div class="w-100">
                                <a href="#" class="btns-full">خرید با <img src="{{asset('assets/user/v1/images/payments/paypal.png')}}" alt=""></a>
                                <a href="#" class="payment-more-option">گزینه های پرداخت بیشتر</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quick_add -->

    <!-- modal quick_view -->
        <div class="modal fade modalDemo" id="quick_view">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="header">
                        <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                    </div>
                    <div class="wrap">
                        <div class="tf-product-media-wrap">
                            <div class="swiper tf-single-slide">
                                <div class="swiper-wrapper" >
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <img class="showpic"  alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next button-style-arrow single-slide-prev"></div>
                                <div class="swiper-button-prev button-style-arrow single-slide-next"></div>
                            </div>
                        </div>
                        <div class="tf-product-info-wrap position-relative">
                            <div class="tf-product-info-list">
                                <div class="tf-product-info-title">
                                    <h5 id="modal-data-title"><a class="link" href="{{route('product.details',[$product->id])}}"><span id="product-title"></span></a></h5>
                                </div>
                                <div id="visDiscountPrice" class="tf-product-info-price">
                                    <div  class="price"><strike><span id="product-price"></span></strike><toman> تومان </toman></div>
                                    <div  class="price" ><span id="product-discount-price"></span><toman> تومان </toman></div>
                                </div>
                                <div id="visPriceS" class="tf-product-info-price">
                                    <div class="price"><span id="product-price-single"></span><toman> تومان </toman></div>
                                </div>
                                <div  class="tf-product-info-price">
                                    <div><span id="product-short_description"></span></div>
                                </div>

                                <div class="tf-product-info-buy-button">
                                    <form class="">
                                        <a href="{{route('cart.add',['id'=>$product->id])}}" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn "><span>اضافه کردن به سبد خرید</span></a>
                                        <a href="#" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="#" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">افزودن به مقایسه</span>
                                            <span class="icon icon-check"></span>
                                        </a>

                                    </form>
                                </div>
                                <div>
                                    <a href="{{route('product.details',[$product->id])}}" class="tf-btn fw-6 btn-line">مشاهده جزئیات کامل<i class="icon icon-arrow1-top-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /modal quick_view -->
@endsection
@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            /* When click show user */
            $('body').on('click', '#show-product', function () {

                var userURL = $(this).data('url');
                    $.get(userURL, function (data) {
                    $('.showpic').attr('src',null);
                    var getImageProduct=$('.getsrc'+data.id).attr('src')
                    $('.showpic').attr('src',getImageProduct);
                    getImageProduct=null;
                    $('#quick_view').modal('show');
                    $('#product-id').text(data.id);
                    $('#product-title').text(data.title);
                    var short_description=data.short_description;
                    console.log(short_description);
                    document.getElementById("product-short_description").innerHTML =short_description;
                        if(data.discount_price!=null){
                            document.getElementById('visPriceS').hidden=true;
                            document.getElementById('visDiscountPrice').hidden=false;
                            $('#product-price').text(data.price);
                            $('#product-discount-price').text(data.discount_price);
                        }else if(data.discount_price == null){
                            document.getElementById('visPriceS').hidden=false;
                            document.getElementById('visDiscountPrice').hidden=true;
                            $('#product-price-single').text(data.price);
                        }

                })
            });

        });

    </script>
@endsection
