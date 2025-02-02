@extends('template.user.v1.layout')
@section('content')
    <br>
    <br>
<!-- breadcrumb -->
    <div class="tf-breadcrumb">
        <div class="container">
            <div class="tf-breadcrumb-wrap d-flex justify-content-between flex-wrap align-items-center">
                <div class="tf-breadcrumb-list">
                    <a href="{{url('/')}}" class="text">صفحه اصلی</a>
                    <i class="icon icon-arrow-right"></i>
                    <a href="#" class="text">زنان</a>
                    <i class="icon icon-arrow-right"></i>
                    <span class="text">{{$product->title}}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->
    <!-- default -->
    <section class="flat-spacing-4 pt_0">
        <div class="tf-main-product section-image-zoom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tf-product-media-wrap sticky-top">
                            <div class="thumbs-slider">
                                <div class="swiper tf-product-media-thumbs other-image-zoom" data-direction="vertical">
                                    <div class="swiper-wrapper">
                                        @foreach($product->images as $productImage)
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <img class="lazyload" data-src="{{asset('storage/photos/'.$productImage->path)}}" src="{{asset('storage/photos/'.$productImage->path)}}" alt="">
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper tf-product-media-main" id="gallery-swiper-started">
                                    <div class="swiper-wrapper">
                                        @foreach($product->images as $productImage)
                                        <div class="swiper-slide">
                                            <a href="{{asset('storage/photos/'.$productImage->path)}}" target="_blank" class="item"
                                               data-pswp-width="770px" data-pswp-height="1075px">
                                                <img class="tf-image-zoom lazyload" data-zoom="{{asset('storage/photos/'.$productImage->path)}}"
                                                     data-src="{{asset('storage/photos/'.$productImage->path)}}" src="{{asset('storage/photos/'.$productImage->path)}}" alt="">
                                            </a>
                                        </div>
                                        @endforeach
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <div class="tf-model-viewer">
                                                    <model-viewer
                                                        reveal="auto"
                                                        toggleable="true"
                                                        data-model-id="36168614805808"
                                                        src="{{asset('storage/photos/'.$product->images[0]->path)}}"
                                                        camera-controls="true"
                                                        data-shopify-feature="1.12"
                                                        alt="آلیس مینی - رز گرد و خاکی"
                                                        poster="{{asset('storage/photos/'.$product->images[0]->path)}}"
                                                        class="tf-model-viewer-ui disabled"
                                                        tabindex="1"
                                                        data-js-focus-visible=""
                                                        ar-status="not-presenting">
                                                    </model-viewer>
                                                    <div class="tf-model-viewer-ui-button">
                                                        <div class="wrap-btn-viewer">
                                                            <i class="icon-btn3d"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            @foreach($product->images as $productImage)
                                        <div class="swiper-slide">
                                            <a href="{{asset('storage/photos/'.$productImage->path)}}" target="_blank" class="item"
                                               data-pswp-width="770px" data-pswp-height="1075px">
                                                <img class="tf-image-zoom lazyload"
                                                     data-zoom="{{asset('storage/photos/'.$productImage->path)}}"
                                                     data-src="{{asset('storage/photos/'.$productImage->path)}}" src="{{asset('storage/photos/'.$productImage->path)}}" alt="">
                                            </a>
                                        </div>
                                            @endforeach
                                    </div>
                                    <div class="swiper-button-next button-style-arrow thumbs-next"></div>
                                    <div class="swiper-button-prev button-style-arrow thumbs-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tf-product-info-wrap position-relative">
                            <div class="tf-zoom-main"></div>
                            <div class="tf-product-info-list other-image-zoom">
                                <div class="tf-product-info-title">
                                    <h5>{{$product->title}}</h5>
                                </div>
                                <div class="tf-product-info-price">
                                    @if($product->discount_price!=null)
                                    <div class="compare-at-price">{{$product->price}}<toman> تومان </toman></div>
                                    <div class="price-on-sale">{{$product->discount_price}}<toman> تومان </toman></div>
                                    <div class="badges-on-sale"><span>{{ceil(100-(($product->discount_price*100)/$product->price))}}</span>% تخفیف</div>
                                    @else
                                        <div class="price-on-sale">{{$product->price}}<toman> تومان </toman></div>
                                        @endif
                                </div>
                                <div class="tf-product-info-buy-button">
                                    <form class="">
                                        <a href="{{route('cart.add',['id'=>$product->id])}}" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn "><span>افزودن به سبد خرید</span><span class="tf-qty-price">@if($product->discount_price!=null){{$product->discount_price}}@else{{$product->price}}@endif<toman> تومان </toman></span></a>
                                    </form>
                                </div>
                                <div class="tf-product-info-extra-link">
                                    <a href="#ask_question" data-bs-toggle="modal" class="tf-product-extra-icon">
                                        <div class="icon">
                                            <i class="icon-question"></i>
                                        </div>
                                        <div class="text fw-6">یه سوال بپرس</div>
                                    </a>
                                    <a href="#delivery_return" data-bs-toggle="modal" class="tf-product-extra-icon">
                                        <div class="icon">
                                            <svg class="d-inline-block" xmlns="http://www.w3.org/1390/svg" width="22" height="18" viewBox="0 0 22 18" fill="currentColor"><path d="M21.7872 10.4724C21.7872 9.73685 21.5432 9.00864 21.1002 8.4217L18.7221 5.27043C18.2421 4.63481 17.4804 4.25532 16.684 4.25532H14.9787V2.54885C14.9787 1.14111 13.8334 0 12.4255 0H9.95745V1.69779H12.4255C12.8948 1.69779 13.2766 2.07962 13.2766 2.54885V14.5957H8.15145C7.80021 13.6052 6.85421 12.8936 5.74468 12.8936C4.63515 12.8936 3.68915 13.6052 3.33792 14.5957H2.55319C2.08396 14.5957 1.70213 14.2139 1.70213 13.7447V2.54885C1.70213 2.07962 2.08396 1.69779 2.55319 1.69779H9.95745V0H2.55319C1.14528 0 0 1.14111 0 2.54885V13.7447C0 15.1526 1.14528 16.2979 2.55319 16.2979H3.33792C3.68915 17.2884 4.63515 18 5.74468 18C6.85421 18 7.80021 17.2884 8.15145 16.2979H13.423C13.7742 17.2884 14.7202 18 15.8297 18C16.9393 18 17.8853 17.2884 18.2365 16.2979H21.7872V10.4724ZM16.684 5.95745C16.9494 5.95745 17.2034 6.08396 17.3634 6.29574L19.5166 9.14894H14.9787V5.95745H16.684ZM5.74468 16.2979C5.27545 16.2979 4.89362 15.916 4.89362 15.4468C4.89362 14.9776 5.27545 14.5957 5.74468 14.5957C6.21392 14.5957 6.59575 14.9776 6.59575 15.4468C6.59575 15.916 6.21392 16.2979 5.74468 16.2979ZM15.8298 16.2979C15.3606 16.2979 14.9787 15.916 14.9787 15.4468C14.9787 14.9776 15.3606 14.5957 15.8298 14.5957C16.299 14.5957 16.6809 14.9776 16.6809 15.4468C16.6809 15.916 16.299 16.2979 15.8298 16.2979ZM18.2366 14.5957C17.8853 13.6052 16.9393 12.8936 15.8298 12.8936C15.5398 12.8935 15.252 12.943 14.9787 13.04V10.8511H20.0851V14.5957H18.2366Z"></path></svg>
                                        </div>
                                        <div class="text fw-6">تحویل و برگشت</div>
                                    </a>
                                    <a href="#share_social" data-bs-toggle="modal" class="tf-product-extra-icon">
                                        <div class="icon">
                                            <i class="icon-share"></i>
                                        </div>
                                        <div class="text fw-6">به اشتراک بگذارید</div>
                                    </a>
                                    <a href="#find_size" data-bs-toggle="modal" class="tf-product-extra-icon">
                                        <div class="icon">
                                            <i class="icon-sizes"></i>
                                        </div>
                                        <div class="text fw-6">راهنمای سایز</div>
                                    </a>
                                </div>
                                <div class="tf-product-info-delivery-return">
                                    <div class="row">
                                        <div class="col-xl-6 col-12">
                                            <div class="tf-product-delivery">
                                                <div class="icon">
                                                    <i class="icon-delivery-time"></i>
                                                </div>
                                                <p>تخمین زمان تحویل: <span class="fw-7">1-3روز</span> (بدون تعطیلی)،
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-12">
                                            <div class="tf-product-delivery mb-0">
                                                <div class="icon">
                                                    <i class="icon-return-order"></i>
                                                </div>
                                                <p>امکان عودت در صورت مغایرت کالا یا تغییر سایز</p>
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
        <div class="tf-sticky-btn-atc">
            <div class="container">
                <div class="tf-height-observer w-100 d-flex align-items-center">
                    <div class="tf-sticky-atc-product d-flex align-items-center">
                        <div class="tf-sticky-atc-img">
                            <img class="lazyloaded" data-src="{{asset('storage/photos/'.$product->images[0]->path)}}" alt="" src="{{asset('storage/photos/'.$product->images[0]->path)}}">
                        </div>
                        <div class="tf-sticky-atc-title fw-5 d-xl-block d-none">{{$product->title}}</div>
                    </div>
                    <div class="tf-sticky-atc-infos">
                        <form class="">
                            <div class="tf-sticky-atc-btns">
                                <a href="{{route('cart.add',['id'=>$product->id])}}" class="tf-btn btn-fill radius-3 justify-content-center fw-6 fs-14 flex-grow-1 animate-hover-btn "><span>اضافه به سبد خرید</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /default -->
    <!-- tabs -->
    <section class="flat-spacing-17 pt_0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="widget-tabs style-has-border">
                        <ul class="widget-menu-tab">
                            <li class="item-title active">
                                <span class="inner">توضیحات</span>
                            </li>
                            <li class="item-title">
                                <span class="inner">ویژگی ها</span>
                            </li>
                        </ul>
                        <div class="widget-content-tab">
                            <div class="widget-content-inner active">
                                <div class="">
                                    <p class="mb_30">
                                        {!! $product->long_description !!}
                                    </p>
                                </div>
                            </div>
                            <div class="widget-content-inner">
                                <table class="tf-pr-attrs">
                                    <tbody>
                                    @foreach($product->attributeValues as $attribute)
                                    <tr class="tf-attr-pa-color">
                                        <th class="tf-attr-label">{{$attribute->attributeGroup->title}}</th>
                                        <td class="tf-attr-value">
                                            <p>{{$attribute->title}}</p>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /tabs -->
    <!-- product -->
