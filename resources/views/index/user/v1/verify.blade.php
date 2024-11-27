@extends('template.user.v1.layout')
@section('content')
    <!-- page-title -->
    <div class="tf-page-title style-2">
        <div class="container-full">
            <div class="heading text-center">وارد شوید</div>
        </div>
    </div>
    <!-- /page-title -->
    <section class="flat-spacing-10">
        <div class="container">
            <div class="form-register-wrap">
                <div class="flat-title align-items-start gap-0 mb_30 px-0">
                    <h5 class="mb_18">ورود</h5>
                    <p class="text_black-2">برای دسترسی به تاریخچه فعالیت های خود وارد شوید</p>
                </div>
                <div>
                    <form class="" id="login-form" action="{{ route('doVerify') }}" method="post" accept-charset="utf-8" data-mailchimp="true">
                        @csrf
                        <div class="tf-field style-1 mb_15">
                            <input class="tf-field-input tf-input" placeholder="09121234567" type="text" id="property3" name="code">
                            <label class="tf-field-label fw-4 text_black-2" for="property3">کدتایید *</label>
                        </div>
                        <div class="">
                            <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">تایید</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
