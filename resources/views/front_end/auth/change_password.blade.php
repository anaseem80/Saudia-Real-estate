@extends('layouts.web.master_web')









@section('css')

@section('title')
    إعادة تعيين كلمة المرور
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
            <h1 class="m-0">إعادة تعيين كلمة المرور</h1>
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
                    <h5>إعادة تعيين كلمة المرور</h5>
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
                                <form action="signin.html" method="post" class="default-form">
                                    <div class="form-group">
                                        <label>كلمة المرور الجديدة</label>
                                        <input type="password" name="password" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>تأكيد كلمةالسر</label>
                                        <input type="text" name="repassword" required="">
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">تغيير كلمة المرور</button>
                                    </div>
                                </form>
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