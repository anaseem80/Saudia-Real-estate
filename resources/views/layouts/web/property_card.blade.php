 <div class="col-lg-4 col-md-6 col-sm-6 mt-3 feature-block">
     <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
         <div class="inner-box">
             <div class="image-box">
                 <figure class="image"><img src="{{ URL::asset($item->picture) }}" alt=""></figure>
                 <div class="batch"><i class="icon-11"></i></div>
                 <span class="category">متميز</span>
             </div>
             <div class="lower-content">
                 <div class="author-info clearfix">
                     <div class="buy-btn pull-left"><a
                             href="property-details.html">{{ $item->property_details->property_type }}</a></div>
                     <div class="author pull-right">
                         <h6>{{ $item->user->name }}</h6>

                     </div>
                 </div>
                 <div class="title-text text-right">
                     <h4><a href="property-details.html">{{ $item->name }}</a></h4>
                 </div>
                 <div class="price-box clearfix">
                     <div class="price-info pull-right">
                         <h6 class="text-right">يبدأ من</h6>
                         <h4>SAR {{ $item->property_details->price_all }}</h4>
                     </div>
                     <ul class="other-option pull-left clearfix">
                         <p>{{ $item->created_at->locale('ar')->diffForHumans() }}</p>
                     </ul>
                 </div>
                 {{-- <p class="text-right">لوريم ابيسيوم</p> --}}
                 <ul class="more-details clearfix">
                     <li><i class="icon-14"></i>{{ $item->city }}</li>
                     <li><i class="icon-15"></i>{{ $item->views }}</li>
                     <li><i class="icon-16"></i>60 </li>
                 </ul>
                 <div class="btn-box text-right"><a href="property-details.html" class="theme-btn btn-two">مشاهدة
                         التفاصيل</a></div>
             </div>
         </div>
     </div>
 </div>
