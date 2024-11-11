<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fa" lang="fa">

<head>
    <meta charset="utf-8">
    <title>فروشگاه هستور</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- font -->
    <link rel="stylesheet" href="{{asset('assets/user/v1/fonts/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/v1/fonts/font-icons-flip.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/v1/css/bootstrap.min.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/v1/css/swiper-bundle.min.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/v1/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/user/v1/css/styles.rtl.css')}}"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('assets/user/v1/images/logo/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/user/v1/images/logo/favicon.png')}}">

</head>

<body class="preload-wrapper popup-loader">
<!-- preload -->
<div class="preload preload-container">
    <div class="preload-logo">
        <div class="spinner"></div>
    </div>
</div>
<!-- /preload -->
<div id="wrapper">
    <!-- Top Bar -->
    <div class="tf-top-bar bg_white line">
        <div class="px_15 lg-px_40">
            <div class="tf-top-bar_wrap grid-3 gap-30 align-items-center">
                <ul class="tf-top-bar_item tf-social-icon d-flex gap-10">
                    <li><a href="#" class="box-icon w_28 round social-facebook bg_line"><i class="icon fs-12 icon-fb"></i></a></li>
                    <li><a href="#" class="box-icon w_28 round social-twiter bg_line"><i class="icon fs-10 icon-Icon-x"></i></a></li>
                    <li><a href="#" class="box-icon w_28 round social-instagram bg_line"><i class="icon fs-12 icon-instagram"></i></a></li>
                    <li><a href="#" class="box-icon w_28 round social-tiktok bg_line"><i class="icon fs-12 icon-tiktok"></i></a></li>
                    <li><a href="#" class="box-icon w_28 round social-pinterest bg_line"><i class="icon fs-12 icon-pinterest-1"></i></a></li>
                </ul>
                <div class="text-center overflow-hidden">
                    <div class="swiper tf-sw-top_bar" data-preview="1" data-space="0" data-loop="true" data-speed="1000" data-delay="1390">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <p class="top-bar-text fw-5">فروش مد بهاره <a href="shop-default.html" title="همه مجموعه ها" class="tf-btn btn-line">اکنون خرید کنید<i class="icon icon-arrow1-top-right"></i></a></p>
                            </div>
                            <div class="swiper-slide">
                                <p class="top-bar-text fw-5">تخفیف تابستانی 70%</p>
                            </div>
                            <div class="swiper-slide">
                                <p class="top-bar-text fw-5">وقت آن است که کمد لباس خود را تازه کنید.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="top-bar-language tf-cur justify-content-end">


                    <div class="tf-currencies">
                        <select class="image-select center style-default type-currencies">
                            <option data-thumbnail="{{asset('assets/user/v1/images/country/fr.svg')}}">EUR <span>€ | فرانسه</span></option>
                            <option data-thumbnail="{{asset('assets/user/v1/images/country/de.svg')}}">EUR <span>€ | آلمان</span></option>
                            <option selected data-thumbnail="{{asset('assets/user/v1/images/country/us.svg')}}">USD <span><toman> تومان </toman> | ایالات متحده</span></option>
                            <option data-thumbnail="{{asset('assets/user/v1/images/country/vn.svg')}}">VND <span>₫ | ویتنام</span></option>
                        </select>
                    </div>
                    <div class="tf-languages">
                        <select class="image-select center style-default type-languages">
                            <option>انگلیسی</option>
                            <option>العربية</option>
                            <option>简体中文</option>
                            <option>اردو</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Top Bar -->
    <!-- Header -->
    <header id="header" class="header-default header-absolute">
        <div class="px_15 lg-px_40">
            <div class="row wrapper-header align-items-center">
                <div class="col-md-4 col-3 tf-lg-hidden">
                    <a href="#mobileMenu" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                        <svg xmlns="http://www.w3.org/1390/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                            <path d="M2.00056 2.28571H16.8577C17.1608 2.28571 17.4515 2.16531 17.6658 1.95098C17.8802 1.73665 18.0006 1.44596 18.0006 1.14286C18.0006 0.839753 17.8802 0.549063 17.6658 0.334735C17.4515 0.120408 17.1608 0 16.8577 0H2.00056C1.69745 0 1.40676 0.120408 1.19244 0.334735C0.978109 0.549063 0.857702 0.839753 0.857702 1.14286C0.857702 1.44596 0.978109 1.73665 1.19244 1.95098C1.40676 2.16531 1.69745 2.28571 2.00056 2.28571ZM0.857702 8C0.857702 7.6969 0.978109 7.40621 1.19244 7.19188C1.40676 6.97755 1.69745 6.85714 2.00056 6.85714H22.572C22.8751 6.85714 23.1658 6.97755 23.3801 7.19188C23.5944 7.40621 23.7148 7.6969 23.7148 8C23.7148 8.30311 23.5944 8.59379 23.3801 8.80812C23.1658 9.02245 22.8751 9.14286 22.572 9.14286H2.00056C1.69745 9.14286 1.40676 9.02245 1.19244 8.80812C0.978109 8.59379 0.857702 8.30311 0.857702 8ZM0.857702 14.8571C0.857702 14.554 0.978109 14.2633 1.19244 14.049C1.40676 13.8347 1.69745 13.7143 2.00056 13.7143H12.2863C12.5894 13.7143 12.8801 13.8347 13.0944 14.049C13.3087 14.2633 13.4291 14.554 13.4291 14.8571C13.4291 15.1602 13.3087 15.4509 13.0944 15.6653C12.8801 15.8796 12.5894 16 12.2863 16H2.00056C1.69745 16 1.40676 15.8796 1.19244 15.6653C0.978109 15.4509 0.857702 15.1602 0.857702 14.8571Z" fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
                <div class="col-xl-3 col-md-4 col-6">
                    <a href="index.html" class="logo-header">
                        <img src="{{asset('assets/user/v1/images/logo/logo.svg')}}" alt="logo" class="logo">
                    </a>
                </div>
                <div class="col-xl-6 tf-md-hidden">
                    <nav class="box-navigation text-center">
                        <ul class="box-nav-ul d-flex align-items-center justify-content-center gap-30">
                            <li class="menu-item">
                                <a href="#" class="item-link">خانه<i class="icon icon-arrow-down"></i></a>
                                <div class="sub-menu mega-menu">
                                    <div class="container">
                                        <div class="row-demo">
                                            <div class="demo-item">
                                                <a href="index.html">
                                                    <div class="demo-image position-relative">
                                                        <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-01.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-01.jpg')}}" alt="home-01">
                                                        <div class="demo-label">
                                                            <span class="demo-new">جدید</span>
                                                            <span>ترند</span>
                                                        </div>
                                                    </div>
                                                    <span class="demo-name">صفحه خانه مد 01</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-multi-brand.html">
                                                    <div class="demo-image position-relative">
                                                        <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-multi-brand.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-multi-brand.jpg')}}" alt="home-multi-brand">
                                                        <div class="demo-label">
                                                            <span class="demo-new">جدید</span>
                                                            <span class="demo-hot">داغ</span>
                                                        </div>
                                                    </div>
                                                    <span class="demo-name">خانه مولتی برند</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-02.html">
                                                    <div class="demo-image position-relative">
                                                        <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-02.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-02.jpg')}}" alt="home-02">
                                                        <div class="demo-label">
                                                            <span class="demo-hot">داغ</span>
                                                        </div>
                                                    </div>
                                                    <span class="demo-name">صفحه خانه مد 02</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-03.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-03.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-03.jpg')}}" alt="home-03">
                                                    </div>
                                                    <span class="demo-name">صفحه خانه مد 03</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-04.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-04.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-04.jpg')}}" alt="home-04">
                                                    </div>
                                                    <span class="demo-name">صفحه خانه مد 04</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-05.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-05.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-05.jpg')}}" alt="home-05">
                                                    </div>
                                                    <span class="demo-name">صفحه خانه مد 05</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-06.html">
                                                    <div class="demo-image position-relative">
                                                        <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-06.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-06.jpg')}}" alt="home-06">
                                                        <div class="demo-label">
                                                            <span class="demo-new">جدید</span>
                                                        </div>
                                                    </div>
                                                    <span class="demo-name">صفحه خانه مد 06</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-07.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-07.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-07.jpg')}}" alt="home-07">
                                                    </div>
                                                    <span class="demo-name">صفحه خانه مد 07</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-08.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-08.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-08.jpg')}}" alt="home-08">
                                                    </div>
                                                    <span class="demo-name">صفحه خانه مد 08</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-skincare.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-skincare.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-skincare.jpg')}}" alt="home-skincare">
                                                    </div>
                                                    <span class="demo-name">خانه مراقبت از پوست</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-headphone.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-headphone.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-headphone.jpg')}}" alt="home-headphone">
                                                    </div>
                                                    <span class="demo-name">خانه هدفون</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-giftcard.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-giftcard.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-giftcard.jpg')}}" alt="home-gift-card">
                                                    </div>
                                                    <span class="demo-name">خانه گیف کارت</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="text-center view-all-demo">
                                            <a href="#modalDemo" data-bs-toggle="modal" class="tf-btn btn-xl btn-fill radius-3 animate-hover-btn fw-6"><span>مشاهده همه دموها (28+)</span><i class="icon icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="item-link">فروشگاه<i class="icon icon-arrow-down"></i></a>
                                <div class="sub-menu mega-menu">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">چیدمان های فروشگاه</div>
                                                    <ul class="menu-list">
                                                        <li><a href="shop-default.html" class="menu-link-text link">پیشفرض</a></li>
                                                        <li><a href="shop-left-sidebar.html" class="menu-link-text link">نواربار چپ</a></li>
                                                        <li><a href="shop-right-sidebar.html" class="menu-link-text link">نواربار راست</a></li>
                                                        <li><a href="shop-fullwidth.html" class="menu-link-text link">تمام صفحه</a></li>
                                                        <li><a href="shop-collection-sub.html" class="menu-link-text link">مجموعه فرعی</a></li>
                                                        <li><a href="shop-collection-list.html" class="menu-link-text link">لیست مجموعه ها</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">ویژگی ها</div>
                                                    <ul class="menu-list">
                                                        <li><a href="shop-link.html" class="menu-link-text link">پیوندهای صفحه بندی</a></li>
                                                        <li><a href="shop-loadmore.html" class="menu-link-text link">صفحه بندی بارگذاری بیشتر</a></li>
                                                        <li><a href="shop-infinite-scrolling.html" class="menu-link-text link">صفحه بندی پیمایش بی نهایت</a></li>
                                                        <li><a href="shop-filter-sidebar.html" class="menu-link-text link">فیلتر نواربار</a></li>
                                                        <li><a href="shop-filter-hidden.html" class="menu-link-text link">فیلتر پنهان</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">سبک های محصول</div>
                                                    <ul class="menu-list">
                                                        <li><a href="product-style-list.html" class="menu-link-text link">سبک محصول لیست</a></li>
                                                        <li><a href="product-style-01.html" class="menu-link-text link">سبک محصول 01</a></li>
                                                        <li><a href="product-style-02.html" class="menu-link-text link">سبک محصول 02</a></li>
                                                        <li><a href="product-style-03.html" class="menu-link-text link">سبک محصول 03</a></li>
                                                        <li><a href="product-style-04.html" class="menu-link-text link">سبک محصول 04</a></li>
                                                        <li><a href="product-style-05.html" class="menu-link-text link">سبک محصول 05</a></li>
                                                        <li><a href="product-style-06.html" class="menu-link-text link">سبک محصول 06</a></li>
                                                        <li><a href="product-style-07.html" class="menu-link-text link">سبک محصول 07</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="collection-item hover-img">
                                                    <div class="collection-inner">
                                                        <a href="shop-men.html" class="collection-image img-style">
                                                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/collections/collection-1.jpg')}}" src="{{asset('assets/user/v1/images/collections/collection-1.jpg')}}" alt="collection-demo-1">
                                                        </a>
                                                        <div class="collection-content">
                                                            <a href="shop-men.html" class="tf-btn hover-icon btn-xl collection-title fs-16"><span>مرد</span><i class="icon icon-arrow1-top-right"></i></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="collection-item hover-img">
                                                    <div class="collection-inner">
                                                        <a href="shop-women.html" class="collection-image img-style">
                                                            <img class="lazyload" data-src="{{asset('assets/user/v1/images/collections/collection-2.jpg')}}" src="{{asset('assets/user/v1/images/collections/collection-2.jpg')}}" alt="collection-demo-1">
                                                        </a>
                                                        <div class="collection-content">
                                                            <a href="shop-women.html" class="tf-btn btn-xl collection-title fs-16 hover-icon"><span>زن</span><i class="icon icon-arrow1-top-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="item-link">محصولات<i class="icon icon-arrow-down"></i></a>
                                <div class="sub-menu mega-menu">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">طرح بندی محصولات</div>
                                                    <ul class="menu-list">
                                                        <li><a href="product-detail.html" class="menu-link-text link">محصول پیشفرض</a></li>
                                                        <li><a href="product-grid-1.html" class="menu-link-text link">محصول گرید 1</a></li>
                                                        <li><a href="product-grid-2.html" class="menu-link-text link">محصول گرید 2</a></li>
                                                        <li><a href="product-stacked.html" class="menu-link-text link">محصولات انباشته</a></li>
                                                        <li><a href="product-right-thumbnails.html" class="menu-link-text link">تصاویر کوچک راست محصول</a></li>
                                                        <li><a href="product-bottom-thumbnails.html" class="menu-link-text link">تصاویر کوچک پایین محصول</a></li>
                                                        <li><a href="product-drawer-sidebar.html" class="menu-link-text link">نوار کناری کشو محصول</a></li>
                                                        <li><a href="product-description-accordion.html" class="menu-link-text link">توضیحات محصول آکاردئون</a></li>
                                                        <li><a href="product-description-list.html" class="menu-link-text link">لیست توضیحات محصول</a></li>
                                                        <li><a href="product-description-vertical.html" class="menu-link-text link">توضیحات محصول عمودی</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">جزئیات محصول</div>
                                                    <ul class="menu-list">
                                                        <li><a href="product-inner-zoom.html" class="menu-link-text link">زوم داخلی محصول</a></li>
                                                        <li><a href="product-zoom-magnifier.html" class="menu-link-text link">بزرگنمایی محصول</a></li>
                                                        <li><a href="product-no-zoom.html" class="menu-link-text link">محصول بدون زوم</a></li>
                                                        <li><a href="product-photoswipe-popup.html" class="menu-link-text link">پاپ آپ عکس محصول</a></li>
                                                        <li><a href="product-zoom-popup.html" class="menu-link-text link">زوم خارجی محصول و بازشو عکس</a></li>
                                                        <li><a href="product-video.html" class="menu-link-text link">ویدئوی محصول</a></li>
                                                        <li><a href="product-3d.html" class="menu-link-text link">مدل های سه بعدی، AR محصول</a></li>
                                                        <li><a href="product-options-customizer.html" class="menu-link-text link">گزینه های محصول و سفارشی ساز</a></li>
                                                        <li><a href="product-advanced-types.html" class="menu-link-text link">انواع محصولات پیشرفته</a></li>
                                                        <li><a href="product-giftcard.html" class="menu-link-text link">فرم گیرنده اطلاعات کارت هدیه</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">نمونه های محصول</div>
                                                    <ul class="menu-list">
                                                        <li><a href="product-color-swatch.html" class="menu-link-text link">نمونه رنگ محصول</a></li>
                                                        <li><a href="product-rectangle.html" class="menu-link-text link">مستطیل محصول</a></li>
                                                        <li><a href="product-rectangle-color.html" class="menu-link-text link">رنگ محصول به صورت مستطیل</a></li>
                                                        <li><a href="product-swatch-image.html" class="menu-link-text link">تصویر نمونه محصول</a></li>
                                                        <li><a href="product-swatch-image-rounded.html" class="menu-link-text link">تصویر نمونه محصول گرد شده</a></li>
                                                        <li><a href="product-swatch-dropdown.html" class="menu-link-text link">نمونه محصول منو کشویی</a></li>
                                                        <li><a href="product-swatch-dropdown-color.html" class="menu-link-text link">رنگ نمونه محصول منو کشویی</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">ویژگی های محصول</div>
                                                    <ul class="menu-list">
                                                        <li><a href="product-frequently-bought-together.html" class="menu-link-text link">خرید با هم</a></li>
                                                        <li><a href="product-frequently-bought-together-2.html" class="menu-link-text link">خرید با هم 2</a></li>
                                                        <li><a href="product-upsell-features.html" class="menu-link-text link">ویژگی های فروش بالای محصول</a></li>
                                                        <li><a href="product-pre-orders.html" class="menu-link-text link">پیش سفارش محصول</a></li>
                                                        <li><a href="product-notification.html" class="menu-link-text link">اطلاعیه بازگشت به انبار</a></li>
                                                        <li><a href="product-pickup.html" class="menu-link-text link">تحویل محصول</a></li>
                                                        <li><a href="product-images-grouped.html" class="menu-link-text link">گروه بندی تصاویر</a></li>
                                                        <li><a href="product-complimentary.html" class="menu-link-text link">محصولات رایگان</a></li>
                                                        <li><a href="product-quick-order-list.html" class="menu-link-text link position-relative">لیست سفارش سریع<div class="demo-label"><span class="demo-new">جدید</span></div></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="menu-heading">پرفروش ترین</div>
                                                <div class="hover-sw-nav hover-sw-2">
                                                    <div class="swiper tf-product-header wrap-sw-over">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide" lazy="true">
                                                                <div class="card-product">
                                                                    <div class="card-product-wrapper">
                                                                        <a href="#" class="product-img">
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
                                                                    </div>
                                                                    <div class="card-product-info">
                                                                        <a href="#" class="title link">زیرپوش آجدار آدیداس</a>
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
                                                            </div>
                                                            <div class="swiper-slide" lazy="true">
                                                                <div class="card-product">
                                                                    <div class="card-product-wrapper">
                                                                        <div class="product-img">
                                                                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/white-3.jpg')}}" src="{{asset('assets/user/v1/images/products/white-3.jpg')}}" alt="image-product">
                                                                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/white-4.jpg')}}" src="{{asset('assets/user/v1/images/products/white-4.jpg')}}" alt="image-product">
                                                                        </div>
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
                                                                        <a href="#" class="title link">تیشرت تابستانه سایز بزرگ</a>
                                                                        <span class="price">10.00<toman> تومان </toman></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide" lazy="true">
                                                                <div class="card-product">
                                                                    <div class="card-product-wrapper">
                                                                        <div class="product-img">
                                                                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/white-2.jpg')}}" src="{{asset('assets/user/v1/images/products/white-2.jpg')}}" alt="image-product">
                                                                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/pink-1.jpg')}}" src="{{asset('assets/user/v1/images/products/pink-1.jpg')}}" alt="image-product">
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
                                                                        <div class="size-list">
                                                                            <span>S</span>
                                                                            <span>M</span>
                                                                            <span>L</span>
                                                                            <span>XL</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-product-info">
                                                                        <a href="#" class="title">تیشرت تابستانه سایز بزرگ</a>
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
                                                            </div>
                                                            <div class="swiper-slide" lazy="true">
                                                                <div class="card-product">
                                                                    <div class="card-product-wrapper">
                                                                        <div class="product-img">
                                                                            <img class="lazyload img-product" data-src="{{asset('assets/user/v1/images/products/brown-2.jpg')}}" src="{{asset('assets/user/v1/images/products/brown-2.jpg')}}" alt="image-product">
                                                                            <img class="lazyload img-hover" data-src="{{asset('assets/user/v1/images/products/brown-3.jpg')}}" src="{{asset('assets/user/v1/images/products/brown-3.jpg')}}" alt="image-product">
                                                                        </div>
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
                                                                        <a href="#" class="title link">تی شرت کتانی یقه V</a>
                                                                        <span class="price">114.95<toman> تومان </toman></span>
                                                                        <ul class="list-color-product">
                                                                            <li class="list-color-item color-swatch active">
                                                                                <span class="tooltip">قهوه ای</span>
                                                                                <span class="swatch-value bg_brown"></span>
                                                                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/brown-2.jpg')}}" src="{{asset('assets/user/v1/images/products/brown-2.jpg')}}" alt="image-product">
                                                                            </li>
                                                                            <li class="list-color-item color-swatch">
                                                                                <span class="tooltip">سفید</span>
                                                                                <span class="swatch-value bg_white"></span>
                                                                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/products/white-5.jpg')}}" src="{{asset('assets/user/v1/images/products/white-5.jpg')}}" alt="image-product">
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nav-sw nav-next-slider nav-next-product-header box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                                                    <div class="nav-sw nav-prev-slider nav-prev-product-header box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item position-relative">
                                <a href="#" class="item-link">صفحات<i class="icon icon-arrow-down"></i></a>
                                <div class="sub-menu submenu-default">
                                    <ul class="menu-list">
                                        <li><a href="about-us.html" class="menu-link-text link text_black-2">درباره ما</a></li>
                                        <li>
                                            <a href="brands.html" class="menu-link-text link text_black-2 position-relative">برندها
                                                <div class="demo-label"><span class="demo-new">جدید</span></div>
                                            </a>
                                        </li>
                                        <li><a href="brands-v2.html" class="menu-link-text link text_black-2">برند نسخه 2</a></li>
                                        <li><a href="contact-1.html" class="menu-link-text link text_black-2">تماس 1</a></li>
                                        <li><a href="contact-2.html" class="menu-link-text link text_black-2">تماس 2</a></li>
                                        <li><a href="faq-1.html" class="menu-link-text link text_black-2">سوالات متداول 01</a></li>
                                        <li><a href="faq-2.html" class="menu-link-text link text_black-2">سوالات متداول 02</a></li>
                                        <li><a href="our-store.html" class="menu-link-text link text_black-2">فروشگاه ما</a></li>
                                        <li><a href="store-locations.html" class="menu-link-text link text_black-2">مکان یاب فروشگاه</a></li>
                                        <li><a href="timeline.html" class="menu-link-text link text_black-2 position-relative">تایم لاین<div class="demo-label"><span class="demo-new">جدید</span></div> </a></li>
                                        <li><a href="view-cart.html" class="menu-link-text link text_black-2 position-relative">مشاهده سبد خرید</a></li>
                                        <li><a href="checkout.html" class="menu-link-text link text_black-2 position-relative">تسویه حساب</a></li>
                                        <li><a href="payment-confirmation.html" class="menu-link-text link text_black-2 position-relative">تایید پرداخت</a></li>
                                        <li><a href="payment-failure.html" class="menu-link-text link text_black-2 position-relative">عدم پرداخت</a></li>
                                        <li><a href="my-account.html" class="menu-link-text link text_black-2 position-relative">اکانت من</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item position-relative">
                                <a href="#" class="item-link">وبلاگ<i class="icon icon-arrow-down"></i></a>
                                <div class="sub-menu submenu-default">
                                    <ul class="menu-list">
                                        <li><a href="blog-grid.html" class="menu-link-text link text_black-2">چیدمان گرید</a></li>
                                        <li><a href="blog-sidebar-left.html" class="menu-link-text link text_black-2">سایدبار چپ</a></li>
                                        <li><a href="blog-sidebar-right.html" class="menu-link-text link text_black-2">سایدبار راست</a></li>
                                        <li><a href="blog-list.html" class="menu-link-text link text_black-2">لیست وبلاگ</a></li>
                                        <li><a href="blog-detail.html" class="menu-link-text link text_black-2">پست تک</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item"><a href="#" class="item-link">هم اکنون خرید کنید</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-3 col-md-4 col-3">
                    <ul class="nav-icon d-flex justify-content-end align-items-center gap-20">
                        <li class="nav-search"><a href="#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="nav-icon-item"><i class="icon icon-search"></i></a></li>
                        <li class="nav-account"><a href="#login" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-account"></i></a></li>
                        <li class="nav-wishlist"><a href="wishlist.html" class="nav-icon-item"><i class="icon icon-heart"></i><span class="count-box">0</span></a></li>
                        <li class="nav-cart"><a href="#shoppingCart" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-bag"></i><span class="count-box">0</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->
