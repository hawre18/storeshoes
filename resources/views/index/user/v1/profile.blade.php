@extends('template.user.v1.layout')
@section('content')
<div id="wrapper">
    <!-- page-title -->
    <div class="tf-page-title">
        <div class="container-full">
            <div class="heading text-center">اکانت من</div>
        </div>
    </div>
    <!-- /page-title -->

    <!-- page-cart -->
    <section class="flat-spacing-11">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="my-account-nav">
                        <li><span class="my-account-nav-item active">داشبورد</span></li>
                        <li><a href="{{route('profile.orders')}}" class="my-account-nav-item">سفارشات</a></li>
                        <li><a href="{{route('addresses.index')}}" class="my-account-nav-item">آدرس ها</a></li>
                        <li><a href="{{route('addresses.create')}}" class="my-account-nav-item">افزودن آدرس</a></li>
                        <li><a href="my-account-edit.html" class="my-account-nav-item">جزئیات حساب</a></li>
                        <li><a href="#" class="my-account-nav-item">فهرست علاقه مندی ها</a></li>
                        <li><a href="{{route('user.logout')}}" class="my-account-nav-item">خروج از سیستم</a></li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="my-account-content account-dashboard">
                        <div class="mb_60">
                            <h5 class="fw-5 mb_20">سلام {{{Auth::user()->name}}}</h5>
                            <p>
                                از داشبورد حساب خود می توانید <a class="text_primary" href="my-account-orders.html">سفارشات اخیر</a>خود را مدیریت کنید ، همچنین میتوانید <a class="text_primary" href="{{route('addresses.index')}}">آدرس‌های ارسال و صورت‌حساب</a> و <a class="text_primary" href="my-account-edit.html">گذرواژه و جزئیات حساب خود را ویرایش کنید</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-cart -->
</div>

@endsection
