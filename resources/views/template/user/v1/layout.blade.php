<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fa" lang="fa">

<head>
    <meta charset="utf-8">
    <title>فروشگاه هرمیون استور</title>

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

<body class="preload-wrapper popup-loader" >
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
                    <a href="{{route('index')}}" class="logo-header">
                        <img src="{{asset('assets/user/v1/images/logo/logo.svg')}}" alt="logo" class="logo">
                    </a>
                </div>
                <div class="col-xl-6 tf-md-hidden">
                    <nav class="box-navigation text-center">
                        <ul class="box-nav-ul d-flex align-items-center justify-content-center gap-30">
                            <li class="menu-item">
                                <a href="{{route('index')}}" class="item-link">خانه<i class="icon icon-arrow-down"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="item-link">محصولات<i class="icon icon-arrow-down"></i></a>
                                <div class="sub-menu mega-menu">
                                    <div class="container">
                                            <div class="row">
                                                @foreach($categories=App\Models\Category::where('parent_id',null)->get() as $cat)
                                                @if( $cat->parent_id == null )
                                                    <div class="col-lg-2">
                                                        <div class="mega-menu-item">
                                                            <div class="menu-heading"><a href="{{route('category.index',['id'=>$cat])}}">{{$cat->title}}</a></div>
                                                            @if(!$cat->children->isEmpty())
                                                                <ul class="menu-list">
                                                                    @include('template.user.v1.menu',['categories'=>$cat->childrenRecursive, 'level'=>1])
                                                                </ul>
                                                          @endif
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item position-relative">
                                <a href="{{route('blogs.list')}}" class="item-link">وبلاگ<i class="icon icon-arrow-down"></i></a>
                            </li>
                        </ul>

                    </nav>
                </div>
                <div class="col-xl-3 col-md-4 col-3">
                    <ul class="nav-icon d-flex justify-content-end align-items-center gap-20">
                        <li class="nav-search"><a href="#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="nav-icon-item"><i class="icon icon-search"></i></a></li>
                        @if(Auth::check())
                            <li class="nav-account"><a href="{{route('user.profile')}}" class="nav-icon-item"><i class="icon icon-account"></i></a></li>
                        @else
                            <li class="nav-account"><a href="#login" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-account"></i></a></li>
                        @endif
                        <li class="nav-wishlist"><a href="#" class="nav-icon-item"><i class="icon icon-heart"></i><span class="count-box">0</span></a></li>
                        <li class="nav-cart"><a href="#shoppingCart" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-bag"></i><span class="count-box">{{Session::has('cart') ? Session::get('cart')->totalQty:0}}</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    @yield('slider')
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
                                    <a href="{{route('index')}}">
                                        <img src="{{asset('assets/user/v1/images/logo/logo.svg')}}" alt="">
                                    </a>
                                </div>
                                <ul>
                                    <li>
                                        <p>آدرس: آذربایجان غربی <br> مهاباد</p>
                                    </li>
                                    <li>
                                        <p>ایمیل: <a href="#">s.ramyar.karimi@gmail.com</a></p>
                                    </li>
                                    <li>
                                        <p>تلفن: <a href="#">09146447961</a></p>
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
                                    <a href="#" class="footer-menu_item">لیست خواسته های من</a>
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
                                @if(Auth::check())
                                    <li>
                                        <a href="{{route('user.logout')}}" class="footer-menu_item">خروج</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{route('loginPhone')}}" class="footer-menu_item">حساب</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="footer-newsletter footer-col-block">
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
                                <div class="footer-menu_item">© . تمامی حقوق محفوظ است</div>
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
        <a href="#">
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
                <div class="toolbar-count">{{Session::has('cart') ? Session::get('cart')->totalQty :'0'}}</div>
            </div>
            <div class="toolbar-label">سبد خرید</div>
        </a>
    </div>
</div>
<!-- /toolbar-bottom -->


