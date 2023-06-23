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
                <h1>معلومات عنا</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- about-section -->
    <section class="about-section sec-pad text-right">
        <div class="container">
              <div class="section">
                <h2 class="section-title">جمع المعلومات واستخدامها</h2>
                <p class="section-content">نحترم خصوصيتك ونلتزم بحماية معلوماتك الشخصية. تحدد سياسة الخصوصية هذه أنواع المعلومات التي نجمعها وكيفية استخدامنا لها.</p>
              </div>
          
              <div class="section">
                <h2 class="section-title">جمع البيانات</h2>
                <p class="section-content">قد نقوم بجمع معلومات شخصية مثل الاسم وعنوان البريد الإلكتروني ورقم الهاتف عندما تقدمها لنا بإرادتك الحرة عبر نموذج الاتصال أو عند الاشتراك في النشرة الإخبارية الخاصة بنا.</p>
              </div>
          
              <div class="section">
                <h2 class="section-title">استخدام البيانات</h2>
                <p class="section-content">نستخدم المعلومات المجمعة للتواصل معك وتقديم الخدمات وتحسين موقعنا على الويب وإرسال رسائل ترويجية إليك إذا كنت قد قمت باختيار تلقيها. لا نبيع أو نشارك معلوماتك الشخصية مع أطراف ثالثة.</p>
              </div>
          
              <div class="section">
                <h2 class="section-title">أمان البيانات</h2>
                <p class="section-content">نتخذ الاحتياطات المعقولة لحماية معلوماتك الشخصية وضمان أمانها. ومع ذلك، لا يوجد أي طريقة للنقل عبر الإنترنت أو التخزين الإلكتروني تكون آمنة بنسبة 100%، ولا يمكننا ضمان الأمان المطلق.</p>
              </div>
          
              <div class="section">
                <h2 class="section-title">تغييرات على سياسة الخصوصية</h2>
                <p class="section-content">قد نقوم بتحديث سياسة الخصوصية من وقت لآخر. سيتم نشر أي تغييرات على هذه الصفحة، وسيتم تحديث التاريخ المعدل في الأعلى على النحو المناسب.</p>
              </div>
          
              <div class="section">
                <h2 class="section-title">اتصل بنا</h2>
                <p class="section-content">إذا كان لديك أي أسئلة أو استفسارات حول سياسة الخصوصية لدينا، يرجى التواصل معنا باستخدام المعلومات المتاحة في صفحة الاتصال بنا.</p>
              </div>
        </div>
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
                            <p>سواء كنت تبحث عن منزل أو شقة أو عقار تجاري، يقومون بتوفير الاستشارة والمشورة المهنية وترتيب المعاينات.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-style-three end -->


    <!-- cta-section -->
    <section class="cta-section alternate-2 pb-240 centred" style="background-image: url(https://wallpapercave.com/wp/wp4110645.jpg);">
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