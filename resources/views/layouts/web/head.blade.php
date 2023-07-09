     <!-- preloader -->
     <div class="loader-wrap">
         <div class="preloader">
             <div class="preloader-close"><i class="far fa-times"></i></div>
             <div id="handle-preloader" class="handle-preloader">
                 <div class="animation-preloader">
                     <div class="spinner"></div>
                     <div class="txt-loading">
                         <span data-text-preloader="r" class="letters-loading">
                             r
                         </span>
                         <span data-text-preloader="e" class="letters-loading">
                             e
                         </span>
                         <span data-text-preloader="a" class="letters-loading">
                             a
                         </span>
                         <span data-text-preloader="l" class="letters-loading">
                             l
                         </span>
                         <span data-text-preloader="s" class="letters-loading">
                             s
                         </span>
                         <span data-text-preloader="h" class="letters-loading">
                             h
                         </span>
                         <span data-text-preloader="e" class="letters-loading">
                             e
                         </span>
                         <span data-text-preloader="d" class="letters-loading">
                             d
                         </span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- preloader end -->


     <!-- switcher menu -->
     <div class="switcher">
         <div class="switch_btn">
             <button><i class="fas fa-palette"></i></button>
         </div>
         <div class="switch_menu">
             <!-- color changer -->
             <div class="switcher_container">
                 <ul id="styleOptions" title="switch styling">
                     <li>
                         <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                     </li>
                     <li>
                         <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                     </li>
                     <li>
                         <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                     </li>
                     <li>
                         <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                     </li>
                     <li>
                         <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
     <!-- end switcher menu -->


     <!-- main header -->
     <header class="main-header fixed-top">
         <!-- header-top -->
         <div class="header-top">
             <div class="top-inner clearfix">
                 <div class="left-column pull-left">
                     <ul class="info clearfix">
                         <li>السعودية , الرياض<i class="far fa-map-marker-alt"></i></li>
                         <li>الاثنين - السبت 9.00 - 18.00<i class="far fa-clock"></i></li>
                         <li><a href="tel:2512353256">+996 1561561</a><i class="far fa-phone"></i></li>
                     </ul>
                 </div>
                 <div class="right-column pull-right">
                     <ul class="social-links clearfix">
                         <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                         <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                         <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                         <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                     </ul>
                     <div class="sign-box">
                         <a href="signin.html"><i class="fas fa-user"></i> تسجيل الدخول</a>
                     </div>
                 </div>
             </div>
         </div>
         <!-- header-lower -->
         <div class="header-lower">
             <div class="outer-box">
                 <div class="main-box">
                     <div class="logo-box">
                         <figure class="logo"><a href="index.html"><img src="assets/images/logo.png"
                                     alt=""></a></figure>
                     </div>
                     <div class="menu-area clearfix">
                         <!--Mobile Navigation Toggler-->
                         <div class="mobile-nav-toggler">
                             <i class="icon-bar"></i>
                             <i class="icon-bar"></i>
                             <i class="icon-bar"></i>
                         </div>
                         <nav class="main-menu navbar-expand-md navbar-light">
                             <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                 <ul class="navigation clearfix">
                                     <li class="dropdown"><a href="index.html"><span>الأقسام</span></a>
                                         <ul>
                                             @foreach ($catogeries as $item)
                                                 <li><a href="property-list.html">{{ $item->name }} </a></li>
                                             @endforeach


                                         </ul>
                                     </li>

                                     <li class="dropdown"><a href=""><span>المدونة</span></a>

                                     </li>
                                     <li><a href="{{ route('aboutpage') }}"><span>معلومات عنا</span></a></li>
                                     <li><a href="{{ route('terms') }}"><span>سياسة الخصوصيه</span></a></li>

                                     <li><a href="{{ route('contactPage') }}"><span>تواصل معنا</span></a></li>
                                     <li><a href="{{ route('home') }}"><span>الرئيسية</span></a></li>
                                 </ul>
                             </div>
                         </nav>
                     </div>
                     <div class="btn-box">
                         <a href="index.html" class="theme-btn btn-one">إضافة عقار<span>+</span></a>
                     </div>
                 </div>
             </div>
         </div>

         <!--sticky Header-->
         <div class="sticky-header">
             <div class="outer-box">
                 <div class="main-box">
                     <div class="logo-box">
                         <figure class="logo"><a href="index.html"><img src="assets/images/logo.png"
                                     alt=""></a></figure>
                     </div>
                     <div class="menu-area clearfix">
                         <nav class="main-menu clearfix">
                             <!--Keep This Empty / Menu will come through Javascript-->
                         </nav>
                     </div>
                     <div class="btn-box">
                         <a href="index.html" class="theme-btn btn-one"><span>+</span>إضافة عقار</a>
                     </div>
                 </div>
             </div>
         </div>
     </header>
     <!-- main-header end -->

     <!-- Mobile Menu  -->
     <div class="mobile-menu">
         <div class="menu-backdrop"></div>
         <div class="close-btn"><i class="fas fa-times"></i></div>

         <nav class="menu-box">
             <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt=""
                         title=""></a></div>
             <div class="menu-outer">
                 <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
             </div>
             <div class="contact-info">
                 <h4>معلومات التواصل</h4>
                 <ul>
                     <li>السعودية, الرياض</li>
                     <li><a href="tel:+8801682648101">+966 256164189</a></li>
                     <li><a href="mailto:info@example.com">info@example.com</a></li>
                 </ul>
             </div>
             <div class="social-links">
                 <ul class="clearfix">
                     <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                     <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                     <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                     <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                     <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                 </ul>
             </div>
         </nav>
     </div><!-- End Mobile Menu -->
