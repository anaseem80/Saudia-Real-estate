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

        .xcenter {
            align-content: center color: #666;
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
            <h1>معلومات عنا</h1>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- about-section -->
<section class="about-section sec-pad text-right">
    <p class="xcenter text-center">{{ $setting->about_page }}</p>
</section>
<!-- about-section end -->
<!-- feature-style-three -->
<section class="feature-style-three centred pb-110">
    <div class="auto-container">
        <div class="sec-title">
            <h5>خدماتنا</h5>
            <h2>الخدمات التي نقدمها</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-1"></i></div>
                        <h4>سمعة ممتازة</h4>
                        <p>هؤلاء الوكلاء المحليون هم الشركاء المثاليين لمساعدتك في شراء أو بيع العقارات.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-26"></i></div>
                        <h4>أفضل الوكلاء المحليين</h4>
                        <p>وكلاء العقارات ذوو سمعة ممتازة هم الأفضل في صناعة العقارات.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-21"></i></div>
                        <h4>خدمة شخصية</h4>
                        <p>سواء كنت تبحث عن منزل أو شقة أو عقار تجاري، يقومون بتوفير الاستشارة والمشورة المهنية وترتيب
                            المعاينات.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-style-three end -->


<!-- cta-section -->
<section class="cta-section alternate-2 pb-240 centred"
    style="background-image: url(https://wallpapercave.com/wp/wp4110645.jpg);">
    <div class="auto-container">
        <div class="inner-box clearfix">
            <div class="text">
                <h2>تتطلع لشراء عقار جديد أو<br />بيع واحد موجود؟</h2>
            </div>
            <div class="btn-box">
                <a href="property-details.html" class="theme-btn btn-three">تأجير عقارات</a>
                <a href="index.html" class="theme-btn btn-one">بيع عقارات</a>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->
@endsection
@section('js')
@endsection
