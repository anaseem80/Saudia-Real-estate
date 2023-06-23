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


        
        <section class="privacy-section sec-pad text-right">
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