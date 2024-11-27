@extends('template.user.v1.layout')
@section('content')
    <!-- page-title -->
    <div class="tf-page-title">
        <div class="container-full">
            <div class="heading text-center">سفارشات من</div>
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
                        <li><span class="my-account-nav-item active">سفارشات</span></li>
                        <li><a href="{{route('addresses.index')}}" class="my-account-nav-item">آدرس ها</a></li>
                        <li><a href="{{route('addresses.create')}}" class="my-account-nav-item">افزودن آدرس </a></li>
                        <li><a href="my-account-edit.html" class="my-account-nav-item">جزئیات حساب</a></li>
                        <li><a href="#" class="my-account-nav-item">فهرست علاقه مندی ها</a></li>
                        <li><a href="{{route('user.logout')}}" class="my-account-nav-item">خروج از سیستم</a></li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="my-account-content account-order">
                        <div class="wrap-account-order">
                            <table>
                                <thead>
                                <tr>
                                    <th class="fw-6">سفارش</th>
                                    <th class="fw-6">تاریخ</th>
                                    <th class="fw-6">وضعیت</th>
                                    <th class="fw-6">مجموع</th>
                                    <th class="fw-6">عملکردها</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr class="tf-order-item">
                                        <td>
                                            {{$order->code}}
                                        </td>
                                        <td>
                                            1 آذر 1403
                                        </td>
                                        <td>
                                            {{$order->status}}
                                        </td>
                                        <td>
                                            {{$order->price}} تومان برای {{$order->quntity}} مورد
                                        </td>
                                        <td>
                                            <a href="#" class="tf-btn btn-fill animate-hover-btn rounded-0 justify-content-center">
                                                <span>مشاهده</span>
                                            </a>
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
    </section>
    <!-- page-cart -->
@endsection
