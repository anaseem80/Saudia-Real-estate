@extends('layouts.web.master_web')
@section('css')

@section('title')
@stop
@endsection
@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url(https://wallpapercave.com/wp/wp4110640.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>عقار دبي</h1>
        </div>
    </div>
</section>
<!-- sidebar-page-container -->
<section class="sidebar-page-container blog-details sec-pad-2">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side order-lg-1 order-2">
                <div class="blog-sidebar">
                    <div class="sidebar-widget social-widget">
                        <div class="widget-title">
                            <h4>تابعونا على</h4>
                        </div>
                        <ul class="social-links clearfix">
                            <li><a href="blog-1.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="blog-1.html"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="blog-1.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="blog-1.html"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="blog-1.html"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget category-widget">
                        <div class="widget-title">
                            <h4>الأقسام</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                <li><a href="blog-details.html">منازل<span>(9)</span></a></li>
                                <li><a href="blog-details.html">منازل<span>(9)</span></a></li>
                                <li><a href="blog-details.html">منازل<span>(9)</span></a></li>
                                <li><a href="blog-details.html">منازل<span>(9)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget post-widget">
                        <div class="widget-title">
                            <h4>أحدث المنشورات</h4>
                        </div>
                        <div class="post-inner">
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                <h5><a href="blog-details.html">أحصل علي بيت أحلامك</a></h5>
                                <span class="post-date">ابريل 10, 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side order-lg-2 order-1">
                <div class="blog-details-content">
                    <div class="news-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/news/news-21.jpg" alt=""></figure>
                                <span class="category">مميز</span>
                            </div>
                            <div class="lower-content">
                                <h3>عقار دبي.</h3>
                                <ul class="post-info clearfix">
                                    <li class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/news/author-1.jpg" alt=""></figure>
                                        <h5><a href="blog-details.html">سالم الدوسري</a></h5>
                                    </li>
                                    <li>ابريل 10, 2020</li>
                                </ul>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed perspiciatis unde omnis iste natus error sit voluptem accusantium doloremque laudantium.</p>
                                    {{-- <blockquote>
                                        <h4>“Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis.”</h4>
                                    </blockquote> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="comments-area">
                        <div class="group-title">
                            <h4>3 Comments</h4>
                        </div>
                        <div class="comment-box">
                            <div class="comment">
                                <figure class="thumb-box">
                                    <img src="assets/images/news/comment-1.jpg" alt="">
                                </figure>
                                <div class="comment-inner">
                                    <div class="comment-info clearfix">
                                        <h5>Rebeka Dawson</h5>
                                        <span>April 10, 2020</span>
                                    </div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nos trud exerc.</p>
                                        <a href="blog-details.html"><i class="fas fa-share"></i>Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment replay-comment">
                                <figure class="thumb-box">
                                    <img src="assets/images/news/comment-2.jpg" alt="">
                                </figure>
                                <div class="comment-inner">
                                    <div class="comment-info clearfix">
                                        <h5>Elizabeth Winstead</h5>
                                        <span>April 10, 2020</span>
                                    </div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nos</p>
                                        <a href="blog-details.html"><i class="fas fa-share"></i>Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <figure class="thumb-box">
                                    <img src="assets/images/news/comment-3.jpg" alt="">
                                </figure>
                                <div class="comment-inner">
                                    <div class="comment-info clearfix">
                                        <h5>Benedict Cumbatch</h5>
                                        <span>April 10, 2020</span>
                                    </div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nos trud exerc.</p>
                                        <a href="blog-details.html"><i class="fas fa-share"></i>Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="comments-form-area">
                        <div class="group-title">
                            <h4>Leave a Comment</h4>
                        </div>
                        <form action="blog-details.html" method="post" class="comment-form default-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Your name" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your email" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone number" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Your message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" class="theme-btn btn-one">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sidebar-page-container -->
<!--End Page Title-->
@endsection
@section('js')
@endsection