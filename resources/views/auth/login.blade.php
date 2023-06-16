@extends('layouts.web.master_web')
@section('css')

@section('title')
    تسجيل دخول
@stop
@endsection


@section('content')
<!--Page Title-->
<section class="page-title-two bg-color-1 centred">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
    </div>
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1 class="m-0">تسجيل الدخول</h1>
            {{-- <ul class="bread-crumb clearfix">
                <li><a href="index.html">الرئيسة</a></li>
                <li>تسجيل الدخول</li>
            </ul> --}}
        </div>
    </div>
</section>
<!--End Page Title-->
<!-- ragister-section -->
<section class="ragister-section centred sec-pad rtl">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column m-auto">
                <div class="sec-title">
                    <h5>تسجيل الدخول</h5>
                </div>
                <div class="tabs-box">
                    {{-- <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons centred clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">Agent</li>
                            <li class="tab-btn" data-tab="#tab-2">User</li>
                        </ul>
                    </div> --}}
                    <div class="tabs-content">
                        <div class="tab active-tab">
                            <div class="inner-box">
                                <form method="POST" action="{{ route('login') }}" class="default-form">
                           
                                        @csrf
                                    <div class="form-group">
                                        <label>البريد الإلكتروني</label>
                                        <input type="email" name="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>كلمة المرور</label>
                                        <input type="password" name="password" required="">
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">تسجيل الدخول</button>
                                    </div>
                                            <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    {{-- <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif

                                     
                                    </div> --}}
                                </form>
                                <div class="othre-text d-flex justify-content-between">
                                    <p><a href="{{route('register')}}">تسجيل حساب جديد</a></p>
                                    <p><a href="{{route('password.request')}}">إسترجاع كلمة المرور</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ragister-section end -->
@endsection


















@section('js')



@endsection