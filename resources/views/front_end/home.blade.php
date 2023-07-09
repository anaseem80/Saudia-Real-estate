@extends('layouts.web.master_web')









@section('css')

@section('title')
    الرئيسية
@stop
@endsection











@section('content')
<!-- banner-section -->
<section class="banner-section" style="background-image: url(https://wallpapercave.com/wp/wp4110640.jpg);">
    <div class="auto-container">
        <div class="inner-container">
            <div class="content-box centred">
                <h2>خلق ثروة دائمة من خلال عقارك</h2>
                <p>خلق ثروة دائمة من خلال عقارك.</p>
            </div>
            <div class="search-field">
                <div class="tabs-box">
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons centred clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">شراء</li>
                            <li class="tab-btn" data-tab="#tab-2">تأجير</li>
                        </ul>
                    </div>
                    <div class="tabs-content info-group">
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                <div class="top-search">
                                    <form action="{{ route('searchByName') }}" method="GET" class="search-form">
                                        <div class="row clearfix">
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <label>البحث</label>
                                                    <div class="field-input">
                                                        <i class="fas fa-search"></i>
                                                        <input type="search" name="name"
                                                            placeholder="البحث بواسطة العقار, العنوان او معلم معروف..."
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="search-btn">
                                            <button type="submit">البحث <i class="fas fa-search"></i> </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="inner-box">
                                <div class="top-search">
                                    <form action="index.html" method="post" class="search-form">
                                        <div class="row clearfix">
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <label>البحث</label>
                                                    <div class="field-input">
                                                        <i class="fas fa-search"></i>
                                                        <input type="search" name="search-field"
                                                            placeholder="البحث بواسطة العقار, العنوان او معلم معروف..."
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="search-btn">
                                            <button type="submit">بحث <i class="fas fa-search"></i> </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->

<!-- category-section -->
{{-- <section class="category-section category-page centred mr-0 pt-120 pb-90">
    <div class="auto-container">
        <div class="sec-title centred">
            <h2>الأقسام المتاحة</h2>
          
        </div>
        <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
            <ul class="category-list clearfix">
                <li>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-1"></i></div>
                            <h5><a href="property-details.html">Residential</a></h5>
                            <span>52</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-2"></i></div>
                            <h5><a href="property-details.html">Commercial</a></h5>
                            <span>20</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-3"></i></div>
                            <h5><a href="property-details.html">Appertment</a></h5>
                            <span>35</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-4"></i></div>
                            <h5><a href="property-details.html">Industrial</a></h5>
                            <span>10</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="property-details.html">Building Code</a></h5>
                            <span>27</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-6"></i></div>
                            <h5><a href="property-details.html">Land</a></h5>
                            <span>52</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-7"></i></div>
                            <h5><a href="property-details.html">Floor Area</a></h5>
                            <span>20</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-8"></i></div>
                            <h5><a href="property-details.html">Communal land</a></h5>
                            <span>35</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-9"></i></div>
                            <h5><a href="property-details.html">Offices</a></h5>
                            <span>10</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-10"></i></div>
                            <h5><a href="property-details.html">Factory</a></h5>
                            <span>27</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section> --}}
<!-- category-section end -->
{{-- <!-- category-section -->
        <section class="category-section centred">
            <div class="auto-container">
                <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <ul class="category-list clearfix">
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-1"></i></div>
                                    <h5><a href="property-details.html">Residential</a></h5>
                                    <span>52</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-2"></i></div>
                                    <h5><a href="property-details.html">Commercial</a></h5>
                                    <span>20</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-3"></i></div>
                                    <h5><a href="property-details.html">Appertment</a></h5>
                                    <span>35</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-4"></i></div>
                                    <h5><a href="property-details.html">Industrial</a></h5>
                                    <span>10</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-5"></i></div>
                                    <h5><a href="property-details.html">Building Code</a></h5>
                                    <span>27</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="more-btn"><a href="categories.html" class="theme-btn btn-one">All Categories</a></div>
                </div>
            </div>
        </section>
        <!-- category-section end --> --}}


<!-- feature-section -->
<section class="feature-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>سمات</h5>
            <h2>جميع العقارات المتاحة</h2>
            {{-- <p>لوريم ابسيوم.</p> --}}
        </div>
        <div class="row clearfix">
            @foreach ($propertiesviews as $item)
                @include('layouts.web.property_card', $item)
            @endforeach







        </div>
        <div class="more-btn centred"><a href="property-list.html" class="theme-btn btn-one">مشاهدة الجميع</a></div>
    </div>
</section>
<!-- feature-section end -->


{{-- <!-- video-section -->
        <section class="video-section centred" style="background-image: url(https://wallpapercave.com/wp/wp4110649.jpg);">
            <div class="auto-container">
                <div class="video-inner">
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="icon-17"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-section end --> --}}


<!-- cta-section -->
<section class="cta-section bg-color-2">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="inner-box clearfix">
            <div class="text pull-right text-right">
                <h2>تتطلع لشراء عقار جديد أو <br />بيع واحد موجود؟</h2>
            </div>
            <div class="btn-box pull-left">
                <a href="property-details.html" class="theme-btn btn-three">تأجير عقارات</a>
                <a href="index.html" class="theme-btn btn-one">بيع عقارات</a>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->


<!-- news-section -->
<section class="news-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>مقال إخباري</h5>
            <h2>ابق على اطلاع مع عقارك</h2>
            <p>لوريم ابسيوم</p>
        </div>
        <div class="row clearfix">
            @foreach ($blogs as $item)
                @include('layouts.web.card-blog', $item)
            @endforeach



        </div>
    </div>
</section>
<!-- news-section end -->


<!-- download-section -->
<section class="download-section bg-color-3">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-3.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box text-right">
                        <span>تحميل</span>
                        <h2>قم بتنزيل تطبيق Android و IOS للتجربة</h2>
                        <div class="download-btn">
                            <a href="index.html" class="app-store">
                                <i class="fab fa-apple"></i>
                                <p>تحميل علي</p>
                                <h4>أب ستور</h4>
                            </a>
                            <a href="index.html" class="google-play">
                                <i class="fab fa-google-play"></i>
                                <p>أحصل عليه علي</p>
                                <h4>جوجل بلاي</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                <div class="image-box">
                    {{-- <figure class="image image-1 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="https://freepngimg.com/thumb/apple_iphone/117088-12-iphone-free-download-png-hd.png" class="img-fluid" alt=""></figure> --}}
                    <figure class="image image-2 wow fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms"><img
                            src="https://www.pngmart.com/files/15/Apple-iPhone-12-PNG-Picture.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- download-section end -->
@endsection


















@section('js')



@endsection