@yield('content')
    <!-- Footer -->
    <footer id="footer" class="footer md-pb-70">
        <div class="footer-wrap">
            <div class="footer-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="footer-infor">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="{{asset('assets/user/v1/images/logo/logo.svg')}}" alt="">
                                    </a>
                                </div>
                                <ul>
                                    <li>
                                        <p>آدرس: 1234 خیابان مد، سوئیت 567, <br> نیویورک، نیویورک 10001</p>
                                    </li>
                                    <li>
                                        <p>ایمیل: <a href="#">info@fashionshop.com</a></p>
                                    </li>
                                    <li>
                                        <p>تلفن: <a href="#">(212) 555-1234</a></p>
                                    </li>
                                </ul>
                                <a href="contact-1.html" class="tf-btn btn-line">با ما تماس بگیرید<i class="icon icon-arrow1-top-right"></i></a>
                                <ul class="tf-social-icon d-flex gap-10">
                                    <li><a href="#" class="box-icon w_34 round social-facebook social-line"><i class="icon fs-14 icon-fb"></i></a></li>
                                    <li><a href="#" class="box-icon w_34 round social-twiter social-line"><i class="icon fs-12 icon-Icon-x"></i></a></li>
                                    <li><a href="#" class="box-icon w_34 round social-instagram social-line"><i class="icon fs-14 icon-instagram"></i></a></li>
                                    <li><a href="#" class="box-icon w_34 round social-tiktok social-line"><i class="icon fs-14 icon-tiktok"></i></a></li>
                                    <li><a href="#" class="box-icon w_34 round social-pinterest social-line"><i class="icon fs-14 icon-pinterest-1"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12 footer-col-block">
                            <div class="footer-heading footer-heading-desktop">
                                <h6>راهنما</h6>
                            </div>
                            <div class="footer-heading footer-heading-moblie">
                                <h6>راهنما</h6>
                            </div>
                            <ul class="footer-menu-list tf-collapse-content">
                                <li>
                                    <a href="privacy-policy.html" class="footer-menu_item">سیاست حفظ حریم خصوصی</a>
                                </li>
                                <li>
                                    <a href="delivery-return.html" class="footer-menu_item">  برگشت + تعویض </a>
                                </li>
                                <li>
                                    <a href="shipping-delivery.html" class="footer-menu_item">حمل و نقل</a>
                                </li>
                                <li>
                                    <a href="terms-conditions.html" class="footer-menu_item">شرایط و ضوابط</a>
                                </li>
                                <li>
                                    <a href="faq-1.html" class="footer-menu_item">سوالات متداول</a>
                                </li>
                                <li>
                                    <a href="compare.html" class="footer-menu_item">مقایسه کنید</a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="footer-menu_item">لیست خواسته های من</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12 footer-col-block">
                            <div class="footer-heading footer-heading-desktop">
                                <h6>درباره ما</h6>
                            </div>
                            <div class="footer-heading footer-heading-moblie">
                                <h6>درباره ما</h6>
                            </div>
                            <ul class="footer-menu-list tf-collapse-content">
                                <li>
                                    <a href="about-us.html" class="footer-menu_item">داستان ما</a>
                                </li>
                                <li>
                                    <a href="our-store.html" class="footer-menu_item">به فروشگاه ما سر بزنید</a>
                                </li>
                                <li>
                                    <a href="contact-1.html" class="footer-menu_item">تماس با ما</a>
                                </li>
                                <li>
                                    <a href="login.html" class="footer-menu_item">حساب</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="footer-newsletter footer-col-block">
                                <div class="footer-heading footer-heading-desktop">
                                    <h6>برای ایمیل ثبت نام کنید</h6>
                                </div>
                                <div class="footer-heading footer-heading-moblie">
                                    <h6>برای ایمیل ثبت نام کنید</h6>
                                </div>
                                <div class="tf-collapse-content">
                                    <div class="footer-menu_item">ثبت‌نام کنید تا اولین تخفیف‌های تازه وارد، فروش، محتوای انحصاری، رویدادها و موارد دیگر را دریافت کنید!</div>
                                    <form class="form-newsletter subscribe-form" id="" action="#" method="post" accept-charset="utf-8" data-mailchimp="true">
                                        <div class="subscribe-content">
                                            <fieldset class="email">
                                                <input type="email" name="email-form" class="subscribe-email" placeholder="ایمیل خود را وارد کنید...." tabindex="0" aria-required="true">
                                            </fieldset>
                                            <div class="button-submit">
                                                <button id="" class="subscribe-button tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn" type="button">اشتراک<i class="icon icon-arrow1-top-right"></i></button>
                                            </div>
                                        </div>
                                        <div class="subscribe-msg"></div>
                                    </form>
                                    <div class="tf-cur">
                                        <div class="tf-currencies">
                                            <select class="image-select center style-default type-currencies">
                                                <option data-thumbnail="{{asset('assets/user/v1/images/country/fr.svg')}}">EUR <span>€ | فرانسه</span></option>
                                                <option data-thumbnail="{{asset('assets/user/v1/images/country/de.svg')}}">EUR <span>€ | آلمان</span></option>
                                                <option selected data-thumbnail="{{asset('assets/user/v1/images/country/us.svg')}}">USD <span><toman> تومان </toman> | ایالات متحده</span></option>
                                                <option data-thumbnail="{{asset('assets/user/v1/images/country/vn.svg')}}">VND <span>₫ | ویتنام</span></option>
                                            </select>
                                        </div>
                                        <div class="tf-languages">
                                            <select class="image-select center style-default type-languages">
                                                <option>انگلیسی</option>
                                                <option>العربية</option>
                                                <option>简体中文</option>
                                                <option>اردو</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-bottom-wrap d-flex gap-20 flex-wrap justify-content-between align-items-center">
                                <div class="footer-menu_item">© 1403 قالب HTML Ecomus توسط فرهام اقدسی. تمامی حقوق محفوظ است</div>
                                <div class="tf-payment">
                                    <img src="{{asset('assets/user/v1/images/payments/visa.png')}}" alt="">
                                    <img src="{{asset('assets/user/v1/images/payments/img-1.png')}}" alt="">
                                    <img src="{{asset('assets/user/v1/images/payments/img-2.png')}}" alt="">
                                    <img src="{{asset('assets/user/v1/images/payments/img-3.png')}}" alt="">
                                    <img src="{{asset('assets/user/v1/images/payments/img-4.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

