<div class="col-lg-4 col-md-6 col-sm-12 news-block">
    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image"><a href="blog-details.html"><img src="{{ URL::asset($item->image) }}"
                            alt=""></a>
                </figure>
                <span class="category">متميز</span>
            </div>
            <div class="lower-content">
                <h4 class="text-right"><a href="blog-details.html">
                        {{ $item->title }}
                    </a></h4>
                <div class="text-right mb-4">
                    <p>
                        {{ Str::limit($item->content, 250, '...') }}
                    </p>
                </div>
                <div class="btn-box text-right">
                    <a href="{{ route('showblog', $item->id) }}" class="theme-btn btn-two">مشاهدة التفاصيل</a>
                </div>
            </div>
        </div>
    </div>
</div>