<!-- mobile menu -->
<div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    <div class="mb-canvas-content">
        <div class="mb-body">
            <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                <li class="nav-mb-item">
                    <a href="{{{route('index')}}}">
                        <span>خانه</span>
                    </a>

                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-three" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-three">
                        <span>محصولات</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-three" class="collapse">
                        @foreach($categories=App\Models\Category::where('parent_id',null)->get() as $cat)
                        <ul class="sub-nav-menu" id="sub-menu-navigation">
                            <li>
                                @if( ($cat->parent_id == null )&&(!$cat->children->isEmpty()))
                                <a href="#sub-product-{{$cat->id}}" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-one">
                                    <span>{{$cat->title}}</span>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="sub-product-{{$cat->id}}" class="collapse">
                                    @if(!$cat->children->isEmpty())
                                        <div id="dropdown-menu-three" class="collapse">
                                            <ul class="sub-nav-menu" id="sub-menu-navigation">
                                                @include('template.user.v1.menuMobile',['categories'=>$cat->childrenRecursive, 'level'=>1])
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                @elseif(($cat->parent_id == null )&&($cat->children->isEmpty()))
                                    <a href="{{route('category.index',['id'=>$cat])}}" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-one">
                                        <span>{{$cat->title}}</span>
                                    </a>
                                @endif
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </li>
            </ul>
            <div class="mb-other-content">
                <div class="d-flex group-icon">
                    <a href="#" class="site-nav-icon"><i class="icon icon-heart"></i>علاقه مندی ها</a>
                    <a href="home-search.html" class="site-nav-icon"><i class="icon icon-search"></i>جستجو</a>
                </div>
                <div class="mb-notice">
                    <a href="contact-1.html" class="text-need">کمک نیاز دارید؟</a>
                </div>
                <ul class="mb-info">
                    <li>آدرس: آذربایجان غربی <br>مهاباد</li>
                    <li>ایمیل: <b>s.ramyar.karimi@gmail.com</b></li>
                    <li>تلفن: <b>09146447961</b></li>
                </ul>
            </div>
        </div>
        @if(Auth::check())
            <div class="mb-bottom">
                <a href="{{route('user.logout')}}" class="site-nav-icon" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i></a>
            </div>
        @else
            <div class="mb-bottom">
                <a href="{{route('loginPhone')}}" class="site-nav-icon"><i class="icon icon-account"></i>ورود</a>
            </div>
        @endif
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
    </div>
</div>
<!-- /canvasSearch -->

<!-- toolbarShopmb -->
<div class="offcanvas offcanvas-start canvas-mb toolbar-shop-mobile" id="toolbarShopmb">
    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    <div class="mb-canvas-content">
        <div class="mb-body">
            @foreach($categories=App\Models\Category::where('parent_id',null)->get() as $cat)
                <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                    <li class="nav-mb-item">
                        @if( ($cat->parent_id == null )&&(!$cat->children->isEmpty()))
                            <a href="#cate-menu-{{$cat->id}}"class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-{{$cat->id}}" >
                                <span>{{$cat->title}}</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="cate-menu-{{$cat->id}}" class="collapse list-cate">
                                @if(!$cat->children->isEmpty())
                                    <ul class="sub-nav-menu sub-menu-level-2">
                                        @include('template.user.v1.menuModal',['categories'=>$cat->childrenRecursive, 'level'=>1])
                                    </ul>
                               @endif
                            </div>
                        @elseif(($cat->parent_id == null )&&($cat->children->isEmpty()))
                            <a href="{{route('category.index',['id'=>$cat])}}" class="tf-category-link mb-menu-link" >
                                <span>{{$cat->title}}</span>
                            </a>
                        @endif
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
</div>
<!-- /toolbarShopmb -->

