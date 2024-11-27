@extends('template.user.v1.layout')
@section('content')
    <!-- page-title -->
    <div class="tf-page-title">
        <div class="container-full">
            <div class="heading text-center">ویرایش آدرس </div>
        </div>
    </div>
    <!-- /page-title -->

    <!-- page-cart -->
    <section class="flat-spacing-11">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="my-account-nav">
                        <li><a href="{{route('user.profile')}}" class="my-account-nav-item ">داشبورد</a></li>
                        <li><a href="{{route('profile.orders')}}" class="my-account-nav-item">سفارشات</a></li>
                        <li><a href="{{route('addresses.index')}}" class="my-account-nav-item">آدرس ها</a></li>
                        <li><a href="{{route('addresses.create')}}" class="my-account-nav-item">افزودن آدرس </a></li>
                        <li><a href="my-account-address.html" class="my-account-nav-item">جزئیات حساب</a></li>
                        <li><a href="#" class="my-account-nav-item">فهرست علاقه مندی ها</a></li>
                        <li><a href="{{route('user.logout')}}" class="my-account-nav-item">خروج از سیستم</a></li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="my-account-content account-edit">
                        <div class="">
                            <form class="" id="form-password-change"  method="post" action="{{route('addresses.update',$address->id)}}">
                                {{csrf_field()}}
                                {{method_field('PATCH')}}
                                <div class="tf-field style-1 mb_15">
                                    <input class="tf-field-input tf-input" value="{{$address->title}}" type="text" id="property1" name="title">
                                    <label class="tf-field-label fw-4 text_black-2" for="property1">عنوان</label>
                                </div>
                                <div class="tf-field style-1 mb_15">
                                    <textarea class="tf-field-input tf-input" id="property2" name="body">{{$address->body}}</textarea>
                                    <label class="tf-field-label fw-4 text_black-2" for="property2">آدرس</label>
                                </div>
                                <select-city-component></select-city-component>
                                <div class="tf-field style-1 mb_30">
                                    <input class="tf-field-input tf-input" value="{{$address->phone}}" type="text" id="property5" name="phone">
                                    <label class="tf-field-label fw-4 text_black-2" for="property5">تلفن</label>
                                </div>
                                <div class="tf-field style-1 mb_30">
                                    <input class="tf-field-input tf-input" value="{{$address->postCode}}" type="text" id="property5" name="postCode">
                                    <label class="tf-field-label fw-4 text_black-2" for="property5">کدپستی</label>
                                </div>
                                <div class="mb_20">
                                    <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">ذخیره تغییرات</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-cart -->

@endsection


