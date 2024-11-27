@extends('template.user.v1.layout')
@section('content')
    <!-- page-title -->
    <div class="tf-page-title">
        <div class="container-full">
            <div class="heading text-center">آدرس ها</div>
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
                        <li><span class="my-account-nav-item active">آدرس ها</span></li>
                        <li><a href="{{route('addresses.create')}}" class="my-account-nav-item">افزودن آدرس</a></li>
                        <li><a href="my-account-edit.html" class="my-account-nav-item">جزئیات حساب</a></li>
                        <li><a href="#" class="my-account-nav-item">فهرست علاقه مندی ها</a></li>
                        <li><a href="{{route('user.logout')}}" class="my-account-nav-item">خروج از سیستم</a></li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="my-account-content account-address">
                        <div class="">
                            @foreach($addresses as $address)
                                <div>
                                    <h6 class="mb_20">{{$address->title}}</h6>
                                    <p>شهر: {{$address->city->name}}</p>
                                    <p>استان: {{$address->province->name}}</p>
                                    <p>آدرس: {{$address->body}}</p>
                                    <p class="mb_10">تلفن:{{$address->phone}}</p>
                                    <div class="d-flex gap-10">
                                        <a href="{{route('addresses.edit',$address->id)}}" class="tf-btn btn-fill animate-hover-btn rounded-0 justify-content-center">
                                            <span>ویرایش</span>
                                        </a>
                                        <a href="{{route('address.delete',$address->id)}}" class="tf-btn btn-outline animate-hover-btn rounded-0 justify-content-center">
                                            <span>حذف</span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-cart -->
@endsection