<!-- modal login -->
<div class="modal modalCentered fade form-sign-in modal-part-content" id="login">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            @if(!Auth::check())
            <div class="header">
                <div class="demo-title">وارد شوید</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="tf-login-form">
                <form class="" action="{{ route('doLoginPhone') }}" method="post">
                    @csrf
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder="09121234567" type="text"  name="phone">
                        <label class="tf-field-label" for="">همراه *</label>
                    </div>
                    <div class="bottom">
                        <div class="w-100">
                            <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>وارد شوید</span></button>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="w-100">
                            <a href="#register" data-bs-toggle="modal" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>ثبت نام</span></a>
                        </div>
                    </div>
                </form>
            </div>
            @else
            <a href="{{route('user.profile')}}"></a>
            @endif
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
                <form class="" action="{{ route('doRegister') }}" method="post">
                    @csrf
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder="علی" type="text"  name="name">
                        <label class="tf-field-label" for="">نام</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder="محمدی" type="text"  name="lName">
                        <label class="tf-field-label" for="">نام خانوادگی</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder="" type="email"  name="email">
                        <label class="tf-field-label" for="">ایمیل *</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder="09121234567" type="text"  name="phone">
                        <label class="tf-field-label" for="">تلفن همراه *</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="password"  name="password">
                        <label class="tf-field-label" for="">رمز عبور *</label>
                    </div>
                    <div class="bottom">
                        <div class="w-100">
                            <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>ثبت نام</span></button>
                        </div>
                        <div class="bottom">
                            <div class="w-100">
                                <a href="#login" data-bs-toggle="modal" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>قبلا ثبت نام کرده ام</span></a>
                            </div>
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
                        خرید <span class="price fw-6">3,000,000<toman> تومان </toman></span> برای لذت بردن بیشتر از <span class="fw-6">ارسال رایگان</span>
                    </div>
                </div>
                @if(Session::has('cart'))
                <div class="tf-mini-cart-wrap" id="cart">
                    <div class="tf-mini-cart-main">
                        <div class="tf-mini-cart-sroll">
                            <div class="tf-mini-cart-items">
                                @foreach(Session::get('cart')->items as $product)
                                <div class="tf-mini-cart-item">
                                    <div class="tf-mini-cart-image">
                                        <a href="product-detail.html">
                                            <img src="{{asset('storage/photos/'.$product['item']->images[0]->path)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <a class="title link" href="product-detail.html">{{$product['item']->title}}</a>
                                        <!--<div class="meta-variant">خاکستری روشن</div>-->
                                        <div class="price fw-6">{{$product['price']}}<toman> تومان </toman></div>
                                        <div class="tf-mini-cart-btns">
                                            <div class="wg-quantity small">
                                                <span class="btn-quantity minus-btn">-</span>
                                                <input type="text" name="number" value="{{$product['qty']}}">
                                                <span class="btn-quantity plus-btn">+</span>
                                            </div>
                                            <div class="tf-mini-cart-remove"><button class="btn btn-danger btn-xs remove" title="حذف" onclick="event.preventDefault();
                                                       document.getElementById('remove-cart-item_{{$product['item']->id}}').submit();" type="button"><i class="fa fa-times"></i>
                                                </button>
                                                <form id="remove-cart-item_{{$product['item']->id}}" action="{{ route('cart.remove',['id'=>$product['item']->id]) }}" method="post" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
                                <div class="tf-cart-total">جمع کل</div>
                                <div class="tf-totals-total-value fw-6">{{Session::get('cart')->totalPurePrice}}<toman> تومان </toman></div>
                            </div>
                            <div class="tf-cart-totals-discounts">
                                <div class="tf-cart-total">کسر هدیه</div>
                                <div class="tf-totals-total-value fw-6">{{Session::get('cart')->totalDiscountPrice}}<toman> تومان </toman></div>
                            </div>
                            <div class="tf-cart-totals-discounts">
                                <div class="tf-cart-total">هزینه ارسال</div>
                                <div class="tf-totals-total-value fw-6">{{Session::get('cart')->shippingCost}}<toman> تومان </toman></div>
                            </div>
                            <div class="tf-cart-totals-discounts">
                                <div class="tf-cart-total">قابل پرداخت</div>
                                <div class="tf-totals-total-value fw-6">{{Session::get('cart')->totalPrice}}<toman> تومان </toman></div>
                            </div>

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
                                <a href="{{route('cart.get')}}" class="tf-btn btn-outline radius-3 link w-100 justify-content-center">مشاهده سبد خرید</a>
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
                @else
                <div>سبد خرید خالی است</div>
                @endif
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

@yield('modal')

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
<script type="text/javascript" src="{{asset('assets/user/v1/js/app.js')}}"></script>
@yield('scripts')
</body>

</html>

