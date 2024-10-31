@extends('template.user.v1.layout')
@section('content')
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
                            <img src="{{asset('assets/user/v1/images/products/orange-1.jpg')}}" alt="">
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
                                        <img src="{{asset('assets/user/v1/images/products/orange-1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <img src="{{asset('assets/user/v1/images/products/pink-1.jpg')}}" alt="">
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
                                <h5><a class="link" href="product-detail.html">زیرپوش آجدار آدیداس</a></h5>
                            </div>
                            <div class="tf-product-info-badges">
                                <div class="badges text-uppercase">پرفروش ترین</div>
                                <div class="product-status-content">
                                    <i class="icon-lightning"></i>
                                    <p class="fw-6">فروش سریع! 48 نفر این را در سبد خرید خود دارند.</p>
                                </div>
                            </div>
                            <div class="tf-product-info-price">
                                <div class="price">18.00<toman> تومان </toman></div>
                            </div>
                            <div class="tf-product-description">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و س..</p>
                            </div>
                            <div class="tf-product-info-variant-picker">
                                <div class="variant-picker-item">
                                    <div class="variant-picker-label">
                                        رنگ: <span class="fw-6 variant-picker-label-value">نارنجی</span>
                                    </div>
                                    <div class="variant-picker-values">
                                        <input id="values-orange-1" type="radio" name="color-1" checked>
                                        <label class="hover-tooltip radius-60" for="values-orange-1" data-value="نارنجی">
                                            <span class="btn-checkbox bg-color-orange"></span>
                                            <span class="tooltip">نارنجی</span>
                                        </label>
                                        <input id="values-black-1" type="radio" name="color-1">
                                        <label class=" hover-tooltip radius-60" for="values-black-1" data-value="سیاه">
                                            <span class="btn-checkbox bg-color-black"></span>
                                            <span class="tooltip">مشکی</span>
                                        </label>
                                        <input id="values-white-1" type="radio" name="color-1">
                                        <label class="hover-tooltip radius-60" for="values-white-1" data-value="سفید">
                                            <span class="btn-checkbox bg-color-white"></span>
                                            <span class="tooltip">سفید</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="variant-picker-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="variant-picker-label">
                                            اندازه: <span class="fw-6 variant-picker-label-value">S</span>
                                        </div>
                                        <div class="find-size btn-choose-size fw-6">اندازه خود را پیدا کنید</div>
                                    </div>
                                    <div class="variant-picker-values">
                                        <input type="radio" name="size-1" id="values-s-1" checked>
                                        <label class="style-text" for="values-s-1" data-value="S">
                                            <p>S</p>
                                        </label>
                                        <input type="radio" name="size-1" id="values-m-1">
                                        <label class="style-text" for="values-m-1" data-value="M">
                                            <p>M</p>
                                        </label>
                                        <input type="radio" name="size-1" id="values-l-1">
                                        <label class="style-text" for="values-l-1" data-value="L">
                                            <p>L</p>
                                        </label>
                                        <input type="radio" name="size-1" id="values-xl-1">
                                        <label class="style-text" for="values-xl-1" data-value="XL">
                                            <p>XL</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-quantity">
                                <div class="quantity-title fw-6">مقدار</div>
                                <div class="wg-quantity">
                                    <span class="btn-quantity minus-btn">-</span>
                                    <input type="text" name="number" value="1">
                                    <span class="btn-quantity plus-btn">+</span>
                                </div>
                            </div>
                            <div class="tf-product-info-buy-button">
                                <form class="">
                                    <a href="#" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn "><span>به سبد خرید اضافه کنید -&nbsp;</span><span class="tf-qty-price">8.00<toman> تومان </toman></span></a>
                                    <a href="javascript:void(0);" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">افزودن به مقایسه</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <div class="w-100">
                                        <a href="#" class="btns-full">خرید با <img src="{{asset('assets/user/v1/images/payments/paypal.png')}}" alt=""></a>
                                        <a href="#" class="payment-more-option">گزینه های پرداخت بیشتر</a>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <a href="product-detail.html" class="tf-btn fw-6 btn-line">مشاهده جزئیات کامل<i class="icon icon-arrow1-top-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quick_view -->
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
                            <img src="{{asset('assets/user/v1/images/products/orange-1.jpg')}}" alt="">
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
    <!-- Slider -->
    <div class="tf-slideshow slider-effect-fade position-relative">
        <div class="swiper tf-sw-slideshow" data-preview="1" data-mobile="1" data-space="0" data-loop="true" data-auto-play="false" data-delay="0" data-speed="1000">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="wrap-slider">
                        <img src="{{asset('assets/user/v1/images/slider/fashion-slideshow-01.jpg')}}" alt="fashion-slideshow">
                        <div class="box-content">
                            <div class="container">
                                <h1 class="fade-item fade-item-1">لباس های <br>جذاب</h1>
                                <p class="fade-item fade-item-2">ما همیشه به فکر زیبایی و جذابیت شما هستیم !</p>
                                <a href="shop-default.html" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>مجموعه فروشگاه</span><i class="icon icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wrap-slider">
                        <img src="{{asset('assets/user/v1/images/slider/fashion-slideshow-02.jpg')}}" alt="fashion-slideshow">
                        <div class="box-content">
                            <div class="container">
                                <h1 class="fade-item fade-item-1">استایل <br class="md-hidden">ساده</h1>
                                <p class="fade-item fade-item-2">ما همیشه به فکر زیبایی و جذابیت شما هستیم !</p>
                                <a href="shop-default.html" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>مجموعه فروشگاه</span><i class="icon icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wrap-slider">
                        <img src="{{asset('assets/user/v1/images/slider/fashion-slideshow-03.jpg')}}" alt="fashion-slideshow">
                        <div class="box-content">
                            <div class="container">
                                <h1 class="fade-item fade-item-1">لباس های <br>جذاب</h1>
                                <p class="fade-item fade-item-2">ما همیشه به فکر زیبایی و جذابیت شما هستیم !</p>
                                <a href="shop-default.html" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>مجموعه فروشگاه</span><i class="icon icon-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-pagination">
            <div class="container">
                <div class="sw-dots sw-pagination-slider justify-content-center"></div>
            </div>
        </div>
    </div>
    <!-- /Slider -->
    <!-- Marquee -->
    <div class="tf-marquee bg_yellow-2">
        <div class="wrap-marquee">
            <div class="marquee-item">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/1390/svg" class="" width="15" height="20" viewBox="0 0 15 20"><path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path></svg>
                </div>
                <p class="text">رویداد پاکسازی بهار : تا 70 درصد تخفیف دریافت کنید</p>
            </div>
        </div>

    </div>
    <!-- /Marquee -->
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
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item style-left hover-img">
                                    <div class="collection-inner">
                                        <a href="shop-default.html" class="collection-image img-style">
                                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/collections/collection-17.jpg')}}" src="{{asset('assets/user/v1/images/collections/collection-17.jpg')}}" alt="collection-img">
                                        </a>
                                        <div class="collection-content">
                                            <a href="shop-default.html" class="tf-btn collection-title hover-icon fs-15"><span>لباس</span><i class="icon icon-arrow1-top-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item style-left hover-img">
                                    <div class="collection-inner">
                                        <a href="shop-default.html" class="collection-image img-style">
                                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/collections/collection-14.jpg')}}" src="{{asset('assets/user/v1/images/collections/collection-14.jpg')}}" alt="collection-img">
                                        </a>
                                        <div class="collection-content">
                                            <a href="shop-default.html" class="tf-btn collection-title hover-icon fs-15"><span>عینک آفتابی</span><i class="icon icon-arrow1-top-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item style-left hover-img">
                                    <div class="collection-inner">
                                        <a href="shop-default.html" class="collection-image img-style">
                                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/collections/collection-18.jpg')}}" src="{{asset('assets/user/v1/images/collections/collection-18.jpg')}}" alt="collection-demo-1">
                                        </a>
                                        <div class="collection-content">
                                            <a href="shop-default.html" class="tf-btn collection-title hover-icon fs-15"><span>کیف</span><i class="icon icon-arrow1-top-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item style-left hover-img">
                                    <div class="collection-inner">
                                        <a href="shop-default.html" class="collection-image img-style">
                                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/collections/collection-15.jpg')}}" src="{{asset('assets/user/v1/images/collections/collection-15.jpg')}}" alt="collection-demo-1">
                                        </a>
                                        <div class="collection-content">
                                            <a href="shop-default.html" class="tf-btn collection-title hover-icon fs-15"><span>مد</span><i class="icon icon-arrow1-top-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item style-left hover-img">
                                    <div class="collection-inner">
                                        <a href="shop-default.html" class="collection-image img-style">
                                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/collections/collection-20.jpg')}}" src="{{asset('assets/user/v1/images/collections/collection-20.jpg')}}" alt="collection-demo-1">
                                        </a>
                                        <div class="collection-content">
                                            <a href="shop-default.html" class="tf-btn collection-title hover-icon fs-15"><span>لوازم جانبی</span><i class="icon icon-arrow1-top-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="discovery-new-item">
                        <h5>همه موارد جدید را کشف کنید</h5>
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
                <p class="sub-title wow fadeInUp" data-wow-delay="0s">جدیدترین سبک ها را بخرید: با جدیدترین محصولات ما جلوتر از منحنی باشید</p>
            </div>
            <div class="grid-layout loadmore-item wow fadeInUp" data-wow-delay="0s" data-grid="grid-4">
                <!-- card product 1 -->
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/orange-1.jpg')}}" src="{{asset('assets/user/v1/images/products/orange-1.jpg')}}" alt="image-product">
                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/white-1.jpg')}}" src="{{asset('assets/user/v1/images/products/white-1.jpg')}}" alt="image-product">
                        </a>
                        <div class="list-product-btn">
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">افزودن سریع</span>
                            </a>
                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                <span class="icon icon-delete"></span>
                            </a>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">افزودن به مقایسه</span>
                                <span class="icon icon-check"></span>
                            </a>
                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">نمایش سریع</span>
                            </a>
                        </div>
                        <div class="size-list">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                            <span>XL</span>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product-detail.html" class="title link">زیرپوش آجدار آدیداس</a>
                        <span class="price">16.95<toman> تومان </toman></span>
                        <ul class="list-color-product">
                            <li class="list-color-item color-swatch active">
                                <span class="tooltip">نارنجی</span>
                                <span class="swatch-value bg_orange-3"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/orange-1.jpg')}}" src="{{asset('assets/user/v1/images/products/orange-1.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">مشکی</span>
                                <span class="swatch-value bg_dark"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/black-1.jpg')}}" src="{{asset('assets/user/v1/images/products/black-1.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">سفید</span>
                                <span class="swatch-value bg_white"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/white-1.jpg')}}" src="{{asset('assets/user/v1/images/products/white-1.jpg')}}" alt="image-product">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- card product 2 -->
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/brown.jpg')}}" src="{{asset('assets/user/v1/images/products/brown.jpg')}}" alt="image-product">
                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/purple.jpg')}}" src="{{asset('assets/user/v1/images/products/purple.jpg')}}" alt="image-product">
                        </a>
                        <div class="list-product-btn">
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">افزودن سریع</span>
                            </a>
                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                <span class="icon icon-delete"></span>
                            </a>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">افزودن به مقایسه</span>
                                <span class="icon icon-check"></span>
                            </a>
                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">نمایش سریع</span>
                            </a>
                        </div>
                        <div class="size-list">
                            <span>M</span>
                            <span>L</span>
                            <span>XL</span>
                        </div>
                        <div class="countdown-box">
                            <div class="js-countdown" data-timer="1007500" data-labels="روز :,ساعت :,دقیقه :,ثانیه"></div>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product-detail.html" class="title link">تی شرت راه راه تابستانه</a>
                        <span class="price">از طرف 18.95 تومان</span>
                        <ul class="list-color-product">
                            <li class="list-color-item color-swatch active">
                                <span class="tooltip">قهوه ای</span>
                                <span class="swatch-value bg_brown"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/brown.jpg')}}" src="{{asset('assets/user/v1/images/products/brown.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">بنفش روشن</span>
                                <span class="swatch-value bg_purple"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/purple.jpg')}}" src="{{asset('assets/user/v1/images/products/purple.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">سبز روشن</span>
                                <span class="swatch-value bg_light-green"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/green.jpg')}}" src="{{asset('assets/user/v1/images/products/green.jpg')}}" alt="image-product">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- card product 3 -->
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/white-3.jpg')}}" src="{{asset('assets/user/v1/images/products/white-3.jpg')}}" alt="image-product">
                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/white-4.jpg')}}" src="{{asset('assets/user/v1/images/products/white-4.jpg')}}" alt="image-product">
                        </a>
                        <div class="list-product-btn absolute-2">
                            <a href="#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">به سبد خرید اضافه کنید</span>
                            </a>
                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                <span class="icon icon-delete"></span>
                            </a>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">افزودن به مقایسه</span>
                                <span class="icon icon-check"></span>
                            </a>
                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">نمایش سریع</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product-detail.html" class="title link">تیشرت تابستانه سایز بزرگ</a>
                        <span class="price">10.00<toman> تومان </toman></span>
                    </div>
                </div>
                <!-- card product 4 -->
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/white-2.jpg')}}" src="{{asset('assets/user/v1/images/products/white-2.jpg')}}" alt="image-product">
                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/pink-1.jpg')}}" src="{{asset('assets/user/v1/images/products/pink-1.jpg')}}" alt="image-product">
                        </a>
                        <div class="list-product-btn">
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">افزودن سریع</span>
                            </a>
                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                <span class="icon icon-delete"></span>
                            </a>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">افزودن به مقایسه</span>
                                <span class="icon icon-check"></span>
                            </a>
                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">نمایش سریع</span>
                            </a>
                        </div>
                        <div class="size-list">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                            <span>XL</span>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product-detail.html" class="title">تیشرت تابستانه سایز بزرگ</a>
                        <span class="price">16.95<toman> تومان </toman></span>
                        <ul class="list-color-product">
                            <li class="list-color-item color-swatch active">
                                <span class="tooltip">سفید</span>
                                <span class="swatch-value bg_white"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/white-2.jpg')}}" src="{{asset('assets/user/v1/images/products/white-2.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">صورتی</span>
                                <span class="swatch-value bg_purple"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/pink-1.jpg')}}" src="{{asset('assets/user/v1/images/products/pink-1.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">مشکی</span>
                                <span class="swatch-value bg_dark"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/black-2.jpg')}}" src="{{asset('assets/user/v1/images/products/black-2.jpg')}}" alt="image-product">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- card product 5 -->
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/brown-2.jpg')}}" src="{{asset('assets/user/v1/images/products/brown-2.jpg')}}" alt="image-product">
                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/brown-3.jpg')}}" src="{{asset('assets/user/v1/images/products/brown-3.jpg')}}" alt="image-product">
                        </a>
                        <div class="size-list">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                            <span>XL</span>
                        </div>
                        <div class="list-product-btn">
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">افزودن سریع</span>
                            </a>
                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                <span class="icon icon-delete"></span>
                            </a>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">افزودن به مقایسه</span>
                                <span class="icon icon-check"></span>
                            </a>
                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">نمایش سریع</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product-detail.html" class="title link">تی شرت کتانی یقه V</a>
                        <span class="price">114.95<toman> تومان </toman></span>
                        <ul class="list-color-product">
                            <li class="list-color-item color-swatch active">
                                <span class="tooltip">قهوه ای</span>
                                <span class="swatch-value bg_brown"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/brown-2jpg')}}" src="{{asset('assets/user/v1/images/products/brown-2.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">سفید</span>
                                <span class="swatch-value bg_white"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/white-5.jpg')}}" src="{{asset('assets/user/v1/images/products/white-5.jpg')}}" alt="image-product">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- card product 6 -->
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/light-green-1.jpg')}}" src="{{asset('assets/user/v1/images/products/light-green-1.jpg')}}" alt="image-product">
                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/light-green-1.jpg')}}" src="{{asset('assets/user/v1/images/products/light-green-2.jpg')}}" alt="image-product">
                        </a>
                        <div class="list-product-btn absolute-2">
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">افزودن سریع</span>
                            </a>
                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                <span class="icon icon-delete"></span>
                            </a>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">افزودن به مقایسه</span>
                                <span class="icon icon-check"></span>
                            </a>
                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">نمایش سریع</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product-detail.html" class="title link">سویشرت گشاد</a>
                        <span class="price">10.00<toman> تومان </toman></span>
                        <ul class="list-color-product">
                            <li class="list-color-item color-swatch active">
                                <span class="tooltip">سبز روشن</span>
                                <span class="swatch-value bg_light-green"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/light-green-1.jpg')}}" src="{{asset('assets/user/v1/images/products/light-green-1.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">مشکی</span>
                                <span class="swatch-value bg_dark"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/black-3.jpg')}}" src="{{asset('assets/user/v1/images/products/black-3.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">آبی</span>
                                <span class="swatch-value bg_blue-2"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/blue.jpg')}}" src="{{asset('assets/user/v1/images/products/blue.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">آبی تیره</span>
                                <span class="swatch-value bg_dark-blue"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/dark-blue.jpg')}}" src="{{asset('assets/user/v1/images/products/dark-blue.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">سفید</span>
                                <span class="swatch-value bg_white"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/white-6.jpg')}}" src="{{asset('assets/user/v1/images/products/white-6.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">خاکستری روشن</span>
                                <span class="swatch-value bg_light-grey"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/light-grey.jpg')}}" src="{{asset('assets/user/v1/images/products/light-grey.jpg')}}" alt="image-product">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- card product 7 -->
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/black-4.jpg')}}" src="{{asset('assets/user/v1/images/products/black-4.jpg')}}" alt="image-product">
                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/black-5.jpg')}}" src="{{asset('assets/user/v1/images/products/black-5.jpg')}}" alt="image-product">
                        </a>
                        <div class="size-list">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                        </div>
                        <div class="list-product-btn">
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">افزودن سریع</span>
                            </a>
                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                <span class="icon icon-delete"></span>
                            </a>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">افزودن به مقایسه</span>
                                <span class="icon icon-check"></span>
                            </a>
                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">نمایش سریع</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product-detail.html" class="title link">پیراهن معمولی آکسفورد</a>
                        <span class="price">10.00<toman> تومان </toman></span>
                        <ul class="list-color-product">
                            <li class="list-color-item color-swatch active">
                                <span class="tooltip">مشکی</span>
                                <span class="swatch-value bg_dark"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/black-4.jpg')}}" src="{{asset('assets/user/v1/images/products/black-4.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">آبی تیره</span>
                                <span class="swatch-value bg_dark-blue"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/dark-blue-2.jpg')}}" src="{{asset('assets/user/v1/images/products/dark-blue-2.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">بژ</span>
                                <span class="swatch-value bg_beige"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/beige.jpg')}}" src="{{asset('assets/user/v1/images/products/beige.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">نور آبی</span>
                                <span class="swatch-value bg_light-blue"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/light-blue.jpg')}}" src="{{asset('assets/user/v1/images/products/light-blue.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">سفید</span>
                                <span class="swatch-value bg_white"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/white-7.jpg')}}" src="{{asset('assets/user/v1/images/products/white-7.jpg')}}" alt="image-product">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- card product 8 -->
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/white-8.jpg')}}" src="{{asset('assets/user/v1/images/products/white-8.jpg')}}" alt="image-product">
                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/black-6.jpg')}}" src="{{asset('assets/user/v1/images/products/black-6.jpg')}}" alt="image-product">
                        </a>
                        <div class="size-list">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                            <span>XL</span>
                        </div>
                        <div class="list-product-btn">
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">افزودن سریع</span>
                            </a>
                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                <span class="icon icon-delete"></span>
                            </a>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">افزودن به مقایسه</span>
                                <span class="icon icon-check"></span>
                            </a>
                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">نمایش سریع</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product-detail.html" class="title link">هودی گشاد</a>
                        <span class="price">9.95<toman> تومان </toman></span>
                        <ul class="list-color-product">
                            <li class="list-color-item color-swatch active">
                                <span class="tooltip">سفید</span>
                                <span class="swatch-value bg_white"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/white-8.jpg')}}" src="{{asset('assets/user/v1/images/products/white-8.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">مشکی</span>
                                <span class="swatch-value bg_dark"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/black-7.jpg')}}" src="{{asset('assets/user/v1/images/products/black-7.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">آبی</span>
                                <span class="swatch-value bg_blue-2"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/blue-2.jpg')}}" src="{{asset('assets/user/v1/images/products/blue-2.jpg')}}" alt="image-product">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- card product 9 -->
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/brown-4.jpg')}}" src="{{asset('assets/user/v1/images/products/brown-4.jpg')}}" alt="image-product">
                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/black-8.jpg')}}" src="{{asset('assets/user/v1/images/products/black-8.jpg')}}" alt="image-product">
                        </a>
                        <div class="size-list">
                            <span>M</span>
                            <span>L</span>
                            <span>XL</span>
                        </div>
                        <div class="list-product-btn">
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">افزودن سریع</span>
                            </a>
                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                <span class="icon icon-delete"></span>
                            </a>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">افزودن به مقایسه</span>
                                <span class="icon icon-check"></span>
                            </a>
                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">نمایش سریع</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product-detail.html" class="title link">روسری طرح دار</a>
                        <span class="price">14.95<toman> تومان </toman></span>
                        <ul class="list-color-product">
                            <li class="list-color-item color-swatch active">
                                <span class="tooltip">قهوه ای</span>
                                <span class="swatch-value bg_brown"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/brown-4.jpg')}}" src="{{asset('assets/user/v1/images/products/brown-4.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">مشکی</span>
                                <span class="swatch-value bg_dark"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/black-8.jpg')}}" src="{{asset('assets/user/v1/images/products/black-8.jpg')}}" alt="image-product">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- card product 10 -->
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/black-9.jpg')}}" src="{{asset('assets/user/v1/images/products/black-9.jpg')}}" alt="image-product">
                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/black-10.jpg')}}" src="{{asset('assets/user/v1/images/products/black-10.jpg')}}" alt="image-product">
                        </a>
                        <div class="size-list">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                        </div>
                        <div class="list-product-btn">
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">افزودن سریع</span>
                            </a>
                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                <span class="icon icon-delete"></span>
                            </a>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">افزودن به مقایسه</span>
                                <span class="icon icon-check"></span>
                            </a>
                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">نمایش سریع</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product-detail.html" class="title link">ژاکت یقه اسلیم بافت ابریشم</a>
                        <span class="price">18.95<toman> تومان </toman></span>
                        <ul class="list-color-product">
                            <li class="list-color-item color-swatch active">
                                <span class="tooltip">مشکی</span>
                                <span class="swatch-value bg_dark"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/black-9.jpg')}}" src="{{asset('assets/user/v1/images/products/black-9.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">مشکی</span>
                                <span class="swatch-value bg_white"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/white-9.jpg')}}" src="{{asset('assets/user/v1/images/products/white-9.jpg')}}" alt="image-product">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- card product 11 -->
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/grey-2.jpg')}}" src="{{asset('assets/user/v1/images/products/grey-2.jpg')}}" alt="image-product">
                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/grey.jpg')}}" src="{{asset('assets/user/v1/images/products/grey.jpg')}}" alt="image-product">
                        </a>
                        <div class="size-list">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                        </div>
                        <div class="list-product-btn">
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">افزودن سریع</span>
                            </a>
                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                <span class="icon icon-delete"></span>
                            </a>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">افزودن به مقایسه</span>
                                <span class="icon icon-check"></span>
                            </a>
                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">نمایش سریع</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product-detail.html" class="title link">ژاکت یقه اسلیم بافت ابریشم</a>
                        <span class="price">18.95<toman> تومان </toman></span>
                        <ul class="list-color-product">
                            <li class="list-color-item color-swatch active">
                                <span class="tooltip">قهوه ای</span>
                                <span class="swatch-value bg_grey"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/grey-2.jpg')}}" src="{{asset('assets/user/v1/images/products/grey-2.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">صورتی</span>
                                <span class="swatch-value bg_pink"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/pink-2.jpg')}}" src="{{asset('assets/user/v1/images/products/pink-2.jpg')}}" alt="image-product">
                            </li>
                            <li class="list-color-item color-swatch">
                                <span class="tooltip">صورتی روشن</span>
                                <span class="swatch-value bg_light-pink"></span>
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/light-pink.jpg')}}" src="{{asset('assets/user/v1/images/products/light-pink.jpg')}}" alt="image-product">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- card product 12 -->
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <a href="product-detail.html" class="product-img">
                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/black-11.jpg')}}" src="{{asset('assets/user/v1/images/products/black-11.jpg')}}" alt="image-product">
                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/black-12.jpg')}}" src="{{asset('assets/user/v1/images/products/black-12.jpg')}}" alt="image-product">
                        </a>
                        <div class="size-list">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                        </div>
                        <div class="list-product-btn">
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">افزودن سریع</span>
                            </a>
                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                <span class="icon icon-delete"></span>
                            </a>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">افزودن به مقایسه</span>
                                <span class="icon icon-check"></span>
                            </a>
                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">نمایش سریع</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product-detail.html" class="title link">ژاکت یقه اسلیم بافت ابریشم</a>
                        <span class="price">18.95<toman> تومان </toman></span>

                    </div>
                </div>
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