</div>

<!-- gotop -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
    </svg>
</div>
<!-- /gotop -->

<!-- toolbar-bottom -->
<div class="tf-toolbar-bottom type-1150">
    <div class="toolbar-item active">
        <a href="#toolbarShopmb" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
            <div class="toolbar-icon">
                <i class="icon-shop"></i>
            </div>
            <div class="toolbar-label">فروشگاه</div>
        </a>
    </div>

    <div class="toolbar-item">
        <a href="#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
            <div class="toolbar-icon">
                <i class="icon-search"></i>
            </div>
            <div class="toolbar-label">جستجو</div>
        </a>
    </div>
    <div class="toolbar-item">
        <a href="#login" data-bs-toggle="modal">
            <div class="toolbar-icon">
                <i class="icon-account"></i>
            </div>
            <div class="toolbar-label">حساب</div>
        </a>
    </div>
    <div class="toolbar-item">
        <a href="wishlist.html">
            <div class="toolbar-icon">
                <i class="icon-heart"></i>
                <div class="toolbar-count">0</div>
            </div>
            <div class="toolbar-label">علاقه مندی ها</div>
        </a>
    </div>
    <div class="toolbar-item">
        <a href="#shoppingCart" data-bs-toggle="modal">
            <div class="toolbar-icon">
                <i class="icon-bag"></i>
                <div class="toolbar-count">1</div>
            </div>
            <div class="toolbar-label">سبد خرید</div>
        </a>
    </div>
</div>
<!-- /toolbar-bottom -->

<!-- modalDemo -->
<div class="modal fade modalDemo" id="modalDemo">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <h5 class="demo-title">تم نهایی HTML</h5>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="mega-menu">
                <div class="row-demo">
                    <div class="demo-item">
                        <a href="index.html">
                            <div class="demo-image position-relative">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-01.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-01.jpg')}}" alt="home-01">
                                <div class="demo-label">
                                    <span class="demo-new">جدید</span>
                                    <span>ترند</span>
                                </div>
                            </div>
                            <span class="demo-name">صفحه خانه مد 01</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-multi-brand.html">
                            <div class="demo-image position-relative">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-multi-brand.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-multi-brand.jpg')}}" alt="home-multi-brand">
                                <div class="demo-label">
                                    <span class="demo-new">جدید</span>
                                    <span class="demo-hot">داغ</span>
                                </div>
                            </div>
                            <span class="demo-name">خانه مولتی برند</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-02.html">
                            <div class="demo-image position-relative">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-02.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-02.jpg')}}" alt="home-02">
                                <div class="demo-label">
                                    <span class="demo-hot">داغ</span>
                                </div>
                            </div>
                            <span class="demo-name">صفحه خانه مد 02</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-03.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-03.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-03.jpg')}}" alt="home-03">
                            </div>
                            <span class="demo-name">صفحه خانه مد 03</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-04.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-04.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-04.jpg')}}" alt="home-04">
                            </div>
                            <span class="demo-name">صفحه خانه مد 04</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-05.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-05.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-05.jpg')}}" alt="home-05">
                            </div>
                            <span class="demo-name">صفحه خانه مد 05</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-06.html">
                            <div class="demo-image position-relative">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-06.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-06.jpg')}}" alt="home-06">
                                <div class="demo-label">
                                    <span class="demo-new">جدید</span>
                                </div>
                            </div>
                            <span class="demo-name">صفحه خانه مد 06</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-07.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-07.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-07.jpg')}}" alt="home-07">
                            </div>
                            <span class="demo-name">صفحه خانه مد 07</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-08.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-08.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-08.jpg')}}" alt="home-08">
                            </div>
                            <span class="demo-name">صفحه خانه مد 08</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-skincare.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-skincare.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-skincare.jpg')}}" alt="home-skincare">
                            </div>
                            <span class="demo-name">خانه مراقبت از پوست</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-headphone.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-headphone.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-headphone.jpg')}}" alt="home-headphone">
                            </div>
                            <span class="demo-name">خانه هدفون</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-giftcard.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-giftcard.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-giftcard.jpg')}}" alt="home-gift-card">
                            </div>
                            <span class="demo-name">خانه گیف کارت</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-furniture.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-furniture.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-furniture.jpg')}}" alt="home-furniture">
                            </div>
                            <span class="demo-name">خانه مبلمان</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-furniture-02.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-furniture2.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-furniture2.jpg')}}" alt="home-furniture-2">
                            </div>
                            <span class="demo-name">خانه مبلمان 2</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-skateboard.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-skateboard.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-skateboard.jpg')}}" alt="home-skateboard">
                            </div>
                            <span class="demo-name">خانه اسکیت برد</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-stroller.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-stroller.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-stroller.jpg')}}" alt="home-stroller">
                            </div>
                            <span class="demo-name">خانه کالسکه</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-decor.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-decor.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-decor.jpg')}}" alt="home-decor">
                            </div>
                            <span class="demo-name">دکوراسیون منزل</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-electronic.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-electronic.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-electronic.jpg')}}" alt="home-electronic">
                            </div>
                            <span class="demo-name">الکترونیک خانگی</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-setup-gear.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-setup-gear.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-setup-gear.jpg')}}" alt="home-setup-gear">
                            </div>
                            <span class="demo-name">خانه راه اندازی لوازم جانبی</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-dog-accessories.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-dog-accessories.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-dog-accessories.jpg')}}" alt="home-dog-accessories">
                            </div>
                            <span class="demo-name">لوازم جانبی سگ خانگی</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-kitchen-wear.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-kitchen.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-kitchen.jpg')}}" alt="home-kitchen-wear">
                            </div>
                            <span class="demo-name">خانه آشپزخانه</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-phonecase.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-phonecase.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-phonecase.jpg')}}" alt="home-phonecase">
                            </div>
                            <span class="demo-name">خانه قالب گوشی</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-paddle-boards.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home_paddle_board.jpg')}}" src="{{asset('assets/user/v1/images/demo/home_paddle_board.jpg')}}" alt="home-paddle_board">
                            </div>
                            <span class="demo-name">خانه تخته های پارویی</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-glasses.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-glasses.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-glasses.jpg')}}" alt="home-glasses">
                            </div>
                            <span class="demo-name">خانه عینک</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-pod-store.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-pod-store.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-pod-store.jpg')}}" alt="home-pod-store">
                            </div>
                            <span class="demo-name">خانه فروشگاه POD</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-activewear.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-activewear.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-activewear.jpg')}}" alt="home-activewear">
                            </div>
                            <span class="demo-name">لباس فعال</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-handbag.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-handbag.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-handbag.jpg')}}" alt="home-handbag">
                            </div>
                            <span class="demo-name">خانه کیف دستی</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-tee.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-tee.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-tee.jpg')}}" alt="home-tee">
                            </div>
                            <span class="demo-name">خانه سه راهی</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-sock.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-socks.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-socks.jpg')}}" alt="home-sock">
                            </div>
                            <span class="demo-name">خانه جوراب</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-jewerly.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-jewelry.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-jewelry.jpg')}}" alt="home-jewelry">
                            </div>
                            <span class="demo-name">خانه جواهر فروشی</span>
                        </a>
                    </div>
                    <div class="demo-item">
                        <a href="home-sneaker.html">
                            <div class="demo-image">
                                <img class="lazyload" data-src="{{asset('assets/user/v1/images/demo/home-sneaker.jpg')}}" src="{{asset('assets/user/v1/images/demo/home-sneaker.jpg')}}" alt="home-sneaker">
                            </div>
                            <span class="demo-name">خانه کفش ورزشی</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /modalDemo -->

