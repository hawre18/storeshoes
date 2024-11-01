<!DOCTYPE>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8" />
    <title>مدیریت</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta content="Tailwind Admin & Dashboard Template" name="description"/>
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/admin/v1/images/favicon.ico')}}" />
    <!-- choices css -->
    <link href="{{asset('assets/admin/v1/libs/choices.js/public/assets/styles/choices.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- color picker css -->
    <link rel="stylesheet" href="{{asset('assets/admin/v1/libs/%40simonwep/pickr/themes/classic.min.css')}}"/> <!-- 'classic' theme -->
    <link rel="stylesheet" href="{{asset('assets/admin/v1/libs/%40simonwep/pickr/themes/monolith.min.css')}}"/> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="{{asset('assets/admin/v1/libs/%40simonwep/pickr/themes/nano.min.css')}}"/> <!-- 'nano' theme -->
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{asset('assets/admin/v1/libs/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/v1/css/icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/v1/css/tailwind.css')}}"/>
    @yield('styles')
</head>

<body data-mode="light" data-sidebar-size="lg">

<!-- leftbar-tab-menu -->
<nav class="border-b border-slate-100 dark:bg-zinc-800 print:hidden flex items-center fixed top-0 right-0 left-0 bg-white z-10 dark:border-zinc-700">

    <div class="flex items-center justify-between w-full">
        <div class="topbar-brand flex items-center">
            <div class="navbar-brand flex items-center justify-between shrink px-5 h-[70px] border-r bg-slate-50 border-r-gray-50 dark:border-zinc-700 dark:bg-zinc-800">
                <a href="#" class="flex items-center font-bold text-lg  dark:text-white">
                    <img src="{{asset('assets/admin/v1/images/logo-sm.svg')}}" alt="" class="ltr:mr-2 rtl:ml-2 inline-block mt-1 h-6" />
                    <span class="hidden xl:block align-middle">مدیریت فروشگاه</span>
                </a>
            </div>
            <button type="button" class="text-gray-600 dark:text-white h-[70px] ltr:-ml-10 ltr:mr-6 rtl:-mr-10 rtl:ml-10 vertical-menu-btn" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>
        <div class="flex items-center">
            <div>
                <button type="button" class="light-dark-mode text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 hidden sm:block ">
                    <i data-feather="moon" class="h-5 w-5 block dark:hidden"></i>
                    <i data-feather="sun" class="h-5 w-5 hidden dark:block"></i>
                </button>
            </div>
            <div>
                <div class="dropdown relative ">
                    <div class="relative">
                        <button type="button" class="btn border-0 h-[70px] dropdown-toggle px-4 text-gray-500 dark:text-gray-100" aria-expanded="false" data-dropdown-toggle="notification">
                            <i data-feather="bell" class="h-5 w-5"></i>
                        </button>
                        <span class="absolute text-xs px-1.5 bg-red-500 text-white font-medium rounded-full left-6 top-2.5">5</span>
                    </div>
                    <div class="dropdown-menu absolute z-50 hidden w-80 list-none rounded bg-white shadow dark:bg-zinc-800 " id="notification">
                        <div class="border border-gray-50 dark:border-gray-700 rounded" aria-labelledby="notification">
                            <div class="grid grid-cols-12 p-4">
                                <div class="col-span-6">
                                    <h6 class="m-0 text-gray-700 dark:text-gray-100"> اطلاعیه‌ها </h6>
                                </div>
                                <div class="col-span-6 justify-self-end">
                                    <a href="#!" class="text-xs underline dark:text-gray-400"> خوانده نشده (3)</a>
                                </div>
                            </div>
                            <div class="max-h-56" data-simplebar>
                                <div>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                            <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                <img src="{{asset('assets/admin/v1/images/users/avatar-3.jpg')}}" class="rounded-full h-8 w-8" alt="user-pic">

                                            </div>
                                            <div class="flex-grow">
                                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">جیمز لمایر</h6>
                                                <div class="text-13 text-gray-600">
                                                    <p class="mb-1 dark:text-gray-400"> به نظر می‌رسد زبان ساده شده انگلیسی باشد.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-400"></i> <span>1 ساعت پیش</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="p-1 border-t grid border-gray-50 dark:border-zinc-600 justify-items-center">
                                <a class="btn border-0 text-violet-500" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-left-circle mr-1"></i> <span>مشاهده بیشتر..</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <div class="dropdown relative ltr:mr-4 rtl:ml-4">
                    <button type="button" class="flex items-center px-4 py-5 border-x border-gray-50 bg-gray-50/30 dropdown-toggle dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img class="h-8 w-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2" src="{{asset('assets/admin/v1/images/users/avatar-1.jpg')}}" alt="Header Avatar">
                        <span class="fw-medium hidden xl:block">فرهاد باقری</span>
                        <i class="mdi mdi-chevron-down align-bottom hidden xl:block"></i>
                    </button>
                    <div class="dropdown-menu absolute top-0 ltr:-left-3 rtl:left-0 z-50 hidden w-40 list-none rounded bg-white shadow dark:bg-zinc-800" id="profile/log">
                        <div class="border border-gray-50 dark:border-zinc-600" aria-labelledby="navNotifications">
                            <div class="dropdown-item dark:text-gray-100">
                                <a class="px-3 py-2 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50" href="apps-contacts-profile.html">
                                    <i class="mdi mdi-face-man text-16 align-middle mr-1"></i> پروفایل
                                </a>
                            </div>
                            <hr class="border-gray-50 dark:border-gray-700">
                            <div class="dropdown-item dark:text-gray-100">
                                <a class="p-3 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50" href="#">
                                    <i class="mdi mdi-logout text-16 align-middle mr-1"></i> خروج
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu rtl:right-0 fixed ltr:left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">

    <div data-simplebar class="h-full">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default" data-key="t-menu">منو</li>

                <li>
                    <a href="index-2.html" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"> داشبورد</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps"> برنامه‌ها</span>
                    </a>
                    <ul>
                        <li>
                            <a href="app-calendar.html" class="pr-14 pl-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">تقویم</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pr-14 pl-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">ایمیل</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="apps-email-inbox.html" class="pr-[4.5rem] pl-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">صندوق ورودی</a>
                                </li>
                                <li>
                                    <a href="apps-email-read.html" class="pr-[4.5rem] pl-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">خواندن ایمیل</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
@yield('content')
<script src="{{asset('assets/admin/v1/libs/%40popperjs/core/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/admin/v1/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/admin/v1/libs/metismenujs/metismenujs.min.js')}}"></script>
<script src="{{asset('assets/admin/v1/libs/simplebar/simplebar.min.js')}}"></script>
<!-- choices js -->
<script src="{{asset('assets/admin/v1/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
<!-- color picker js -->
<script src="{{asset('assets/admin/v1/libs/%40simonwep/pickr/pickr.min.js')}}"></script>
<script src="{{asset('assets/admin/v1/libs/%40simonwep/pickr/pickr.es5.min.js')}}"></script>
<!-- datepicker js -->
<script src="{{asset('assets/admin/v1/js/jdate.min.js')}}"></script>
<script>window.Date = window.JDate;</script>
<script src="{{asset('assets/admin/v1/libs/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('assets/admin/v1/js/flatpicker_fa.js')}}"></script>
<!-- init js -->
<script src="{{asset('assets/admin/v1/js/pages/form-advanced.init.js')}}"></script>
@yield('scripts')

<script src="{{asset('assets/admin/v1/js/app.js')}}"></script>
</body>

</html>
