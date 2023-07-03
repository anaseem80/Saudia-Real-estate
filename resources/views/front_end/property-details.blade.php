@extends('layouts.web.master_web')


@section('css')

@section('title')
    عقار ابو ظبي
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
                    <h1>عقار ابو ظبي</h1>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- property-details -->
        <section class="property-details property-details-one">
            <div class="auto-container">
                <div class="top-details clearfix">
                    <div class="left-column pull-right clearfix">
                        <h3>عقار في ابو ظبي</h3>
                        <div class="author-info clearfix">
                            <div class="author-box pull-right">
                                <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                <h6>عبدالله راشد</h6>
                            </div>
                            <ul class="rating clearfix pull-left">
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-40"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-column pull-left clearfix">
                        <div class="price-inner clearfix">
                            <ul class="category clearfix pull-left">
                                <li><a href="property-details.html">مبني</a></li>
                                <li><a href="property-details.html">للبيع</a></li>
                            </ul>
                            <div class="price-box pull-right">
                                <h3>30,000.00 ريال سعودي</h3>
                            </div>
                        </div>
                        <ul class="other-option pull-left clearfix">
                            <li><a href="property-details.html"><i class="icon-37"></i></a></li>
                            <li><a href="property-details.html"><i class="icon-38"></i></a></li>
                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="property-sidebar default-sidebar">
                            <div class="author-widget sidebar-widget">
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/author-1.jpg" alt=""></figure>
                                    <div class="inner">
                                        <h4>عبدالله راشد</h4>
                                        <ul class="info clearfix">
                                            <li><i class="fas fa-map-marker-alt"></i>ابو ظبي, بجانب مطعم كنتاكي</li>
                                            <li><i class="fas fa-phone"></i><a href="tel:03030571965">+996 516189498</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-inner">
                                    <form action="property-details.html" method="post" class="default-form">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="أسمك" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="البريد الإلكتروني" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="رقم الهاتف" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="الرسالة"></textarea>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">إرسال</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="calculator-widget sidebar-widget">
                                <div class="calculate-inner">
                                    <div class="widget-title text-right">
                                        <h4>آلة حساب الرهن العقاري</h4>
                                    </div>
                                    <form method="post" action="mortgage-calculator.html" class="default-form">
                                        <div class="form-group">
                                            <i class="fas fa-dollar-sign"></i>
                                            <input type="number" name="total_amount" placeholder="المبلغ الإجمالي">
                                        </div>
                                        <div class="form-group">
                                            <i class="fas fa-dollar-sign"></i>
                                            <input type="number" name="down_payment" placeholder="دفعة مبدئية">
                                        </div>
                                        <div class="form-group">
                                            <i class="fas fa-percent"></i>
                                            <input type="number" name="interest_rate" placeholder="سعر الفائدة">
                                        </div>
                                        <div class="form-group">
                                            <i class="far fa-calendar-alt"></i>
                                            <input type="number" name="loan" placeholder="شروط القرض (سنوات)">
                                        </div>
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="شهري">شهري</option>
                                                   <option value="1">سنوي</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">احسب الآن</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-details-content">
                            <div class="carousel-inner">
                                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none" dir="ltr">
                                    <figure class="image-box"><img src="https://wallpapercave.com/wp/wp4110640.jpg" alt=""></figure>
                                    <figure class="image-box"><img src="https://wallpapercave.com/wp/wp4110640.jpg" alt=""></figure>
                                    <figure class="image-box"><img src="https://wallpapercave.com/wp/wp4110640.jpg" alt=""></figure>
                                </div>
                            </div>
                            <div class="discription-box content-widget">
                                <div class="title-box">
                                    <h4>وصف العقار</h4>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud exercitation laboris nisi ut aliquip ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat</p>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium totam rem aperiam.</p>
                                </div>
                            </div>
                            <div class="details-box content-widget">
                                <div class="title-box">
                                    <h4>تفاصيل العقار</h4>
                                </div>
                                <ul class="list clearfix">
                                    <li>معرف العقار: <span>ZOP251C</span></li>
                                    <li>الغرف: <span>06</span></li>
                                    <li>حجم المرآب: <span>200 Sq Ft</span></li>
                                    <li>السعر: <span>$30,000</span></li>
                                    <li>غرف النوم: <span>04</span></li>
                                    <li>بنيت عام: <span>01 April, 2019</span></li>
                                    <li>نوع الملكية: <span>عقار</span></li>
                                    <li>الحمامات: <span>03</span></li>
                                    <li>حالة العقار: <span>للبيع</span></li>
                                    <li>مساحة العقار: <span>200 متر</span></li>
                                    <li>الجراج: <span>01</span></li>
                                </ul>
                            </div>
                            {{-- <div class="amenities-box content-widget">
                                <div class="title-box">
                                    <h4>Amenities</h4>
                                </div>
                                <ul class="list clearfix">
                                    <li>Air Conditioning</li>
                                    <li>Cleaning Service</li>
                                    <li>Dishwasher</li>
                                    <li>Hardwood Flows</li>
                                    <li>Swimming Pool</li>
                                    <li>Outdoor Shower</li>
                                    <li>Microwave</li>
                                    <li>Pet Friendly</li>
                                    <li>Basketball Court</li>
                                    <li>Refrigerator</li>
                                    <li>Gym</li>
                                </ul>
                            </div> --}}
                            <div class="floorplan-inner content-widget">
                                <div class="title-box">
                                    <h4>مخطط الطابق</h4>
                                </div>
                                <ul class="accordion-box">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h5>الدور الأول</h5>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content-box">
                                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem accusa dolore mque laudant.</p>
                                                <figure class="image-box">
                                                    <img src="assets/images/resource/floor-1.png" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h5>الدور الثاني</h5>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content-box">
                                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem accusa dolore mque laudant.</p>
                                                <figure class="image-box">
                                                    <img src="assets/images/resource/floor-1.png" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                         <div class="acc-btn">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h5>الدور الثالث</h5>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content-box">
                                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem accusa dolore mque laudant.</p>
                                                <figure class="image-box">
                                                    <img src="assets/images/resource/floor-1.png" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="location-box content-widget">
                                <div class="title-box">
                                    <h4>العنوان</h4>
                                </div>
                                <ul class="info clearfix">
                                    <li>ابو ظبي <span>:العنوان</span></li>
                                    <li>السعودية <span>:الدولة</span></li>
                                    <li>ابو ظبي <span>:ولاية / مقاطعة</span></li>
                                    <li>حي ابو ظبي<span>:حيّ</span></li>
                                    <li>2403<span>:الرمز البريدي</span></li>
                                    <li>ابو ظبي<span>:المدينة</span></li>
                                </ul>
                                <div class="google-map-area">
                                    <div 
                                        class="google-map" 
                                        id="contact-google-map" 
                                        data-map-lat="40.712776" 
                                        data-map-lng="-74.005974" 
                                        data-icon-path="assets/images/icons/map-marker.png"  
                                        data-map-title="Brooklyn, New York, United Kingdom" 
                                        data-map-zoom="12" 
                                        data-markers='{
                                            "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                        }'>

                                    </div>
                                </div>
                            </div>
                            {{-- <div class="nearby-box content-widget">
                                <div class="title-box">
                                    <h4>What’s Nearby?</h4>
                                </div>
                                <div class="inner-box">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-book-reader"></i></div>
                                        <div class="inner">
                                            <h5>Education:</h5>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>Western Reserve University <span>(2.10 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>Georgia Institute of Technology <span>(1.42 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>Harvey Mudd College <span>(2.10 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-coffee"></i></div>
                                        <div class="inner">
                                            <h5>Restaurant:</h5>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>SC Ranch Market <span>(3.10 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>Chill On The Hill <span>(2.42 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>Gordon Ramsay Hell's Kitchen <span>(1.22 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-capsules"></i></div>
                                        <div class="inner">
                                            <h5>Health & Medical:</h5>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>North Star Medical Clinic <span> (2.10 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>Clairvoyant Healing <span>(1.42 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="statistics-box content-widget">
                                <div class="title-box">
                                    <h4>Page Statistics</h4>
                                </div>
                                <figure class="image-box">
                                    <a href="assets/images/resource/statistics-1.png" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/resource/statistics-1.png" alt=""></a>
                                </figure>
                            </div> --}}
                            <div class="schedule-box content-widget">
                                <div class="title-box">
                                    <h4>جدولة العقار</h4>
                                </div>
                                <div class="form-inner">
                                    <form action="property-details.html" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <i class="far fa-calendar-alt"></i>
                                                    <input type="text" name="date" placeholder="ميعادة الجدولة" id="datepicker">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <i class="far fa-clock"></i>
                                                    <input type="text" name="time" placeholder="الوقت">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="الاسم" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="البريد الإلكتروني" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <input type="tel" name="phone" placeholder="رقم الهاتف" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <textarea name="message" placeholder="الرسالة"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group message-btn">
                                                    <button type="submit" class="theme-btn btn-one">إرسال</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="similar-content">
                    <div class="title text-center">
                        <h2>عقارات مشابهة</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-6 mt-3 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="https://wallpapercave.com/wp/wp4012680.jpg" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">متميز</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-info clearfix">
                                            <div class="buy-btn pull-left"><a href="property-details.html">للبيع</a></div>
                                            <div class="author pull-right">
                                                <h6>مايكل</h6>
                                                <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                        <div class="title-text text-right"><h4><a href="property-details.html">فيلا في الرياض</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-right">
                                                <h6 class="text-right">يبدأ من</h6>
                                                <h4>SAR 30,000.00</h4>
                                            </div>
                                            <ul class="other-option pull-left clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                        <p class="text-right">لوريم ابيسيوم</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 غرف</li>
                                            <li><i class="icon-15"></i>2 حمام</li>
                                            <li><i class="icon-16"></i>600 متر</li>
                                        </ul>
                                        <div class="btn-box text-right"><a href="property-details.html" class="theme-btn btn-two">مشاهدة التفاصيل</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mt-3 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="https://wallpapercave.com/wp/wp4012680.jpg" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">متميز</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-info clearfix">
                                            <div class="buy-btn pull-left"><a href="property-details.html">للبيع</a></div>
                                            <div class="author pull-right">
                                                <h6>مايكل</h6>
                                                <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                        <div class="title-text text-right"><h4><a href="property-details.html">فيلا في الرياض</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-right">
                                                <h6 class="text-right">يبدأ من</h6>
                                                <h4>SAR 30,000.00</h4>
                                            </div>
                                            <ul class="other-option pull-left clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                        <p class="text-right">لوريم ابيسيوم</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 غرف</li>
                                            <li><i class="icon-15"></i>2 حمام</li>
                                            <li><i class="icon-16"></i>600 متر</li>
                                        </ul>
                                        <div class="btn-box text-right"><a href="property-details.html" class="theme-btn btn-two">مشاهدة التفاصيل</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mt-3 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="https://wallpapercave.com/wp/wp4012680.jpg" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">متميز</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-info clearfix">
                                            <div class="buy-btn pull-left"><a href="property-details.html">للبيع</a></div>
                                            <div class="author pull-right">
                                                <h6>مايكل</h6>
                                                <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                        <div class="title-text text-right"><h4><a href="property-details.html">فيلا في الرياض</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-right">
                                                <h6 class="text-right">يبدأ من</h6>
                                                <h4>SAR 30,000.00</h4>
                                            </div>
                                            <ul class="other-option pull-left clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                        <p class="text-right">لوريم ابيسيوم</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 غرف</li>
                                            <li><i class="icon-15"></i>2 حمام</li>
                                            <li><i class="icon-16"></i>600 متر</li>
                                        </ul>
                                        <div class="btn-box text-right"><a href="property-details.html" class="theme-btn btn-two">مشاهدة التفاصيل</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- property-details end -->@endsection



@section('js')
<script src="{{URL::asset('assets/js_web/bxslider.js')}}"></script>
<script src="{{URL::asset('assets/js_web/product-filter.js')}}"></script>
<script src="{{URL::asset('assets/js_web/timePicker.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="{{URL::asset('assets/js_web/gmaps.js')}}"></script>
<script src="{{URL::asset('assets/js_web/map-helper.js')}}"></script>
@endsection