<!-- mobile menu -->
<div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    <div class="mb-canvas-content">
        <div class="mb-body">
            <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-one" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-one">
                        <span>خانه</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-one" class="collapse">
                        <ul class="sub-nav-menu" >
                            <li><a href="index.html" class="sub-nav-link">خانه مد 01</a></li>
                            <li><a href="home-02.html" class="sub-nav-link">خانه مد 02</a></li>
                            <li><a href="home-03.html" class="sub-nav-link">خانه مد 03</a></li>
                            <li><a href="home-04.html" class="sub-nav-link">خانه مد 04</a></li>
                            <li><a href="home-05.html" class="sub-nav-link">خانه مد 05</a></li>
                            <li><a href="home-06.html" class="sub-nav-link">خانه مد 06</a></li>
                            <li><a href="home-07.html" class="sub-nav-link">خانه مد 07</a></li>
                            <li><a href="home-08.html" class="sub-nav-link">خانه مد 08</a></li>
                            <li><a href="home-giftcard.html" class="sub-nav-link">خانه کارت هدیه</a></li>
                            <li><a href="home-headphone.html" class="sub-nav-link">خانه هدفون</a></li>
                            <li><a href="home-multi-brand.html" class="sub-nav-link">خانه برند چندگانه</a></li>
                            <li><a href="home-skincare.html" class="sub-nav-link">خانه مراقبت از پوست</a></li>
                            <li><a href="home-headphone.html" class="sub-nav-link">خانه هدفون</a></li>
                            <li><a href="home-giftcard.html" class="sub-nav-link">خانه کارت هدیه</a></li>
                            <li><a href="home-furniture.html" class="sub-nav-link">خانه مبلمان</a></li>
                            <li><a href="home-furniture-02.html" class="sub-nav-link">خانه مبلمان 2</a></li>
                            <li><a href="home-skateboard.html" class="sub-nav-link">خانه اسکیت برد</a></li>
                            <li><a href="home-stroller.html" class="sub-nav-link">خانه کالسکه</a></li>
                            <li><a href="home-decor.html" class="sub-nav-link">خانه دکور</a></li>
                            <li><a href="home-electronic.html" class="sub-nav-link">خانه الکترونیک</a></li>
                            <li><a href="home-setup-gear.html" class="sub-nav-link">خانه راه اندازی دنده</a></li>
                            <li><a href="home-dog-accessories.html" class="sub-nav-link">خانه لوازم جانبی سگ</a></li>
                            <li><a href="home-kitchen-wear.html" class="sub-nav-link">خانه آشپزخانه</a></li>
                            <li><a href="home-phonecase.html" class="sub-nav-link">خانه قالب تلفن</a></li>
                            <li><a href="home-paddle-boards.html" class="sub-nav-link">خانه تخته های پارویی</a></li>
                            <li><a href="home-glasses.html" class="sub-nav-link">خانه عینک</a></li>
                            <li><a href="home-pod-store.html" class="sub-nav-link">خانه فروشگاه PDO</a></li>
                            <li><a href="home-activewear.html" class="sub-nav-link">خانه شستن فعال</a></li>
                            <li><a href="home-handbag.html" class="sub-nav-link">خانه کیف دستی</a></li>
                            <li><a href="home-tee.html" class="sub-nav-link">خانه تی</a></li>
                            <li><a href="home-sock.html" class="sub-nav-link">خانه جوراب</a></li>
                            <li><a href="home-jewerly.html" class="sub-nav-link">خانه جواهر فروشی</a></li>
                            <li><a href="home-sneaker.html" class="sub-nav-link">خانه کفش ورزشی</a></li>
                        </ul>
                    </div>

                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-two" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-two">
                        <span>فروشگاه</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-two" class="collapse">
                        <ul class="sub-nav-menu" id="sub-menu-navigation">
                            <li><a href="#sub-shop-one" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-one">
                                    <span>چیدمان فروشگاه</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-shop-one" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="shop-default.html" class="sub-nav-link">پیش‌فرض</a></li>
                                        <li><a href="shop-left-sidebar.html" class="sub-nav-link">نوار کناری سمت چپ</a></li>
                                        <li><a href="shop-right-sidebar.html" class="sub-nav-link">نوار کناری سمت راست</a></li>
                                        <li><a href="shop-fullwidth.html" class="sub-nav-link"> تمام عرض</a></li>
                                        <li><a href="shop-collection-sub.html" class="sub-nav-link">مجموعه فرعی</a></li>
                                        <li><a href="shop-collection-list.html" class="sub-nav-link">لیست مجموعه ها</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sub-shop-two" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-two">
                                    <span>ویژگی ها</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-shop-two" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="shop-link.html" class="sub-nav-link">پیوندهای صفحه بندی</a></li>
                                        <li><a href="shop-loadmore.html" class="sub-nav-link">صفحه بندی بارگذاری بیشتر</a></li>
                                        <li><a href="shop-infinite-scrolling.html" class="sub-nav-link">صفحه بندی پیمایش بی نهایت</a></li>
                                        <li><a href="shop-filter-sidebar.html" class="sub-nav-link">فیلتر نواربار</a></li>
                                        <li><a href="shop-filter-hidden.html" class="sub-nav-link">فیلتر پنهان</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sub-shop-three" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-three">
                                    <span>سبک های محصول</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-shop-three" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="product-style-list.html" class="sub-nav-link">لیست سبک محصول</a></li>
                                        <li><a href="product-style-01.html" class="sub-nav-link">سبک محصول 01</a></li>
                                        <li><a href="product-style-02.html" class="sub-nav-link">سبک محصول 02</a></li>
                                        <li><a href="product-style-03.html" class="sub-nav-link">سبک محصول 03</a></li>
                                        <li><a href="product-style-04.html" class="sub-nav-link">سبک محصول 04</a></li>
                                        <li><a href="product-style-05.html" class="sub-nav-link">سبک محصول 05</a></li>
                                        <li><a href="product-style-06.html" class="sub-nav-link">سبک محصول 06</a></li>
                                        <li><a href="product-style-07.html" class="sub-nav-link">سبک محصول 07</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-three" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-three">
                        <span>محصولات</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-three" class="collapse">
                        <ul class="sub-nav-menu" id="sub-menu-navigation">
                            <li>
                                <a href="#sub-product-one" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-one">
                                    <span>طرح بندی محصولات</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-product-one" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="product-detail.html" class="sub-nav-link">محصول پیشفرض</a></li>
                                        <li><a href="product-grid-1.html" class="sub-nav-link">محصول گرید 1</a></li>
                                        <li><a href="product-grid-2.html" class="sub-nav-link">محصول گرید 2</a></li>
                                        <li><a href="product-stacked.html" class="sub-nav-link">محصولات انباشته</a></li>
                                        <li><a href="product-right-thumbnails.html" class="sub-nav-link">تصاویر کوچک راست محصول</a></li>
                                        <li><a href="product-bottom-thumbnails.html" class="sub-nav-link">تصاویر کوچک پایین محصول</a></li>
                                        <li><a href="product-drawer-sidebar.html" class="sub-nav-link">نوار کناری کشو محصول</a></li>
                                        <li><a href="product-description-accordion.html" class="sub-nav-link">توضیحات محصول آکاردئون</a></li>
                                        <li><a href="product-description-list.html" class="sub-nav-link">لیست توضیحات محصول</a></li>
                                        <li><a href="product-description-vertical.html" class="sub-nav-link">توضیحات محصول عمودی</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sub-product-two" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-two">
                                    <span>جزئیات محصول</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-product-two" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="product-inner-zoom.html" class="sub-nav-link">زوم داخلی محصول</a></li>
                                        <li><a href="product-zoom-magnifier.html" class="sub-nav-link">بزرگنمایی محصول</a></li>
                                        <li><a href="product-no-zoom.html" class="sub-nav-link">محصول بدون زوم</a></li>
                                        <li><a href="product-photoswipe-popup.html" class="sub-nav-link">پاپ آپ عکس محصول</a></li>
                                        <li><a href="product-zoom-popup.html" class="sub-nav-link">زوم خارجی محصول و بازشو عکس</a></li>
                                        <li><a href="product-video.html" class="sub-nav-link">ویدئوی محصول</a></li>
                                        <li><a href="product-3d.html" class="sub-nav-link">مدل های سه بعدی، AR محصول</a></li>
                                        <li><a href="product-options-customizer.html" class="sub-nav-link">گزینه های محصول و سفارشی ساز</a></li>
                                        <li><a href="product-advanced-types.html" class="sub-nav-link">انواع محصولات پیشرفته</a></li>
                                        <li><a href="product-giftcard.html" class="sub-nav-link">فرم گیرنده اطلاعات کارت هدیه</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sub-product-three" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-three">
                                    <span>نمونه های محصول</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-product-three" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="product-color-swatch.html" class="sub-nav-link">نمونه رنگ محصول</a></li>
                                        <li><a href="product-rectangle.html" class="sub-nav-link">مستطیل محصول</a></li>
                                        <li><a href="product-rectangle-color.html" class="sub-nav-link">رنگ محصول به صورت مستطیل</a></li>
                                        <li><a href="product-swatch-image.html" class="sub-nav-link">تصویر نمونه محصول</a></li>
                                        <li><a href="product-swatch-image-rounded.html" class="sub-nav-link">تصویر نمونه محصول گرد شده</a></li>
                                        <li><a href="product-swatch-dropdown.html" class="sub-nav-link">نمونه محصول منو کشویی</a></li>
                                        <li><a href="product-swatch-dropdown-color.html" class="sub-nav-link">رنگ نمونه محصول منو کشویی</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sub-product-four" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-four">
                                    <span>ویژگی های محصول</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-product-four" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li><a href="product-frequently-bought-together.html" class="sub-nav-link">خرید با هم</a></li>
                                        <li><a href="product-frequently-bought-together-2.html" class="sub-nav-link">خرید با هم 2</a></li>
                                        <li><a href="product-upsell-features.html" class="sub-nav-link">ویژگی های فروش بالای محصول</a></li>
                                        <li><a href="product-pre-orders.html" class="sub-nav-link">پیش سفارش محصول</a></li>
                                        <li><a href="product-notification.html" class="sub-nav-link">اطلاعیه بازگشت به انبار</a></li>
                                        <li><a href="product-pickup.html" class="sub-nav-link">تحویل محصول</a></li>
                                        <li><a href="product-images-grouped.html" class="sub-nav-link">گروه بندی تصاویر</a></li>
                                        <li><a href="product-complimentary.html" class="sub-nav-link">محصولات رایگان</a></li>
                                        <li><a href="product-quick-order-list.html" class="sub-nav-link line-clamp">لیست سفارش سریع<div class="demo-label"><span class="demo-new">جدید</span></div></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-four" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-four">
                        <span>صفحات</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-four" class="collapse">
                        <ul class="sub-nav-menu" id="sub-menu-navigation">
                            <li><a href="about-us.html" class="sub-nav-link">درباره ما</a></li>
                            <li><a href="brands.html" class="sub-nav-link line-clamp">برندها<div class="demo-label"><span class="demo-new">جدید</span></div></a></li>
                            <li><a href="brands-v2.html" class="sub-nav-link">برندها V2</a></li>
                            <li><a href="contact-1.html" class="sub-nav-link">تماس 1</a></li>
                            <li><a href="contact-2.html" class="sub-nav-link">تماس 2</a></li>
                            <li><a href="faq-1.html" class="sub-nav-link">سوالات متداول 01</a></li>
                            <li><a href="faq-2.html" class="sub-nav-link">سوالات متداول 02</a></li>
                            <li><a href="our-store.html" class="sub-nav-link">فروشگاه ما</a></li>
                            <li><a href="store-locations.html" class="sub-nav-link">مکان یاب فروشگاه</a></li>
                            <li><a href="timeline.html" class="sub-nav-link line-clamp">جدول زمانی<div class="demo-label"><span class="demo-new">جدید</span></div></a></li>
                            <li><a href="view-cart.html" class="sub-nav-link line-clamp">مشاهده سبد خرید</a></li>
                            <li><a href="checkout.html" class="sub-nav-link line-clamp">تسویه حساب</a></li>
                            <li><a href="payment-confirmation.html" class="sub-nav-link line-clamp">تایید پرداخت</a></li>
                            <li><a href="payment-failure.html" class="sub-nav-link line-clamp">عدم پرداخت</a></li>
                            <li><a href="my-account.html" class="sub-nav-link line-clamp">اکانت من</a></li>
                        </ul>
                    </div>

                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-five" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-five">
                        <span>بلاگ</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-five" class="collapse">
                        <ul class="sub-nav-menu" >
                            <li><a href="blog-grid.html" class="sub-nav-link">چیدمان گرید</a></li>
                            <li><a href="blog-sidebar-left.html" class="sub-nav-link">نوار کناری سمت چپ</a></li>
                            <li><a href="blog-sidebar-right.html" class="sub-nav-link">نوار کناری سمت راست</a></li>
                            <li><a href="blog-list.html" class="sub-nav-link">لیست وبلاگ</a></li>
                            <li><a href="blog-detail.html" class="sub-nav-link">پست تک</a></li>
                        </ul>
                    </div>

                </li>
                <li class="nav-mb-item">
                    <a href="#" class="mb-menu-link">هم اکنون خرید کنید</a>
                </li>
            </ul>
            <div class="mb-other-content">
                <div class="d-flex group-icon">
                    <a href="wishlist.html" class="site-nav-icon"><i class="icon icon-heart"></i>علاقه مندی ها</a>
                    <a href="home-search.html" class="site-nav-icon"><i class="icon icon-search"></i>جستجو</a>
                </div>
                <div class="mb-notice">
                    <a href="contact-1.html" class="text-need">کمک نیاز دارید؟</a>
                </div>
                <ul class="mb-info">
                    <li>آدرس: 1234 خیابان مد، سوئیت 567, <br> نیویورک، نیویورک 10001</li>
                    <li>ایمیل: <b>info@fashionshop.com</b></li>
                    <li>تلفن: <b>(212) 555-1234</b></li>
                </ul>
            </div>
        </div>
        <div class="mb-bottom">
            <a href="login.html" class="site-nav-icon"><i class="icon icon-account"></i>ورود</a>
            <div class="bottom-bar-language">
                <div class="tf-currencies">
                    <select class="image-select center style-default type-currencies">
                        <option data-thumbnail="{{asset('assets/user/v1/images/country/fr.svg')}}">EUR <span>€ | فرانسه</span></option>
                        <option data-thumbnail="{{asset('assets/user/v1/images/country/de.svg')}}">EUR <span>€ | آلمان</span></option>
                        <option selected data-thumbnail="{{asset('assets/user/v1/images/country/us.svg')}}">USD <span><toman> تومان </toman> | ایالات متحده</span></option>
                        <option data-thumbnail="{{asset('assets/user/v1/images/country/vn.svg')}}">VND <span>₫ | ویتنام</span></option>
                    </select>
                </div>
                <div class="tf-languages">
                    <select class="image-select center style-default type-languages">
                        <option>انگلیسی</option>
                        <option>العربية</option>
                        <option>简体中文</option>
                        <option>اردو</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /mobile menu -->