<section class="flat-spacing-5 pt_0 flat-seller">
    <div class="container">
        <div class="flat-title">
            <span class="title wow fadeInUp" data-wow-delay="0s">پرفروش ترین</span>
            <p class="sub-title wow fadeInUp" data-wow-delay="0s">جدیدترین سبک ها را بخرید: با جدیدترین محصولات ما آشنا باشید</p>
        </div>
        <div class="grid-layout loadmore-item wow fadeInUp" data-wow-delay="0s" data-grid="grid-4">
            @foreach($relatedProducts as $relatedProduct)
                <div class="card-product fl-item">
                    <div class="card-product-wrapper">
                        <a href="{{route('product.details',[$relatedProduct->id])}}" class="product-img">
                            <img class="lazyload img-product getsrc{{$relatedProduct->id}}"  data-src="{{asset('storage/photos/'.$relatedProduct->images[0]->path)}}" src="{{asset('storage/photos/'.$relatedProduct->images[0]->path)}}" alt="image-product">
                            <img class="lazyload img-hover" data-src="{{asset('storage/photos/'.$relatedProduct->images[0]->path)}}" src="{{asset('storage/photos/'.$relatedProduct->images[0]->path)}}" alt="image-product">
                        </a>
                        <div class="list-product-btn">
                            <a href="{{route('cart.add',['id'=>$relatedProduct->id])}}"  class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">افزودن به سبد خرید</span>
                            </a>
                            <a href="#" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">افزودن به لیست علاقه مندی</span>
                                <span class="icon icon-delete"></span>
                            </a>
                            <a href="#" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">افزودن به مقایسه</span>
                                <span class="icon icon-check"></span>
                            </a>

                            <a href="javascript:void(0)"  id="show-product" data-url="{{ route('products.quickView', $relatedProduct->id) }}" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">نمایش سریع</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="{{route('product.details',[$relatedProduct->id])}}" class="title link">{{$relatedProduct->title}}</a>
                        @if($relatedProduct->discount_price)
                            <span class="price"><strike>{{$relatedProduct->price}}<toman> تومان </toman></strike></span>
                            <span class="price">{{$relatedProduct->discount_price}}<toman> تومان </toman></span>
                        @else
                            <span class="price">{{$relatedProduct->price}}<toman> تومان </toman></span>
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
<!-- modal ask_question -->
<div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="ask_question">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">یه سوال بپرس</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="overflow-y-auto">
                <form class="">
                    <fieldset class="">
                        <label for="">نام *</label>
                        <input type="text" placeholder="" class="" name="text" tabindex="2" value=""
                               aria-required="true" required="">
                    </fieldset>
                    <fieldset class="">
                        <label for="">ایمیل *</label>
                        <input type="email" placeholder="" class="" name="text" tabindex="2" value=""
                               aria-required="true" required="">
                    </fieldset>
                    <fieldset class="">
                        <label for="">شماره تلفن</label>
                        <input type="number" placeholder="" class="" name="text" tabindex="2" value=""
                               aria-required="true" required="">
                    </fieldset>
                    <fieldset class="">
                        <label for="">پیام</label>
                        <textarea name="message" rows="4" placeholder="" class="" tabindex="2" aria-required="true"
                                  required=""></textarea>
                    </fieldset>
                    <button type="submit"
                            class="tf-btn w-100 btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn"><span>ارسال</span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /modal ask_question -->

