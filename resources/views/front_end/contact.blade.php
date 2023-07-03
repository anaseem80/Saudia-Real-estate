@extends('layouts.web.master_web')









@section('css')

@section('title')
    تواصل معنا
@stop
@endsection











@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url(https://wallpapercave.com/wp/wp4110640.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>تواصل معنا</h1>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- contact-info-section -->
<section class="contact-info-section sec-pad centred">
    <div class="auto-container">
        <div class="sec-title">
            <h5>تواصل معنا</h5>
            <h2>ابقى على تواصل</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-32"></i></div>
                        <h4>البريد الإلكتروني</h4>
                        <p><a href="tel:+23055873407">{{ $setting->email }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-33"></i></div>
                        <h4>رقم الهاتف</h4>
                        <p><a href="tel:+23055873407">{{ $setting->company_phone }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-34"></i></div>
                        <h4>المقر الرئيسي</h4>
                        <p><a href="tel:+23055873407">{{ $setting->company_address }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-info-section end -->


<!-- contact-section -->
<section class="contact-section bg-color-1">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                <div class="google-map-area">
                    <div class="google-map" id="contact-google-map" data-map-lat="40.712776" data-map-lng="-74.005974"
                        data-icon-path="assets/images/icons/map-marker.png"
                        data-map-title="Brooklyn, New York, United Kingdom" data-map-zoom="12"
                        data-markers='{
                                    "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                }'>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title text-right">
                        <h5>تواصل</h5>
                        <h2>تواصل معنا</h2>
                    </div>
                    <div class="form-inner text-right">
                        <form method="post" action="sendemail.php" id="contact-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="الأسم" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="البريد الإلكتروني" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="رقم الهاتف" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="العنوان" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="الرسالة"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn btn-one" type="submit" name="submit-form">إرسال</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->


<!-- subscribe-section -->
<section class="subscribe-section bg-color-3">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                <div class="text">
                    <p class="text-right"><span>إشترك</span></p>
                    <h2>اشترك في النشرة الإخبارية لدينا للحصول على آخر الأخبار والعروض.</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                <div class="form-inner">
                    <form action="contact.html" method="post" class="subscribe-form">
                        <div class="form-group">
                            <button type="submit">إشترك الأن</button>
                            <input type="email" name="email" placeholder="البريد الإلكتروني" required="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe-section end -->
@endsection


















@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="{{ URL::asset('assets/js_web/gmaps.js') }}"></script>
<script src="{{ URL::asset('assets/js_web/map-helper.js') }}"></script>
@endsection