<!-- canvasSearch -->
<div class="offcanvas offcanvas-end canvas-search" id="canvasSearch">
    <div class="canvas-wrapper">
        <header class="tf-search-head">
            <div class="title fw-5">
                سایت ما را جستجو کنید
                <div class="close">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                </div>
            </div>
            <div class="tf-search-sticky">
                <form class="tf-mini-search-frm">
                    <fieldset class="text">
                        <input type="text" placeholder="جستجو" class="" name="text" tabindex="0" value="" aria-required="true" required="">
                    </fieldset>
                    <button class="" type="submit"><i class="icon-search"></i></button>
                </form>
            </div>
        </header>
        <div class="canvas-body p-0">
            <div class="tf-search-content">
                <div class="tf-cart-hide-has-results">
                    <div class="tf-col-quicklink">
                        <div class="tf-search-content-title fw-5">لینک سریع</div>
                        <ul class="tf-quicklink-list">
                            <li class="tf-quicklink-item">
                                <a href="shop-default.html" class="">مد</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="shop-default.html" class="">مردان</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="shop-default.html" class="">زنان</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="shop-default.html" class="">لوازم جانبی</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tf-col-content">
                        <div class="tf-search-content-title fw-5">نیاز به الهام دارید؟</div>
                        <div class="tf-search-hidden-inner">
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="product-detail.html">
                                        <img src="{{asset('assets/user/v1/images/products/white-3.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="product-detail.html">پیراهن نخی</a>
                                    <div class="tf-product-info-price">
                                        <div class="compare-at-price">10.00<toman> تومان </toman></div>
                                        <div class="price-on-sale fw-6">8.00<toman> تومان </toman></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="product-detail.html">
                                        <img src="{{asset('assets/user/v1/images/products/white-2.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="product-detail.html">کیف کراس بادی مینی</a>
                                    <div class="tf-product-info-price">
                                        <div class="price fw-6">18.00<toman> تومان </toman></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="product-detail.html">
                                        <img src="{{asset('assets/user/v1/images/products/white-1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="product-detail.html">تیشرت تابستانه سایز بزرگ</a>
                                    <div class="tf-product-info-price">
                                        <div class="price fw-6">18.00<toman> تومان </toman></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /canvasSearch -->

<!-- toolbarShopmb -->
<div class="offcanvas offcanvas-start canvas-mb toolbar-shop-mobile" id="toolbarShopmb">
    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    <div class="mb-canvas-content">
        <div class="mb-body">
            <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                <li class="nav-mb-item">
                    <a href="shop-default.html" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="{{asset('assets/user/v1/images/shop/cate/cate1.jpg')}}" alt="">
                        </div>
                        <span>لوازم جانبی</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.html" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="{{asset('assets/user/v1/images/shop/cate/cate2.jpg')}}" alt="">
                        </div>
                        <span>سگ</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.html" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="{{asset('assets/user/v1/images/shop/cate/cate3.jpg')}}" alt="">
                        </div>
                        <span>خواربار فروشی</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.html" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="{{asset('assets/user/v1/images/shop/cate/cate4.png')}}" alt="">
                        </div>
                        <span>کیف دستی</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="#cate-menu-one" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-one">
                        <div class="image">
                            <img src="{{asset('assets/user/v1/images/shop/cate/cate5.jpg')}}" alt="">
                        </div>
                        <span>مد</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="cate-menu-one" class="collapse list-cate">
                        <ul class="sub-nav-menu" id="cate-menu-navigation">
                            <li>
                                <a href="#cate-shop-one" class="tf-category-link has-children sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-shop-one">
                                    <div class="image">
                                        <img src="{{asset('assets/user/v1/images/shop/cate/cate6.jpg')}}" alt="">
                                    </div>
                                    <span>مردانs</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="cate-shop-one" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li>
                                            <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="{{asset('assets/user/v1/images/shop/cate/cate1.jpg')}}" alt="">
                                                </div>
                                                <span>لوازم جانبی</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="{{asset('assets/user/v1/images/shop/cate/cate8.jpg')}}" alt="">
                                                </div>
                                                <span>کفش</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#cate-shop-two" class="tf-category-link has-children sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-shop-two">
                                    <div class="image">
                                        <img src="{{asset('assets/user/v1/images/shop/cate/cate9.jpg')}}" alt="">
                                    </div>
                                    <span>زنان</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="cate-shop-two" class="collapse">
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        <li>
                                            <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="{{asset('assets/user/v1/images/shop/cate/cate4.png')}}" alt="">
                                                </div>
                                                <span>کیف دستی</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                <div class="image">
                                                    <img src="{{asset('assets/user/v1/images/shop/cate/cate7.jpg')}}" alt="">
                                                </div>
                                                <span>تی</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-mb-item">
                    <a href="#cate-menu-two" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-two">
                        <div class="image">
                            <img src="{{asset('assets/user/v1/images/shop/cate/cate6.jpg')}}" alt="">
                        </div>
                        <span>مردان</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="cate-menu-two" class="collapse list-cate">
                        <ul class="sub-nav-menu" id="cate-menu-navigation1">
                            <li>
                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="{{asset('assets/user/v1/images/shop/cate/cate1.jpg')}}" alt="">
                                    </div>
                                    <span>لوازم جانبی</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="{{asset('assets/user/v1/images/shop/cate/cate8.jpg')}}" alt="">
                                    </div>
                                    <span>کفش</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.html" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="{{asset('assets/user/v1/images/shop/cate/cate7.jpg')}}" alt="">
                        </div>
                        <span>تی</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="shop-default.html" class="tf-category-link mb-menu-link">
                        <div class="image">
                            <img src="{{asset('assets/user/v1/images/shop/cate/cate8.jpg')}}" alt="">
                        </div>
                        <span>کفش</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="#cate-menu-three" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-three">
                        <div class="image">
                            <img src="{{asset('assets/user/v1/images/shop/cate/cate9.jpg')}}" alt="">
                        </div>
                        <span>زنان</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="cate-menu-three" class="collapse list-cate">
                        <ul class="sub-nav-menu" id="cate-menu-navigation2">
                            <li>
                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="{{asset('assets/user/v1/images/shop/cate/cate4.png')}}" alt="">
                                    </div>
                                    <span>کیف دستی</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                    <div class="image">
                                        <img src="{{asset('assets/user/v1/images/shop/cate/cate7.jpg')}}" alt="">
                                    </div>
                                    <span>تی</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="mb-bottom">
            <a href="shop-default.html" class="tf-btn fw-5 btn-line">مشاهده تمام مجموعه<i class="icon icon-arrow1-top-right"></i></a>
        </div>
    </div>
</div>
<!-- /toolbarShopmb -->

<!-- modal login -->
<div class="modal modalCentered fade form-sign-in modal-part-content" id="login">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">وارد شوید</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="tf-login-form">
                <form class="">
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="email"  name="">
                        <label class="tf-field-label" for="">ایمیل *</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="password"  name="">
                        <label class="tf-field-label" for="">رمز عبور *</label>
                    </div>
                    <div>
                        <a href="#forgotPassword" data-bs-toggle="modal" class="btn-link link">رمز عبور خود را فراموش کرده اید؟</a>
                    </div>
                    <div class="bottom">
                        <div class="w-100">
                            <a href="login.html" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>وارد شوید</span></a>
                        </div>
                        <div class="w-100">
                            <a href="#register" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                مشتری جدید؟ حساب کاربری خود را ایجاد کنید
                                <i class="icon icon-arrow1-top-right"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal modalCentered fade form-sign-in modal-part-content" id="forgotPassword">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">رمز عبور خود را بازنشانی کنید</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="tf-login-form">
                <form class="">
                    <div>
                        <p>برای دسترسی به فروش زودهنگام به اضافه ورودی‌های جدید، گرایش‌ها و تبلیغات سفارشی ثبت‌نام کنید. برای انصراف، روی لغو اشتراک در ایمیل‌های ما کلیک کنید</p>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="email"  name="">
                        <label class="tf-field-label" for="">ایمیل *</label>
                    </div>
                    <div>
                        <a href="#login" data-bs-toggle="modal" class="btn-link link">لغو</a>
                    </div>
                    <div class="bottom">
                        <div class="w-100">
                            <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>بازنشانی رمز عبور</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal modalCentered fade form-sign-in modal-part-content" id="register">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">ثبت نام</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="tf-login-form">
                <form class="">
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="text"  name="">
                        <label class="tf-field-label" for="">نام</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="text"  name="">
                        <label class="tf-field-label" for="">نام خانوادگی</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="email"  name="">
                        <label class="tf-field-label" for="">ایمیل *</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="password"  name="">
                        <label class="tf-field-label" for="">رمز عبور *</label>
                    </div>
                    <div class="bottom">
                        <div class="w-100">
                            <a href="register.html" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>ثبت نام</span></a>
                        </div>
                        <div class="w-100">
                            <a href="#login" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                از قبل حساب کاربری دارید؟ اینجا وارد شوید
                                <i class="icon icon-arrow1-top-right"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /modal login -->

