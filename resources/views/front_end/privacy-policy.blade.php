@extends('layouts.web.master_web')









@section('css')
    <style>
        h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;
            text-align: justify;
        }

        .section {
            margin-bottom: 40px;
        }

        .section-title {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .section-content {
            color: #666;
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
@section('title')
    سياسة الخصوصية
@stop
@endsection











@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url(https://wallpapercave.com/wp/wp4110640.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>سياسة الخصوصية</h1>
        </div>
    </div>
</section>
<!--End Page Title-->


<section class="about-section sec-pad text-right">
    <p class="xcenter text-center">{{ $setting->terms }}</p>
</section>

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



@endsection
