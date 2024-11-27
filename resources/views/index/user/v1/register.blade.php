@extends('template.user.v1.layout')
@section('content')
    <!-- page-title -->
    <div class="tf-page-title style-2">
        <div class="container-full">
            <div class="heading text-center">ثبت نام</div>
        </div>
    </div>
    <!-- /page-title -->

    <section class="flat-spacing-10">
        <div class="container">
            <div class="form-register-wrap">
                <div class="flat-title align-items-start gap-0 mb_30 px-0">
                    <h5 class="mb_18">ثبت نام کنید</h5>
                    <p class="text_black-2">برای دسترسی به فروش زودهنگام به اضافه ورودی‌های جدید، گرایش‌ها و تبلیغات سفارشی ثبت‌نام کنید. برای انصراف، روی لغو اشتراک در ایمیل‌های ما کلیک کنید</p>
                </div>
                <div>
                    <form class="" id="register-form" action="{{ route('doRegister') }}" method="post" accept-charset="utf-8" data-mailchimp="true">
                        @csrf
                        <div class="tf-field style-1 mb_15">
                            <input class="tf-field-input tf-input" placeholder=" " type="text" id="property1" name="name">
                            <label class="tf-field-label fw-4 text_black-2" for="property1">نام</label>
                        </div>
                        <div class="tf-field style-1 mb_15">
                            <input class="tf-field-input tf-input" placeholder=" " type="text" id="property2" name="lName">
                            <label class="tf-field-label fw-4 text_black-2" for="property2">نام خانوادگی</label>
                        </div>
                        <div class="tf-field style-1 mb_15">
                            <input class="tf-field-input tf-input" placeholder=" " type="email" id="property3" name="email">
                            <label class="tf-field-label fw-4 text_black-2" for="property3">ایمیل</label>
                        </div>
                        <div class="tf-field style-1 mb_15">
                            <input class="tf-field-input tf-input" placeholder="09121234567" type="text" id="property4" name="phone">
                            <label class="tf-field-label fw-4 text_black-2" for="property4">تلفن همراه *</label>
                        </div>
                        <div class="tf-field style-1 mb_30">
                            <input class="tf-field-input tf-input" placeholder=" " type="password" id="property5" name="password">
                            <label class="tf-field-label fw-4 text_black-2" for="property5"> رمز عبور *</label>
                        </div>
                        <div class="mb_20">
                            <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">ثبت نام</button>
                        </div>
                        <div class="text-center">
                            <a href="login.html" class="tf-btn btn-line">از قبل حساب کاربری دارید؟ اینجا وارد شوید<i class="icon icon-arrow1-top-right"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