<!-- modal delivery_return -->
<div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="delivery_return">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">حمل و نقل و تحویل</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="overflow-y-auto">
                <div class="tf-product-popup-delivery">
                    <div class="title">تحویل</div>
                    <p class="text-paragraph">کلیه سفارشات با تیپاکس ارسال می شوند.</p>
                    <p class="text-paragraph">برای سفارش های بالای 3,000,000 تومان همیشه ارسال رایگان است.</p>
                    <p class="text-paragraph">کلیه سفارشات با شماره رهگیری ارسال می شوند.</p>
                </div>
                <div class="tf-product-popup-delivery">
                    <div class="title">راهنما</div>
                    <p class="text-paragraph">اگر سؤال و/یا نگرانی دیگری دارید، با ما تماس بگیرید.</p>
                    <p class="text-paragraph">ایمیل: <a href="mailto:contact@domain.com"
                                                        aria-describedby="a11y-external-message"><span
                                class="__cf_email__">contact@domain.com</span></a></p>
                    <p class="text-paragraph mb-0">تلفن: +1 (23) 456 789</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /modal delivery_return -->
<!-- modal share social -->
<div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="share_social">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">به اشتراک بگذارید</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="overflow-y-auto">
                <ul class="tf-social-icon d-flex gap-10">
                    <li><a href="#" class="box-icon social-facebook bg_line"><i class="icon icon-fb"></i></a></li>
                    <li><a href="#" class="box-icon social-twiter bg_line"><i class="icon icon-Icon-x"></i></a></li>
                    <li><a href="#" class="box-icon social-instagram bg_line"><i class="icon icon-instagram"></i></a></li>
                    <li><a href="#" class="box-icon social-tiktok bg_line"><i class="icon icon-tiktok"></i></a></li>
                    <li><a href="#" class="box-icon social-pinterest bg_line"><i class="icon icon-pinterest-1"></i></a></li>
                </ul>
                <form class="form-share"  method="post" accept-charset="utf-8">
                    <fieldset>
                        <input type="text" value="{{'https://www.hermionstore.ir/'.route('product.details',['id'=>$relatedProduct->id])}}" tabindex="0" aria-required="true">
                    </fieldset>
                    <div class="button-submit">
                        <button class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn" type="button">کپی</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /modal share social -->

<!-- gotop -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
    </svg>
</div>
<!-- /gotop -->
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
                        <img class="sizechart lazyload" data-src="images/shop/products/size_chart2.jpg" src="images/shop/products/size_chart2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /modal find_size -->

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