<!-- shoppingCart -->
<div class="modal fullRight fade modal-shopping-cart" id="shoppingCart">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="header">
                <div class="title fw-5">سبد خرید</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="wrap">
                <div class="tf-mini-cart-threshold">
                    <div class="tf-progress-bar">
                        <span style="width: 50%;"></span>
                    </div>
                    <div class="tf-progress-msg">
                        خرید <span class="price fw-6">75.00<toman> تومان </toman></span> برای لذت بردن بیشتر از <span class="fw-6">ارسال رایگان</span>
                    </div>
                </div>
                <div class="tf-mini-cart-wrap">
                    <div class="tf-mini-cart-main">
                        <div class="tf-mini-cart-sroll">
                            <div class="tf-mini-cart-items">
                                <div class="tf-mini-cart-item">
                                    <div class="tf-mini-cart-image">
                                        <a href="product-detail.html">
                                            <img src="{{asset('assets/user/v1/images/products/white-2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <a class="title link" href="product-detail.html">تی شرت</a>
                                        <div class="meta-variant">خاکستری روشن</div>
                                        <div class="price fw-6">25.00<toman> تومان </toman></div>
                                        <div class="tf-mini-cart-btns">
                                            <div class="wg-quantity small">
                                                <span class="btn-quantity minus-btn">-</span>
                                                <input type="text" name="number" value="1">
                                                <span class="btn-quantity plus-btn">+</span>
                                            </div>
                                            <div class="tf-mini-cart-remove">حذف</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item">
                                    <div class="tf-mini-cart-image">
                                        <a href="product-detail.html">
                                            <img src="{{asset('assets/user/v1/images/products/white-3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <a class="title link" href="product-detail.html">موتیف بزرگ تی شرت</a>
                                        <div class="price fw-6">25.00<toman> تومان </toman></div>
                                        <div class="tf-mini-cart-btns">
                                            <div class="wg-quantity small">
                                                <span class="btn-quantity minus-btn">-</span>
                                                <input type="text" name="number" value="1">
                                                <span class="btn-quantity plus-btn">+</span>
                                            </div>
                                            <div class="tf-mini-cart-remove">حذف</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-minicart-recommendations">
                                <div class="tf-minicart-recommendations-heading">
                                    <div class="tf-minicart-recommendations-title">شما هم ممکن است دوست داشته باشید</div>
                                    <div class="sw-dots small style-2 cart-slide-pagination"></div>
                                </div>
                                <div class="swiper tf-cart-slide">
                                    <div class="swiper-wrapper" >
                                        <div class="swiper-slide">
                                            <div class="tf-minicart-recommendations-item">
                                                <div class="tf-minicart-recommendations-item-image">
                                                    <a href="product-detail.html">
                                                        <img src="{{asset('assets/user/v1/images/products/white-3.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="tf-minicart-recommendations-item-infos flex-grow-1">
                                                    <a class="title" href="product-detail.html">سویشرت گشاد</a>
                                                    <div class="price">25.00<toman> تومان </toman></div>
                                                </div>
                                                <div class="tf-minicart-recommendations-item-quickview">
                                                    <div class="btn-show-quickview quickview hover-tooltip">
                                                        <span class="icon icon-view"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tf-minicart-recommendations-item">
                                                <div class="tf-minicart-recommendations-item-image">
                                                    <a href="product-detail.html">
                                                        <img src="{{asset('assets/user/v1/images/products/white-2.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="tf-minicart-recommendations-item-infos flex-grow-1">
                                                    <a class="title" href="product-detail.html">هودی گشاد</a>
                                                    <div class="price">25.00<toman> تومان </toman></div>
                                                </div>
                                                <div class="tf-minicart-recommendations-item-quickview">
                                                    <div class="btn-show-quickview quickview hover-tooltip">
                                                        <span class="icon icon-view"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-bottom">
                        <div class="tf-mini-cart-tool">
                            <div class="tf-mini-cart-tool-btn btn-add-note">
                                <svg xmlns="http://www.w3.org/1390/svg" width="16" height="18" viewBox="0 0 16 18" fill="currentColor"><path d="M5.12187 16.4582H2.78952C2.02045 16.4582 1.39476 15.8325 1.39476 15.0634V2.78952C1.39476 2.02045 2.02045 1.39476 2.78952 1.39476H11.3634C12.1325 1.39476 12.7582 2.02045 12.7582 2.78952V7.07841C12.7582 7.46357 13.0704 7.77579 13.4556 7.77579C13.8407 7.77579 14.1529 7.46357 14.1529 7.07841V2.78952C14.1529 1.25138 12.9016 0 11.3634 0H2.78952C1.25138 0 0 1.25138 0 2.78952V15.0634C0 16.6015 1.25138 17.8529 2.78952 17.8529H5.12187C5.50703 17.8529 5.81925 17.5407 5.81925 17.1555C5.81925 16.7704 5.50703 16.4582 5.12187 16.4582Z"></path><path d="M15.3882 10.0971C14.5724 9.28136 13.2452 9.28132 12.43 10.0965L8.60127 13.9168C8.51997 13.9979 8.45997 14.0979 8.42658 14.2078L7.59276 16.9528C7.55646 17.0723 7.55292 17.1993 7.58249 17.3207C7.61206 17.442 7.67367 17.5531 7.76087 17.6425C7.84807 17.7319 7.95768 17.7962 8.07823 17.8288C8.19879 17.8613 8.32587 17.8609 8.44621 17.8276L11.261 17.0479C11.3769 17.0158 11.4824 16.9543 11.5675 16.8694L15.3882 13.0559C16.2039 12.2401 16.2039 10.9129 15.3882 10.0971ZM10.712 15.7527L9.29586 16.145L9.71028 14.7806L12.2937 12.2029L13.2801 13.1893L10.712 15.7527ZM14.4025 12.0692L14.2673 12.204L13.2811 11.2178L13.4157 11.0834C13.6876 10.8115 14.1301 10.8115 14.402 11.0834C14.6739 11.3553 14.6739 11.7977 14.4025 12.0692Z"></path></svg>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-add-gift">
                                <svg xmlns="http://www.w3.org/1390/svg" width="17" height="18" viewBox="0 0 17 18" fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.99566 2.73409C2.99566 0.55401 5.42538 -0.746668 7.23916 0.463462L8.50073 1.30516L9.7623 0.463462C11.5761 -0.746668 14.0058 0.55401 14.0058 2.73409V3.24744H14.8225C15.9633 3.24744 16.8881 4.17233 16.8881 5.31312V6.82566C16.8881 7.21396 16.5734 7.52873 16.1851 7.52873H15.8905V15.1877C15.8905 15.1905 15.8905 15.1933 15.8905 15.196C15.886 16.7454 14.6286 18 13.0782 18H3.92323C2.37003 18 1.11091 16.7409 1.11091 15.1877V7.52877H0.81636C0.42806 7.52877 0.113281 7.21399 0.113281 6.82569V5.31316C0.113281 4.17228 1.03812 3.24744 2.179 3.24744H2.99566V2.73409ZM4.40181 3.24744H7.79765V2.52647L6.45874 1.63317C5.57987 1.0468 4.40181 1.67677 4.40181 2.73409V3.24744ZM9.20381 2.52647V3.24744H12.5996V2.73409C12.5996 1.67677 11.4216 1.0468 10.5427 1.63317L9.20381 2.52647ZM2.179 4.6536C1.81472 4.6536 1.51944 4.94888 1.51944 5.31316V6.12261H5.73398L5.734 4.6536H2.179ZM5.73401 7.52877V13.9306C5.73401 14.1806 5.86682 14.4119 6.08281 14.5379C6.29879 14.6639 6.56545 14.6657 6.78312 14.5426L8.50073 13.5715L10.2183 14.5426C10.436 14.6657 10.7027 14.6639 10.9187 14.5379C11.1346 14.4119 11.2674 14.1806 11.2674 13.9306V7.52873H14.4844V15.1603C14.4844 15.1627 14.4843 15.1651 14.4843 15.1675V15.1877C14.4843 15.9643 13.8548 16.5938 13.0782 16.5938H3.92323C3.14663 16.5938 2.51707 15.9643 2.51707 15.1877V7.52877H5.73401ZM15.482 6.12258V5.31312C15.482 4.94891 15.1867 4.6536 14.8225 4.6536H11.2674V6.12258H15.482ZM9.86129 4.6536H7.14017V12.7254L8.15469 12.1518C8.36941 12.0304 8.63204 12.0304 8.84676 12.1518L9.86129 12.7254V4.6536Z"></path></svg>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-estimate-shipping">
                                <svg xmlns="http://www.w3.org/1390/svg" width="26" height="18" viewBox="0 0 26 18" fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.811989C0 0.36354 0.36354 0 0.811989 0H15.4278C15.8763 0 16.2398 0.36354 16.2398 0.811989V3.10596H21.0144C23.6241 3.10596 25.8643 5.05894 25.8643 7.61523V14.6414C25.8643 15.0899 25.5007 15.4534 25.0523 15.4534H23.545C23.2139 16.9115 21.9098 18 20.3514 18C18.7931 18 17.4889 16.9115 17.1578 15.4534H8.69534C8.36423 16.9115 7.0601 18 5.50175 18C3.9434 18 2.63927 16.9115 2.30815 15.4534H0.811989C0.36354 15.4534 0 15.0899 0 14.6414V0.811989ZM2.35089 13.8294C2.74052 12.4562 4.00366 11.4503 5.50175 11.4503C6.99983 11.4503 8.26298 12.4562 8.6526 13.8294H14.6158V1.62398H1.62398V13.8294H2.35089ZM16.2398 4.72994V7.95749H24.2403V7.61523C24.2403 6.08759 22.8649 4.72994 21.0144 4.72994H16.2398ZM24.2403 9.58147H16.2398V13.8294H17.2006C17.5902 12.4562 18.8533 11.4503 20.3514 11.4503C21.8495 11.4503 23.1126 12.4562 23.5023 13.8294H24.2403V9.58147ZM5.50175 13.0743C4.58999 13.0743 3.85087 13.8134 3.85087 14.7251C3.85087 15.6369 4.58999 16.376 5.50175 16.376C6.41351 16.376 7.15263 15.6369 7.15263 14.7251C7.15263 13.8134 6.41351 13.0743 5.50175 13.0743ZM20.3514 13.0743C19.4397 13.0743 18.7005 13.8134 18.7005 14.7251C18.7005 15.6369 19.4397 16.376 20.3514 16.376C21.2632 16.376 22.0023 15.6369 22.0023 14.7251C22.0023 13.8134 21.2632 13.0743 20.3514 13.0743Z"></path></svg>
                            </div>
                        </div>
                        <div class="tf-mini-cart-bottom-wrap">
                            <div class="tf-cart-totals-discounts">
                                <div class="tf-cart-total">جمع فرعی</div>
                                <div class="tf-totals-total-value fw-6">49.99<toman> تومان </toman></div>
                            </div>
                            <div class="tf-cart-tax">مالیات و <a href="#">حمل و نقل</a> در هنگام تسویه حساب محاسبه می شود</div>
                            <div class="tf-mini-cart-line"></div>
                            <div class="tf-cart-checkbox">
                                <div class="tf-checkbox-wrapp">
                                    <input class="" type="checkbox" id="CartDrawer-Form_agree" name="agree_checkbox">
                                    <div>
                                        <i class="icon-check"></i>
                                    </div>
                                </div>
                                <label for="CartDrawer-Form_agree">
                                    من موافقم
                                    <a href="#" title="شرایط خدمات">با شرایط و ضوابط</a>
                                </label>
                            </div>
                            <div class="tf-mini-cart-view-checkout">
                                <a href="view-cart.html" class="tf-btn btn-outline radius-3 link w-100 justify-content-center">مشاهده سبد خرید</a>
                                <a href="checkout.html" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>تسویه حساب</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-note">
                        <div class="overplay tf-mini-cart-tool-close"></div>
                        <div class="tf-mini-cart-tool-content">
                            <label for="Cart-note" class="tf-mini-cart-tool-text">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/1390/svg" width="16" height="18" viewBox="0 0 16 18" fill="currentColor"><path d="M5.12187 16.4582H2.78952C2.02045 16.4582 1.39476 15.8325 1.39476 15.0634V2.78952C1.39476 2.02045 2.02045 1.39476 2.78952 1.39476H11.3634C12.1325 1.39476 12.7582 2.02045 12.7582 2.78952V7.07841C12.7582 7.46357 13.0704 7.77579 13.4556 7.77579C13.8407 7.77579 14.1529 7.46357 14.1529 7.07841V2.78952C14.1529 1.25138 12.9016 0 11.3634 0H2.78952C1.25138 0 0 1.25138 0 2.78952V15.0634C0 16.6015 1.25138 17.8529 2.78952 17.8529H5.12187C5.50703 17.8529 5.81925 17.5407 5.81925 17.1555C5.81925 16.7704 5.50703 16.4582 5.12187 16.4582Z"></path><path d="M15.3882 10.0971C14.5724 9.28136 13.2452 9.28132 12.43 10.0965L8.60127 13.9168C8.51997 13.9979 8.45997 14.0979 8.42658 14.2078L7.59276 16.9528C7.55646 17.0723 7.55292 17.1993 7.58249 17.3207C7.61206 17.442 7.67367 17.5531 7.76087 17.6425C7.84807 17.7319 7.95768 17.7962 8.07823 17.8288C8.19879 17.8613 8.32587 17.8609 8.44621 17.8276L11.261 17.0479C11.3769 17.0158 11.4824 16.9543 11.5675 16.8694L15.3882 13.0559C16.2039 12.2401 16.2039 10.9129 15.3882 10.0971ZM10.712 15.7527L9.29586 16.145L9.71028 14.7806L12.2937 12.2029L13.2801 13.1893L10.712 15.7527ZM14.4025 12.0692L14.2673 12.204L13.2811 11.2178L13.4157 11.0834C13.6876 10.8115 14.1301 10.8115 14.402 11.0834C14.6739 11.3553 14.6739 11.7977 14.4025 12.0692Z"></path></svg>
                                </div>
                                <span>اضافه کردن یادداشت سفارش</span>
                            </label>
                            <textarea name="note" id="Cart-note" placeholder="چطور میتونم کمکتون کنم ؟"></textarea>
                            <div class="tf-cart-tool-btns justify-content-center">
                                <div class="tf-mini-cart-tool-primary text-center w-100 fw-6 tf-mini-cart-tool-close">بستن</div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-gift">
                        <div class="overplay tf-mini-cart-tool-close"></div>
                        <form class="tf-product-form-addgift">
                            <div class="tf-mini-cart-tool-content">
                                <div class="tf-mini-cart-tool-text">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/1390/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.65957 3.64545C4.65957 0.73868 7.89921 -0.995558 10.3176 0.617949L11.9997 1.74021L13.6818 0.617949C16.1001 -0.995558 19.3398 0.73868 19.3398 3.64545V4.32992H20.4286C21.9498 4.32992 23.1829 5.56311 23.1829 7.08416V9.10087C23.1829 9.61861 22.7632 10.0383 22.2454 10.0383H21.8528V20.2502C21.8528 20.254 21.8527 20.2577 21.8527 20.2614C21.8467 22.3272 20.1702 24 18.103 24H5.89634C3.82541 24 2.14658 22.3212 2.14658 20.2502V10.0384H1.75384C1.23611 10.0384 0.816406 9.61865 0.816406 9.10092V7.08421C0.816406 5.56304 2.04953 4.32992 3.57069 4.32992H4.65957V3.64545ZM6.53445 4.32992H11.0622V3.36863L9.27702 2.17757C8.10519 1.39573 6.53445 2.2357 6.53445 3.64545V4.32992ZM12.9371 3.36863V4.32992H17.4649V3.64545C17.4649 2.2357 15.8942 1.39573 14.7223 2.17756L12.9371 3.36863ZM3.57069 6.2048C3.08499 6.2048 2.69128 6.59851 2.69128 7.08421V8.16348H8.31067L8.3107 6.2048H3.57069ZM8.31071 10.0384V18.5741C8.31071 18.9075 8.48779 19.2158 8.77577 19.3838C9.06376 19.5518 9.4193 19.5542 9.70953 19.3901L11.9997 18.0953L14.2898 19.3901C14.58 19.5542 14.9356 19.5518 15.2236 19.3838C15.5115 19.2158 15.6886 18.9075 15.6886 18.5741V10.0383H19.9779V20.2137C19.9778 20.2169 19.9778 20.2201 19.9778 20.2233V20.2502C19.9778 21.2857 19.1384 22.1251 18.103 22.1251H5.89634C4.86088 22.1251 4.02146 21.2857 4.02146 20.2502V10.0384H8.31071ZM21.308 8.16344V7.08416C21.308 6.59854 20.9143 6.2048 20.4286 6.2048H15.6886V8.16344H21.308ZM13.8138 6.2048H10.1856V16.9672L11.5383 16.1405C11.8246 16.0405 12.1748 16.0405 12.461 16.1405L13.8138 16.9672V6.2048Z"></path></svg>
                                    </div>
                                    <div class="tf-gift-wrap-infos">
                                        <p>آیا بسته بندی هدیه می خواهید؟</p>
                                        فقط
                                        <span class="price fw-6">5.00<toman> تومان </toman></span>
                                    </div>
                                </div>
                                <div class="tf-cart-tool-btns">
                                    <button type="submit" class="tf-btn fw-6 w-100 justify-content-center btn-fill animate-hover-btn radius-3"><span>یک بسته بندی هدیه اضافه کنید</span></button>
                                    <div class="tf-mini-cart-tool-primary text-center w-100 fw-6 tf-mini-cart-tool-close">لغو</div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable estimate-shipping">
                        <div class="overplay tf-mini-cart-tool-close"></div>
                        <div class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/1390/svg" width="21" height="15" viewBox="0 0 21 15" fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.441406 1.13155C0.441406 0.782753 0.724159 0.5 1.07295 0.5H12.4408C12.7896 0.5 13.0724 0.782753 13.0724 1.13155V2.91575H16.7859C18.8157 2.91575 20.5581 4.43473 20.5581 6.42296V11.8878C20.5581 12.2366 20.2753 12.5193 19.9265 12.5193H18.7542C18.4967 13.6534 17.4823 14.5 16.2703 14.5C15.0582 14.5 14.0439 13.6534 13.7864 12.5193H7.20445C6.94692 13.6534 5.93259 14.5 4.72054 14.5C3.50849 14.5 2.49417 13.6534 2.23664 12.5193H1.07295C0.724159 12.5193 0.441406 12.2366 0.441406 11.8878V1.13155ZM2.26988 11.2562C2.57292 10.1881 3.55537 9.40578 4.72054 9.40578C5.88572 9.40578 6.86817 10.1881 7.17121 11.2562H11.8093V1.76309H1.7045V11.2562H2.26988ZM13.0724 4.17884V6.68916H19.295V6.42296C19.295 5.2348 18.2252 4.17884 16.7859 4.17884H13.0724ZM19.295 7.95226H13.0724V11.2562H13.8196C14.1227 10.1881 15.1051 9.40578 16.2703 9.40578C17.4355 9.40578 18.4179 10.1881 18.7209 11.2562H19.295V7.95226ZM4.72054 10.6689C4.0114 10.6689 3.43652 11.2437 3.43652 11.9529C3.43652 12.662 4.0114 13.2369 4.72054 13.2369C5.42969 13.2369 6.00456 12.662 6.00456 11.9529C6.00456 11.2437 5.42969 10.6689 4.72054 10.6689ZM16.2703 10.6689C15.5611 10.6689 14.9863 11.2437 14.9863 11.9529C14.9863 12.662 15.5611 13.2369 16.2703 13.2369C16.9794 13.2369 17.5543 12.662 17.5543 11.9529C17.5543 11.2437 16.9794 10.6689 16.2703 10.6689Z"></path></svg>
                                </div>
                                <span class="fw-6">تخمین حمل و نقل</span>
                            </div>
                            <div class="field">
                                <p>کشور</p>
                                <select class="tf-select w-100" id="ShippingCountry_CartDrawer-Form" name="address[country]" data-default="">
                                    <option value="---" data-provinces="[]">---</option>
                                    <option value="Australia" data-provinces="[['Australian Capital Territory','Australian Capital Territory'],['New South Wales','New South Wales'],['Northern Territory','Northern Territory'],['Queensland','Queensland'],['South Australia','South Australia'],['Tasmania','Tasmania'],['Victoria','Victoria'],['Western Australia','Western Australia']]">استرالیا</option>
                                    <option value="Austria" data-provinces="[]">اتریش</option>
                                    <option value="Belgium" data-provinces="[]">بلژیک</option>
                                    <option value="Canada" data-provinces="[['Alberta','Alberta'],['British Columbia','British Columbia'],['Manitoba','Manitoba'],['New Brunswick','New Brunswick'],['Newfoundland and Labrador','Newfoundland and Labrador'],['Northwest Territories','Northwest Territories'],['Nova Scotia','Nova Scotia'],['Nunavut','Nunavut'],['Ontario','Ontario'],['Prince Edward Island','Prince Edward Island'],['Quebec','Quebec'],['Saskatchewan','Saskatchewan'],['Yukon','Yukon']]">کانادا</option>
                                    <option value="Czech Republic" data-provinces="[]">چک</option>
                                    <option value="Denmark" data-provinces="[]">دانمارک</option>
                                    <option value="Finland" data-provinces="[]">فنلاند</option>
                                    <option value="France" data-provinces="[]">فرانسه</option>
                                    <option value="Germany" data-provinces="[]">آلمان</option>
                                    <option value="Hong Kong" data-provinces="[['Hong Kong Island','Hong Kong Island'],['Kowloon','Kowloon'],['New Territories','New Territories']]">SAR هنگ کنگ</option>
                                    <option value="Ireland" data-provinces="[['Carlow','Carlow'],['Cavan','Cavan'],['Clare','Clare'],['Cork','Cork'],['Donegal','Donegal'],['Dublin','Dublin'],['Galway','Galway'],['Kerry','Kerry'],['Kildare','Kildare'],['Kilkenny','Kilkenny'],['Laois','Laois'],['Leitrim','Leitrim'],['Limerick','Limerick'],['Longford','Longford'],['Louth','Louth'],['Mayo','Mayo'],['Meath','Meath'],['Monaghan','Monaghan'],['Offaly','Offaly'],['Roscommon','Roscommon'],['Sligo','Sligo'],['Tipperary','Tipperary'],['Waterford','Waterford'],['Westmeath','Westmeath'],['Wexford','Wexford'],['Wicklow','Wicklow']]">ایرلند</option>
                                    <option value="Israel" data-provinces="[]">اسرائیل</option>
                                    <option value="Italy" data-provinces="[['Agrigento','Agrigento'],['Alessandria','Alessandria'],['Ancona','Ancona'],['Aosta','Aosta Valley'],['Arezzo','Arezzo'],['Ascoli Piceno','Ascoli Piceno'],['Asti','Asti'],['Avellino','Avellino'],['Bari','Bari'],['Barletta-Andria-Trani','Barletta-Andria-Trani'],['Belluno','Belluno'],['Benevento','Benevento'],['Bergamo','Bergamo'],['Biella','Biella'],['Bologna','Bologna'],['Bolzano','South Tyrol'],['Brescia','Brescia'],['Brindisi','Brindisi'],['Cagliari','Cagliari'],['Caltanissetta','Caltanissetta'],['Campobasso','Campobasso'],['Carbonia-Iglesias','Carbonia-Iglesias'],['Caserta','Caserta'],['Catania','Catania'],['Catanzaro','Catanzaro'],['Chieti','Chieti'],['Como','Como'],['Cosenza','Cosenza'],['Cremona','Cremona'],['Crotone','Crotone'],['Cuneo','Cuneo'],['Enna','Enna'],['Fermo','Fermo'],['Ferrara','Ferrara'],['Firenze','Florence'],['Foggia','Foggia'],['Forlì-Cesena','Forlì-Cesena'],['Frosinone','Frosinone'],['Genova','Genoa'],['Gorizia','Gorizia'],['Grosseto','Grosseto'],['Imperia','Imperia'],['Isernia','Isernia'],['L'Aquila','L’Aquila'],['La Spezia','La Spezia'],['Latina','Latina'],['Lecce','Lecce'],['Lecco','Lecco'],['Livorno','Livorno'],['Lodi','Lodi'],['Lucca','Lucca'],['Macerata','Macerata'],['Mantova','Mantua'],['Massa-Carrara','Massa and Carrara'],['Matera','Matera'],['Medio Campidano','Medio Campidano'],['Messina','Messina'],['Milano','Milan'],['Modena','Modena'],['Monza e Brianza','Monza and Brianza'],['Napoli','Naples'],['Novara','Novara'],['Nuoro','Nuoro'],['Ogliastra','Ogliastra'],['Olbia-Tempio','Olbia-Tempio'],['Oristano','Oristano'],['Padova','Padua'],['Palermo','Palermo'],['Parma','Parma'],['Pavia','Pavia'],['Perugia','Perugia'],['Pesaro e Urbino','Pesaro and Urbino'],['Pescara','Pescara'],['Piacenza','Piacenza'],['Pisa','Pisa'],['Pistoia','Pistoia'],['Pordenone','Pordenone'],['Potenza','Potenza'],['Prato','Prato'],['Ragusa','Ragusa'],['Ravenna','Ravenna'],['Reggio Calabria','Reggio Calabria'],['Reggio Emilia','Reggio Emilia'],['Rieti','Rieti'],['Rimini','Rimini'],['Roma','Rome'],['Rovigo','Rovigo'],['Salerno','Salerno'],['Sassari','Sassari'],['Savona','Savona'],['Siena','Siena'],['Siracusa','Syracuse'],['Sondrio','Sondrio'],['Taranto','Taranto'],['Teramo','Teramo'],['Terni','Terni'],['Torino','Turin'],['Trapani','Trapani'],['Trento','Trentino'],['Treviso','Treviso'],['Trieste','Trieste'],['Udine','Udine'],['Varese','Varese'],['Venezia','Venice'],['Verbano-Cusio-Ossola','Verbano-Cusio-Ossola'],['Vercelli','Vercelli'],['Verona','Verona'],['Vibo Valentia','Vibo Valentia'],['Vicenza','Vicenza'],['Viterbo','Viterbo']]">ایتالیا</option>
                                    <option value="Japan" data-provinces="[['Aichi','Aichi'],['Akita','Akita'],['Aomori','Aomori'],['Chiba','Chiba'],['Ehime','Ehime'],['Fukui','Fukui'],['Fukuoka','Fukuoka'],['Fukushima','Fukushima'],['Gifu','Gifu'],['Gunma','Gunma'],['Hiroshima','Hiroshima'],['Hokkaidō','Hokkaido'],['Hyōgo','Hyogo'],['Ibaraki','Ibaraki'],['Ishikawa','Ishikawa'],['Iwate','Iwate'],['Kagawa','Kagawa'],['Kagoshima','Kagoshima'],['Kanagawa','Kanagawa'],['Kumamoto','Kumamoto'],['Kyōto','Kyoto'],['Kōchi','Kochi'],['Mie','Mie'],['Miyagi','Miyagi'],['Miyazaki','Miyazaki'],['Nagano','Nagano'],['Nagasaki','Nagasaki'],['Nara','Nara'],['Niigata','Niigata'],['Okayama','Okayama'],['Okinawa','Okinawa'],['Saga','Saga'],['Saitama','Saitama'],['Shiga','Shiga'],['Shimane','Shimane'],['Shizuoka','Shizuoka'],['Tochigi','Tochigi'],['Tokushima','Tokushima'],['Tottori','Tottori'],['Toyama','Toyama'],['Tōkyō','Tokyo'],['Wakayama','Wakayama'],['Yamagata','Yamagata'],['Yamaguchi','Yamaguchi'],['Yamanashi','Yamanashi'],['Ōita','Oita'],['Ōsaka','Osaka']]">ژاپن</option>
                                    <option value="Malaysia" data-provinces="[['Johor','Johor'],['Kedah','Kedah'],['Kelantan','Kelantan'],['Kuala Lumpur','Kuala Lumpur'],['Labuan','Labuan'],['Melaka','Malacca'],['Negeri Sembilan','Negeri Sembilan'],['Pahang','Pahang'],['Penang','Penang'],['Perak','Perak'],['Perlis','Perlis'],['Putrajaya','Putrajaya'],['Sabah','Sabah'],['Sarawak','Sarawak'],['Selangor','Selangor'],['Terengganu','Terengganu']]">مالزی</option>
                                    <option value="Netherlands" data-provinces="[]">هلند</option>
                                    <option value="نیوزلند" data-provinces="[['Auckland','Auckland'],['Bay of Plenty','Bay of Plenty'],['Canterbury','Canterbury'],['Chatham Islands','Chatham Islands'],['Gisborne','Gisborne'],['Hawke's Bay','Hawke’s Bay'],['Manawatu-Wanganui','Manawatū-Whanganui'],['Marlborough','Marlborough'],['Nelson','Nelson'],['Northland','Northland'],['Otago','Otago'],['Southland','Southland'],['Taranaki','Taranaki'],['Tasman','Tasman'],['Waikato','Waikato'],['Wellington','Wellington'],['West Coast','West Coast']]">نیوزلند</option>
                                    <option value="Norway" data-provinces="[]">نروژ</option>
                                    <option value="Poland" data-provinces="[]">لهستان</option>
                                    <option value="Portugal" data-provinces="[['Aveiro','Aveiro'],['Açores','Azores'],['Beja','Beja'],['Braga','Braga'],['Bragança','Bragança'],['Castelo Branco','Castelo Branco'],['Coimbra','Coimbra'],['Faro','Faro'],['Guarda','Guarda'],['Leiria','Leiria'],['Lisboa','Lisbon'],['Madeira','Madeira'],['Portalegre','Portalegre'],['Porto','Porto'],['Santarém','Santarém'],['Setúbal','Setúbal'],['Viana do Castelo','Viana do Castelo'],['Vila Real','Vila Real'],['Viseu','Viseu'],['Évora','Évora']]">پرتغال</option>
                                    <option value="Singapore" data-provinces="[]">سنگاپور</option>
                                    <option value="کره جنوبی" data-provinces="[['Busan','Busan'],['Chungbuk','North Chungcheong'],['Chungnam','South Chungcheong'],['Daegu','Daegu'],['Daejeon','Daejeon'],['Gangwon','Gangwon'],['Gwangju','Gwangju City'],['Gyeongbuk','North Gyeongsang'],['Gyeonggi','Gyeonggi'],['Gyeongnam','South Gyeongsang'],['Incheon','Incheon'],['Jeju','Jeju'],['Jeonbuk','North Jeolla'],['Jeonnam','South Jeolla'],['Sejong','Sejong'],['Seoul','Seoul'],['Ulsan','Ulsan']]">کره جنوبی</option>
                                    <option value="Spain" data-provinces="[['A Coruña','A Coruña'],['Albacete','Albacete'],['Alicante','Alicante'],['Almería','Almería'],['Asturias','Asturias Province'],['Badajoz','Badajoz'],['Balears','Balears Province'],['Barcelona','Barcelona'],['Burgos','Burgos'],['Cantabria','Cantabria Province'],['Castellón','Castellón'],['Ceuta','Ceuta'],['Ciudad Real','Ciudad Real'],['Cuenca','Cuenca'],['Cáceres','Cáceres'],['Cádiz','Cádiz'],['Córdoba','Córdoba'],['Girona','Girona'],['Granada','Granada'],['Guadalajara','Guadalajara'],['Guipúzcoa','Gipuzkoa'],['Huelva','Huelva'],['Huesca','Huesca'],['Jaén','Jaén'],['La Rioja','La Rioja Province'],['Las Palmas','Las Palmas'],['León','León'],['Lleida','Lleida'],['Lugo','Lugo'],['Madrid','Madrid Province'],['Melilla','Melilla'],['Murcia','Murcia'],['Málaga','Málaga'],['Navarra','Navarra'],['Ourense','Ourense'],['Palencia','Palencia'],['Pontevedra','Pontevedra'],['Salamanca','Salamanca'],['Santa Cruz de Tenerife','Santa Cruz de Tenerife'],['Segovia','Segovia'],['Sevilla','Seville'],['Soria','Soria'],['Tarragona','Tarragona'],['Teruel','Teruel'],['Toledo','Toledo'],['Valencia','Valencia'],['Valladolid','Valladolid'],['Vizcaya','Biscay'],['Zamora','Zamora'],['Zaragoza','Zaragoza'],['Álava','Álava'],['Ávila','Ávila']]">اسپانیا</option>
                                    <option value="Sweden" data-provinces="[]">سوئد</option>
                                    <option value="Switzerland" data-provinces="[]">سوئیس</option>
                                    <option value="امارات متحده عربی" data-provinces="[['Abu Dhabi','Abu Dhabi'],['Ajman','Ajman'],['Dubai','Dubai'],['Fujairah','Fujairah'],['Ras al-Khaimah','Ras al-Khaimah'],['Sharjah','Sharjah'],['Umm al-Quwain','Umm al-Quwain']]">امارات متحده عربی</option>
                                    <option value="انگلستان" data-provinces="[['British Forces','British Forces'],['England','England'],['Northern Ireland','Northern Ireland'],['Scotland','Scotland'],['Wales','Wales']]">انگلستان</option>
                                    <option value="ایالات متحده" data-provinces="[['Alabama','Alabama'],['Alaska','Alaska'],['American Samoa','American Samoa'],['Arizona','Arizona'],['Arkansas','Arkansas'],['Armed Forces Americas','Armed Forces Americas'],['Armed Forces Europe','Armed Forces Europe'],['Armed Forces Pacific','Armed Forces Pacific'],['California','California'],['Colorado','Colorado'],['Connecticut','Connecticut'],['Delaware','Delaware'],['District of Columbia','Washington DC'],['Federated States of Micronesia','Micronesia'],['Florida','Florida'],['Georgia','Georgia'],['Guam','Guam'],['Hawaii','Hawaii'],['Idaho','Idaho'],['Illinois','Illinois'],['Indiana','Indiana'],['Iowa','Iowa'],['Kansas','Kansas'],['Kentucky','Kentucky'],['Louisiana','Louisiana'],['Maine','Maine'],['Marshall Islands','Marshall Islands'],['Maryland','Maryland'],['Massachusetts','Massachusetts'],['Michigan','Michigan'],['Minnesota','Minnesota'],['Mississippi','Mississippi'],['Missouri','Missouri'],['Montana','Montana'],['Nebraska','Nebraska'],['Nevada','Nevada'],['New Hampshire','New Hampshire'],['New Jersey','New Jersey'],['New Mexico','New Mexico'],['نیویورک','نیویورک'],['North Carolina','North Carolina'],['North Dakota','North Dakota'],['Northern Mariana Islands','Northern Mariana Islands'],['Ohio','Ohio'],['Oklahoma','Oklahoma'],['Oregon','Oregon'],['Palau','Palau'],['Pennsylvania','Pennsylvania'],['Puerto Rico','Puerto Rico'],['Rhode Island','Rhode Island'],['South Carolina','South Carolina'],['South Dakota','South Dakota'],['Tennessee','Tennessee'],['Texas','Texas'],['Utah','Utah'],['Vermont','Vermont'],['Virgin Islands','U.S. Virgin Islands'],['Virginia','Virginia'],['Washington','Washington'],['West Virginia','West Virginia'],['Wisconsin','Wisconsin'],['Wyoming','Wyoming']]">ایالات متحده</option>
                                    <option value="ویتنام" data-provinces="[]">ویتنام</option>
                                </select>
                            </div>
                            <div class="field">
                                <p>کد پستی</p>
                                <input type="text" name="text" placeholder="">
                            </div>
                            <div class="tf-cart-tool-btns">
                                <a href="#" class="tf-btn fw-6 justify-content-center btn-fill w-100 animate-hover-btn radius-3"><span>برآورد</span></a>
                                <div class="tf-mini-cart-tool-primary text-center fw-6 w-100 tf-mini-cart-tool-close">لغو</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /shoppingCart -->

