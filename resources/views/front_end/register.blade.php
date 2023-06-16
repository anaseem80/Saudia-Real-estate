@extends('layouts.web.master_web')









@section('css')

@section('title')
    تسجيل جديد
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
            <h1 class="mb-0">تسجيل جديد</h1>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- ragister-section -->
<section class="ragister-section centred sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column m-auto">
                <div class="sec-title">
                    <h5>تسجيل جديد</h5>
                    <h2>تسجيل جديد مع عقارك</h2>
                </div>
                <div class="tabs-box">
                    {{-- <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons centred clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">Agent</li>
                            <li class="tab-btn" data-tab="#tab-2">User</li>
                        </ul>
                    </div> --}}
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                <h4>تسجيل جديد</h4>
                                <form action="signin.html" method="post" class="default-form">
                                    <div class="form-group">
                                        <label for="name">اسم المستخدم</label>
                                        <input type="text" name="name" id="name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">البريد الإلكتروني</label>
                                        <input type="email" id="email" name="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_type">نوع المعلن</label>
                                        <select name="user_type" id="user_type">
                                            <option value="office">مكتب</option>
                                            <option value="mediator">وسيط</option>
                                            <option value="owner">مالك</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="licence">رقم الرخصة</label>
                                        <input type="number" id="licence" name="licence" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="commercial">رقم السجل التجاري ( للمكاتب )</label>
                                        <input type="number" id="commercial" name="commercial" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="country">الدولة</label>
                                        <select name="country" id="country">
                                            <option value="EG">السعودية</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="city">المدينة</label>
                                        <select name="city" id="city">
                                            <option value="EG">الرياض</option>
                                            <option value="SA">جدة</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">رقم الهاتف</label>
                                        <div class="d-flex">
                                            <div class="w-100"><input type="number" id="phone" name="phone" required="" placeholder="0000000000"></div>
                                            <div class="mr-2"><input type="number" id="ccode" name="ccode" placeholder="+000" required=""></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone2">رقم هاتف إضافي</label>
                                        <div class="d-flex">
                                            <div class="w-100"><input type="number" id="phone2" name="phone2" required="" placeholder="0000000000"></div>
                                            <div class="mr-2"><input type="number" id="ccode" name="ccode" placeholder="+000" required=""></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>كلمة المرور</label>
                                        <input type="password" name="name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>تأكيد كلمة المرور</label>
                                        <input type="password" name="name" required="">
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">إنشاء الحساب</button>
                                    </div>
                                </form>
                                <div class="othre-text">
                                    <p>لديك حساب بالفعل؟ <a href="{{route('login')}}">تسجيل الدخول</a></p>
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