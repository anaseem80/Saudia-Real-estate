@extends('layouts.master_web')
@section('css')
<style>
    .property-image {
      width: 370px;
      height: 266px;
    }h1 {
      font-size: 16px;
      color: #333;
    }
    .fixed-size-image {
      width: 370px;
      height: 266px;
      object-fit: cover;
    }p {
      font-size: 14px;
      color: #666;
    }div.text {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }
    .property-image {
      width: 370px;
      height: 266px;
    }
    .image-size {
        width: 370px;
        height: 266px;
    }</style>
@section('title')
    عقارات
@stop
@endsection

@section('content')
@include('layouts.sub_screen', ['title' => '  ملكيات'])

<section class="popular-properties py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">



@foreach ($property as $item)
<div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] form-field-color text-center transition-all duration-300 hover:-translate-y-[10px]">
    <div class="relative property-image">
        <img src="{{ URL::asset($item->picture) }}" class="w-full h-full object-cover" loading="lazy" alt="Orchid Casel de Paradise.">
        <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-secondary leading-none text-[14px] font-normal capitalize">for Sale</span>
      </div>
      <div class="py-[20px] px-[20px]">
        <h3><a href="properties-details.html" class="font-recoleta leading-tight text-[22px] xl:text-lg text-primary">{{$item->name}}</a></h3>
        <h4><a href="detelisscreen" style="color: white !important;">جمهورية الامارات العربية المتحدة</a></h4>
        <span class="font-light text-sm text-white">{{$item->created_at->format('Y-m-d H:i:s')}}</span>
        <div>
        <span class="font-recoleta text-primary px-[15px]">{{$item->country}}</span>
        <hr class="my-2">
        </div>
        <div class="text" style="display: flex; flex-direction: row;">
            <h1 style="font-size: 16px; color: #fff;">عدد مشاهدات العقار</h1>
            <p style="font-size: 14px; color: #fff;" class="font-light">{{$item->views}}</p>
          </div>
      </div>
    </div> 


@endforeach








         
       


        </div>

{{-- 
        <div class="grid grid-cols-12 mt-[50px] gap-[30px]">
            <div class="col-span-12">
                <ul class="pagination flex flex-wrap items-center justify-center">

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] bg-primary rounded-full text-orange leading-none transition-all hover:bg-secondary text-white text-[12px]" href="#">
                            <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(.clip0_876_580)">
                                    <path d="M5.8853 10.0592C5.7326 10.212 5.48474 10.212 5.33204 10.0592L0.636322 5.36134C0.48362 5.20856 0.48362 4.96059 0.636322 4.80782L5.33204 0.109909C5.48749 -0.0403413 5.73535 -0.0359829 5.8853 0.119544C6.03181 0.271171 6.03181 0.511801 5.8853 0.663428L1.46633 5.08446L5.8853 9.50573C6.03823 9.65873 6.03823 9.90648 5.8853 10.0592Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath class="clip0_876_580">
                                        <rect width="5.47826" height="10.1739" fill="white" transform="matrix(-1 0 0 1 6 0)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">1</a>
                    </li>

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">2</a>
                    </li>

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">3</a>
                    </li>

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">4</a>
                    </li>

                    <li class="mx-2">
                        <span>---</span>
                    </li>

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">25</a>
                    </li>

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] bg-primary rounded-full text-orange leading-none transition-all hover:bg-secondary text-white text-[12px]" href="#">
                            <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(.clip0_876_576)">
                                    <path d="M0.114699 10.0592C0.267401 10.212 0.515257 10.212 0.667959 10.0592L5.36368 5.36134C5.51638 5.20856 5.51638 4.96059 5.36368 4.80782L0.667959 0.109909C0.512505 -0.0403413 0.26465 -0.0359829 0.114699 0.119544C-0.031813 0.271171 -0.031813 0.511801 0.114699 0.663428L4.53367 5.08446L0.114699 9.50573C-0.038233 9.65873 -0.038233 9.90648 0.114699 10.0592Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath class="clip0_876_576">
                                        <rect width="5.47826" height="10.1739" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>
                </ul>


            </div>
        </div> --}}








    </div>
</section>
@endsection
@section('js')

@endsection