<!-- modal compare -->
<div class="offcanvas offcanvas-bottom canvas-compare" id="compare">
    <div class="canvas-wrapper">
        <header class="canvas-header">
            <div class="close-popup">
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </div>
        </header>
        <div class="canvas-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf-compare-list">
                            <div class="tf-compare-head">
                                <div class="title">مقایسه محصولات</div>
                            </div>
                            <div class="tf-compare-offcanvas">
                                <div class="tf-compare-item">
                                    <div class="position-relative">
                                        <div class="icon">
                                            <i class="icon-close"></i>
                                        </div>
                                        <a href="product-detail.html">
                                            <img class="radius-3" src="{{asset('assets/user/v1/images/products/orange-1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tf-compare-item">
                                    <div class="position-relative">
                                        <div class="icon">
                                            <i class="icon-close"></i>
                                        </div>
                                        <a href="product-detail.html">
                                            <img class="radius-3" src="{{asset('assets/user/v1/images/products/pink-1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-compare-buttons">
                                <div class="tf-compare-buttons-wrap">
                                    <a href="compare.html" class="tf-btn radius-3 btn-fill justify-content-center fw-6 fs-14 flex-grow-1 animate-hover-btn ">مقایسه کنید</a>
                                    <div class="tf-compapre-button-clear-all link">
                                        پاک کردن همه
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /modal compare -->

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

