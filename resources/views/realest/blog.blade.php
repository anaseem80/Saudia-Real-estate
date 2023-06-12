@extends('layouts.master_web')
@section('css')
@endsection
@section('title')
    المدونه
@stop


@section('content')


 


    <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] xl:h-[650px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('{{ URL::asset('sub_screen.jpg') }}');">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                        <div class="mb-5"><span class="text-base block">المدونه</span></div>
                        <h1 class="font-recoleta text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl">
                            كل ما عليك معرفته عن تجارة العقارات في الامارات
                        </h1>

                        <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                            تَعِد الامارات المقيمين فيها ببحر غني بالفرص الذهبية على كافة الأصعدة، ولا سيما العقارية منها، إذ تقدم العديد من التسهيلات التي تساعدهم في ازدهار أعمالهم واقتناص الفرص المناسبة. هذا وتحتل الامارات مكانةً متقدمة بين أفضل دول العالم للاستثمار العقاري، ويُعزى ذلك للظروف المناسبة للاستثمار والقوانين المعمول بها التي من شأنها الحد من العقبات والصعوبات التي قد تواجه أي مستثمر أو وكيل عقاري يفكر في تجارة العقارات في الامارات
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero section end -->

    <!-- Blog Section Start  -->

    <section class="blog-section pt-[80px] lg:pt-[120px]">
        <div class="container">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] gap-y-[40px]">



            @foreach ($blogs as $item)
                
            <div class="post-item">
                <a href="{{ route("showblog" , $item->id) }}"  class="block overflow-hidden rounded-[6px] mb-[35px]">
                    <img class="w-full h-full" src="{{ URL::asset($item->image) }}" width="370" height="270" loading="lazy" alt="Tip’s about Real Estate Recent Conditions from Agent.">
                </a>
                <div>
                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[5px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2 before:bg-secondary before:content-[''] before:w-[3px] before:h-[3px] before:rounded-full pl-[10px]"> {{ $item->created_at->locale('ar')->diffForHumans() }}</span>
                    <h3><a href="{{ route("showblog" , $item->id) }}" class="font-recoleta text-[22px] xl:text-[27px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all">{{ $item->title}}</a></h3>
                    <p class="font-light text-white text-[16px] leading-[1.75]">{{ \Illuminate\Support\Str::limit($item->content, 100, '...') }}</p>
                </div>
            </div>



            @endforeach








            </div>


        </div>
    </section>
    <!-- Blog Section End  -->


   
    <!-- News Letter section End -->


@endsection

@section('js')

@endsection