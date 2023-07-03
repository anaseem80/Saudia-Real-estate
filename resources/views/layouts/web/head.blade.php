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
                                     {{-- <li class="dropdown"><a href="index.html"><span>Listing</span></a>
                                        <ul>
                                            <li><a href="agents-list.html">Agents List</a></li>
                                            <li><a href="agents-grid.html">Agents Grid</a></li>
                                            <li><a href="agents-details.html">Agent Details</a></li>
                                        </ul>
                                    </li>  --}}
                                     <li class="dropdown"><a href="index.html"><span>العقارات</span></a>
                                         <ul>
                                             <li><a href="property-list.html">Property List</a></li>
                                             <li><a href="property-grid.html">Property Grid</a></li>
                                             <li><a href="property-list-2.html">Property List Full View</a></li>
                                             <li><a href="property-grid-2.html">Property Grid Full View</a></li>
                                             <li><a href="property-list-3.html">Property List Half View</a></li>
                                             <li><a href="property-grid-3.html">Property Grid Half View</a></li>
                                             <li><a href="property-details.html">Property Details 01</a></li>
                                             <li><a href="property-details-2.html">Property Details 02</a></li>
                                             <li><a href="property-details-3.html">Property Details 03</a></li>
                                             <li><a href="property-details-4.html">Property Details 04</a></li>
                                         </ul>
                                     </li>
                                     <li class="dropdown"><a href="index.html"><span>الأقسام</span></a>
                                         <div class="megamenu">
                                             <div class="row clearfix">
                                                 <div class="col-xl-4 column">
                                                     <ul>
                                                         <li>
                                                             <h4>Pages</h4>
                                                         </li>
                                                         <li><a href="about.html">About Us</a></li>
                                                         <li><a href="services.html">Our Services</a></li>
                                                         <li><a href="faq.html">Faq's Page</a></li>
                                                         <li><a href="pricing.html">Pricing Table</a></li>
                                                         <li><a href="compare-roperties.html">Compare Properties</a>
                                                         </li>
                                                         <li><a href="categories.html">Categories Page</a></li>
                                                         <li><a href="career.html">Career Opportunity</a></li>
                                                         <li><a href="testimonials.html">Testimonials</a></li>
                                                     </ul>
                                                 </div>
                                                 <div class="col-xl-4 column">
                                                     <ul>
                                                         <li>
                                                             <h4>Pages</h4>
                                                         </li>
                                                         <li><a href="gallery.html">Our Gallery</a></li>
                                                         <li><a href="profile.html">My Profile</a></li>
                                                         <li><a href="signin.html">Sign In</a></li>
                                                         <li><a href="signup.html">Sign Up</a></li>
                                                         <li><a href="error.html">404</a></li>
                                                         <li><a href="agents-list.html">Agents List</a></li>
                                                         <li><a href="agents-grid.html">Agents Grid</a></li>
                                                         <li><a href="agents-details.html">Agent Details</a></li>
                                                     </ul>
                                                 </div>
                                                 <div class="col-xl-4 column">
                                                     <ul>
                                                         <li>
                                                             <h4>Pages</h4>
                                                         </li>
                                                         <li><a href="blog-1.html">Blog 01</a></li>
                                                         <li><a href="blog-2.html">Blog 02</a></li>
                                                         <li><a href="blog-3.html">Blog 03</a></li>
                                                         <li><a href="blog-details.html">Blog Details</a></li>
                                                         <li><a href="agency-list.html">Agency List</a></li>
                                                         <li><a href="agency-grid.html">Agency Grid</a></li>
                                                         <li><a href="agency-details.html">Agency Details</a></li>
                                                         <li><a href="contact.html">Contact Us</a></li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </div>
                                     </li>
                                     {{-- <li class="current dropdown"><a href="index.html"><span>Agency</span></a>
                                        <ul>
                                            <li><a href="agency-list.html">Agency List</a></li>
                                            <li><a href="agency-grid.html">Agency Grid</a></li>
                                            <li><a href="agency-details.html">Agency Details</a></li>
                                        </ul>
                                    </li> --}}
                                     <li class="dropdown"><a href="index.html"><span>المدونة</span></a>

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