<!-- modal find_size -->
<div class="modal fade modalDemo tf-product-modal" id="find_size">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">نمودار اندازه</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="tf-rte">
                <div class="tf-table-res-df">
                    <h6>راهنمای اندازه</h6>
                    <table class="tf-sizeguide-table">
                        <thead>
                        <tr>
                            <th>اندازه</th>
                            <th>کیفیت</th>
                            <th>تنه</th>
                            <th>کمر</th>
                            <th>کم هیپ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>XS</td>
                            <td>2</td>
                            <td>32</td>
                            <td>24 - 25</td>
                            <td>33 - 34</td>
                        </tr>
                        <tr>
                            <td>S</td>
                            <td>4</td>
                            <td>34 - 35</td>
                            <td>26 - 27</td>
                            <td>35 - 26</td>
                        </tr>
                        <tr>
                            <td>M</td>
                            <td>6</td>
                            <td>36 - 37</td>
                            <td>28 - 29</td>
                            <td>38 - 40</td>
                        </tr>
                        <tr>
                            <td>L</td>
                            <td>8</td>
                            <td>38 - 29</td>
                            <td>30 - 31</td>
                            <td>42 - 44</td>
                        </tr>
                        <tr>
                            <td>XL</td>
                            <td>10</td>
                            <td>40 - 41</td>
                            <td>32 - 33</td>
                            <td>45 - 47</td>
                        </tr>
                        <tr>
                            <td>XXL</td>
                            <td>12</td>
                            <td>42 - 43</td>
                            <td>34 - 35</td>
                            <td>48 - 50</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tf-page-size-chart-content">
                    <div>
                        <h6>نکات اندازه گیری</h6>
                        <div class="title">نیم تنه</div>
                        <p>دور کامل ترین قسمت سینه خود را اندازه بگیرید.</p>
                        <div class="title">کمر</div>
                        <p>دور باریک ترین قسمت تنه خود را اندازه بگیرید.</p>
                        <div class="title">پایین هیپ</div>
                        <p class="mb-0">در حالی که پاهایتان روی هم قرار گرفته اند، کامل ترین قسمت باسن/عقب خود را اندازه بگیرید.
                        </p>
                    </div>
                    <div>
                        <img class="sizechart lazyload" data-src="{{asset('assets/user/v1/images/shop/products/size_chart2.jpg')}}" src="{{asset('assets/user/v1/images/shop/products/size_chart2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /modal find_size -->

<!-- auto popup  -->
<div class="modal modalCentered fade auto-popup modal-newleter">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-top">
                <img class="lazyload" data-src="{{asset('assets/user/v1/images/item/banner-newleter.jpg')}}" src="{{asset('assets/user/v1/images/item/banner-newleter.jpg')}}" alt="home-01">
                <span class="icon icon-close btn-hide-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="modal-bottom">
                <h4 class="text-center">از دست ندهید</h4>
                <h6 class="text-center">اولین کسی باشید که محصول جدید را با قیمت های اولیه دریافت می کنید.</h6>
                <form id="subscribe-form" action="#" class="form-newsletter" method="post" accept-charset="utf-8" data-mailchimp="true">
                    <div id="subscribe-content">
                        <input type="email" name="email-form" id="subscribe-email" placeholder="ایمیل *">
                        <button type="button" id="subscribe-button" class="tf-btn btn-fill radius-3 animate-hover-btn w-100 justify-content-center">مرا به روز نگه دار</button>
                    </div>
                    <div id="subscribe-msg"></div>
                </form>
                <div class="text-center">
                    <a href="#" data-bs-dismiss="modal" class="tf-btn btn-line fw-6 btn-hide-popup">علاقه مند نیست</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /auto popup  -->


<!-- Javascript -->
<script type="text/javascript" src="{{asset('assets/user/v1/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/user/v1/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/user/v1/js/swiper-bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/user/v1/js/carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/user/v1/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/user/v1/js/lazysize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/user/v1/js/count-down.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/user/v1/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/user/v1/js/multiple-modal.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/user/v1/js/main.js')}}"></script>
</body>

</html>
