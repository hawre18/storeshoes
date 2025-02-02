@extends('template.user.v1.layout')
@section('content')
    <!-- page-title -->
    <div class="tf-page-title">
        <div class="container-full">
            <div class="heading text-center">تسویه حساب</div>
        </div>
    </div>
    <!-- /page-title -->

    <!-- page-cart -->
    <section class="flat-spacing-11">
        <div class="container">
            <div class="tf-page-cart-wrap layout-2">
                    <div class="tf-page-cart-item">
                        @if($addresses!=null)
                            @foreach($addresses as $address)
                                <br>
                                <form id="address" action="{{route('order.verify')}}" method="get">
                                    <input type="radio" name="address" value="{{$address->id}}" id="address-1" />{{$address->province['name']. ' '.$address->city['name']. ' '.$address->address}}
                                    <div class="pull-left"><button type="submit" class="btn btn-primary">تسویه حساب</button></div>
                                </form>
                            @endforeach
                        @else
                            @if(Auth::check())
                                <p>آدرسی موجود نیست لطفا ابتدا آدرس را در پروفایل خود ثبت کنید</p>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="address-1">انتخاب آدرس</label>
                                    <a class="btn btn-primary" href="{{route('address.create')}}">ثبت آدرس</a>
                                </div>
                            @else
                                <p>ابتدا وارد شوید</p>
                                <div class="form-group required">
                                    <a class="btn btn-primary" href="{{route('loginPhone')}}">ورود</a>
                                </div>
                            @endif
                        @endif
                    </div>
                <div class="tf-page-cart-footer">
                    <div class="tf-cart-footer-inner">
                        <h5 class="fw-5 mb_20">سفارش شما</h5>
                        <form class="tf-page-cart-checkout widget-wrap-checkout">
                            <ul class="wrap-checkout-product">
                                @foreach($cart->items as $product)
                                    <li class="checkout-product-item">
                                        <figure class="img-product">
                                            <img src="{{asset('storage/photos/'.$product['item']->images[0]->path)}}" alt="product">
                                            <span class="quantity">{{$product['qty']}}</span>
                                        </figure>
                                        <div class="content">
                                            <div class="info">
                                                <p class="name">{{$product['item']->title}}ه</p>
                                            </div>
                                            <span class="price">{{$product['item']->discount_price?$product['item']->discount_price:$product['item']->price}}<toman> تومان </toman></span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="coupon-box">
                                <form action="{{ route('coupon.add')}}" method="post">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" name="code" placeholder="کد تخفیف خود را در اینجا وارد کنید" class="form-control"/>
                                        <button type="submit" class="btn btn-primary">اعمال تخفیف</button>
                                    </div>
                                </form>
                            </div>
                            <div class="d-flex justify-content-between line pb_20">
                                <h6 class="fw-5">مجموع</h6>
                                <h6 class="total fw-5">{{Session::get('cart')->totalPurePrice}}<toman> تومان </toman></h6>
                            </div>
                            <div class="d-flex justify-content-between line pb_20">
                                <h6 class="fw-5">تخفیف</h6>
                                <h6 class="total fw-5">{{Session::get('cart')->totalDiscountPrice}}<toman> تومان </toman></h6>
                            </div>
                            <div class="d-flex justify-content-between line pb_20">
                                <h6 class="fw-5">هزینه ارسال</h6>
                                <h6 class="total fw-5">{{Session::get('cart')->shippingCost}}<toman> تومان </toman></h6>
                            </div>
                            <div class="d-flex justify-content-between line pb_20">
                                <h6 class="fw-5">مبلغ قابل پرداخت</h6>
                                <h6 class="total fw-5">{{Session::get('cart')->totalPrice}}<toman> تومان </toman></h6>
                            </div>
                            <div class="wd-check-payment">
                                <p class="text_black-2 mb_20">اطلاعات شخصی شما برای پردازش سفارش شما، پشتیبانی از تجربه شما در سراسر این وب سایت و برای اهداف دیگری که در ما توضیح داده شده است، استفاده خواهد شد <a href="privacy-policy.html" class="text-decoration-underline">سیاست حفظ حریم خصوصی</a>.</p>
                                <div class="box-checkbox fieldset-radio mb_20">
                                    <input type="checkbox" id="check-agree" class="tf-check">
                                    <label for="check-agree" class="text_black-2">من وب سایت را خوانده ام و با آن موافقم <a href="terms-conditions.html" class="text-decoration-underline">با شرایط و ضوابط</a>.</label>
                                </div>
                            </div>
                            <button class="tf-btn radius-3 btn-fill btn-icon animate-hover-btn justify-content-center">ثبت سفارش</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-cart -->
    @endsection
