@extends('layouts.master_web')
@section('css')
@endsection
@section('title')
    معلومات عنا
@stop
@section('content')


  

    <section class="bg-no-repeat bg-left-bottom xl:bg-right-bottom bg-contain xl:bg-cover bg-[#FFF6F0] h-[560px] xl:h-[650px] flex flex-wrap items-center relative" style="background-image:  url('{{ URL::asset('sub_screen.jpg') }}');">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="max-w-[400px]">
                        <div class="mb-5"><span class="text-base text-secondary block">معلومات عن blossom blue</span></div>
                        <h1 class="font-recoleta text-primary text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl title">
                            عن<span class="text-secondary"> blossom blue.</span>
                        </h1>

                        <p class="text-base text-[#494949] mt-5">
                            يتوفر هنا عدد ضخم من العقارات للبيع والشراء ، كما يمكنك أن تجد هنا عقارات مشتركة

                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <img class="absolute left-0 bottom-0" src="{{ URL::asset('build.jpg') }}" alt="icon" width="112" height="138"> --}}
    </section>
    <!-- Hero section end -->

    <section class="relative z-[1] mt-[80px] xl:mt-0">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px] items-center">
                <div class="col-span-12 lg:col-span-6 mb-[30px]">
                    <img class="xl:mt-[-140px] mx-auto" src="assets/images/about/about5.png" alt="about image">
                </div>
                <div class="col-span-12 lg:col-span-6 mb-[30px]">
                    <span class="text-secondary text-tiny inline-block mb-2">Since 1975</span>
                    <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.3888] xl:text-[35px] capitalize mb-[50px]">
                        نحن نقدم الاختيار الصحيح للممتلكات التي تحتاجها ولدينا فرصة كبيرة للاختيار من بين آلاف المجموعات .
                        <span class="text-secondary">.</span></h2>

                    <ul class="flex flex-wrap list-none">
                        <li class="block">
                            <span class="font-recoleta text-secondary text-lg"><span class="counter-up">20</span> <span>ألف +</span></span>
                            <p>ملكيات</p>
                        </li>
                        <li class="block pl-[40px] md:pl-[60px]">
                            <span class="font-recoleta text-secondary text-lg"><span class="counter-up">12</span> <span>ألف +</span></span>
                            <p>عملاء</p>
                        </li>
                        <li class="block pl-[40px] md:pl-[60px]">
                            <span class="font-recoleta text-secondary text-lg"><span class="counter-up">160</span>
                            <span>+</span></span>
                            <p>الفوز بالجوائز
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




    <!-- Brand section Start-->

    <div class="brand-section pt-[80px] lg:pt-[120px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="brand-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- swiper-slide start -->
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand1.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand2.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand3.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand4.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand5.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand3.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                    </a>
                                </div>

                                <!-- swiper-slide end-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brand section End-->


    <!-- service Section Start-->

    {{-- <section class="py-[80px] lg:py-[120px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="mb-[30px] lg:mb-[60px] text-center">
                        <span class="text-secondary text-tiny inline-block mb-2">خدماتنا</span>
                        <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">
                            الخدمات التي نقدمها .<span class="text-secondary">.</span></h2>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px]">
                <div class="relative group">
                    <a href="properties-details.html" class="block">
                        <img src="assets/images/service/service1.png" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="Sale Property">
                        <div class="drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] hover:drop-shadow-[0px_8px_20px_rgba(0,0,0,0.15)] bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[25px] py-[25px]">
                            <h3 class="font-recoleta font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all mb-[5px]">بيع الممتلكات<span class="text-secondary group-hover:text-primary">.</span> </h3>
                            <p class="font-light text-tiny">توفير فرصة خيارات البيع المسبق للعثور على الأفضل </p>
                        </div>
                    </a>
                </div>
                <div class="relative group">
                    <a href="properties-details.html" class="block">
                        <img src="assets/images/service/service2.png" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="Buy Property">
                        <div class="drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] hover:drop-shadow-[0px_8px_20px_rgba(0,0,0,0.15)] bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[25px] py-[25px]">
                            <h3 class="font-recoleta font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all mb-[5px]">شراة الممتلكات<span class="text-secondary group-hover:text-primary">.</span> </h3>
                            <p class="font-light text-tiny">توفير فرصة خيارات البيع المسبق للعثور على الأفضل  </p>
                        </div>
                    </a>
                </div>
                <div class="relative group">
                    <a href="properties-details.html" class="block">
                        <img src="assets/images/service/service3.png" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="Rent Property">
                        <div class="drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] hover:drop-shadow-[0px_8px_20px_rgba(0,0,0,0.15)] bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[25px] py-[25px]">
                            <h3 class="font-recoleta font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all mb-[5px]">تاجير الممتلكات<span class="text-secondary group-hover:text-primary">.</span> </h3>
                            <p class="font-light text-tiny">توفير فرصة خيارات البيع المسبق للعثور على الأفضل  </p>
                        </div>
                    </a>
                </div>
                <div class="relative group">
                    <a href="properties-details.html" class="block">
                        <img src="assets/images/service/service4.png" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="Mortgage">
                        <div class="drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] hover:drop-shadow-[0px_8px_20px_rgba(0,0,0,0.15)] bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[25px] py-[25px]">
                            <h3 class="font-recoleta font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all mb-[5px]">الاعلان<span class="text-secondary group-hover:text-primary">.</span> </h3>
                            <p class="font-light text-tiny">توفير فرصة خيارات البيع المسبق للعثور على الأفضل  </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- service Section End-->

   <!-- About Us Sectin Start -->
   <section class="about-section lg:pt-[55px]">
    <div class="container">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-7">
                <div class="scene" data-relative-input="true">
                    <img data-depth="0.1" src="assets/images/about/about2.png"
                        class="2xl:ml-[-160px] w-full h-full 2xl:w-auto 2xl:max-w-[inherit]" loading="lazy"
                        width="813" height="707" alt="about Image">
                </div>
            </div>
            <div class="col-span-12 lg:col-span-5">
                <span class="text-secondary text-tiny inline-block mb-2">لماذا أخترتنا</span>
                <h2
                    class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-3">
                    نحن نقدم الاختيار الصحيح للممتلكات التي تحتاجها .
                    <span class="text-secondary">.</span></h2>
                <p class="text-white">يتوفر هنا عدد ضخم من العقارات للبيع والشراء والإيجار. يمكنك أيضًا العثور هنا على عقار للعيش المشترك ، لذا يجب عليك اختيار الكثير من هنا والاستمتاع بخصم كبير.
                </p>

                <div class="-mb-10 mt-[45px]">
                    <div class="flex flex-wrap mb-5 lg:mb-10">
                        <img src="assets/images/icon/doller.png" class="self-start mr-5" loading="lazy"
                            width="50" height="50" alt="about Image">
                        <div class="flex-1">
                            <h3 class="font-recoleta text-primary text-[22px] xl:text-lg capitalize mb-2">صديقة للميزانية</h3>
                            <p class="max-w-[315px] text-white">العقارات صديقة للميزانية ، لذا لديك فرصة للعثور على أفضلها</p>
                        </div>

                    </div>
                    <div class="flex flex-wrap mb-5 lg:mb-10">
                        <img src="assets/images/icon/location.png" class="self-start mr-5" loading="lazy"
                            width="50" height="50" alt="about Image">
                        <div class="flex-1">
                            <h3 class="font-recoleta text-primary text-[22px] xl:text-lg capitalize mb-2">موقع رئيسي
                            </h3>
                            <p class="max-w-[315px] text-white">العقارات صديقة للميزانية ، لذا لديك فرصة للعثور على أفضلها</p>
                        </div>

                    </div>
                    <div class="flex flex-wrap mb-5 lg:mb-10">
                        <img src="assets/images/icon/trusted.png" class="self-start mr-5" loading="lazy"
                            width="50" height="50" alt="about Image">
                        <div class="flex-1">
                            <h3 class="font-recoleta text-primary text-[22px] xl:text-lg capitalize mb-2">
                                موثوق به من قبل ألف</h3>
                            <p class="max-w-[315px] text-white">العقارات صديقة للميزانية ، لذا لديك فرصة للعثور على أفضلها</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
    <!-- About Us Sectin End -->



    <!-- Testimonial carousel Start -->

    <!-- Testimonial carousel Start -->

    <section class="testimonial-section pb-[80px] lg:pb-[120px] bg-center bg-no-repeat relative z-10"
        style="">
        <div class="container testimonial-carousel-one">
            <div class="grid items-center grid-cols-12 gap-x-[30px] mb-[-30px]">
                <div class="col-span-12 lg:col-span-7 mb-[30px]">
                    <div class="swiper -m-[30px] p-[30px]">
                        <div class="swiper-wrapper">



                            <div class="swiper-slide">
                                <div class="relative text-right">
                                    <!-- shape and images -->
                                    <div
                                        class="inline-block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-primary text-primary before:w-full before:h-[calc(100%_-_50px)] before:z-[-1] before:rounded-[16px]">
                                        <img src="{{ URL::asset('assets/img/backgrounds/per.jpg') }}"
                                            class="w-auto h-auto block mx-auto relative z-[2]" loading="lazy"
                                            width="300" height="380" alt="Oliver Stephen">
                                        <img class="absolute right-[20px] bottom-0 z-[1]"
                                            src="assets/images/testimonial/shape.png" width="130" height="132"
                                            loading="lazy" alt="shape">
                                    </div>

                                    <!-- content -->
                                    <div
                                        class="review-shadow-card text-left rounded-[14px] pl-[20px] sm:pl-[30px] pr-[45px] pt-[30px] sm:pt-[45px] pb-[20px] sm:pb-[30px]">
                                        <span class="block absolute right-[20px] top-[30px]">
                                            <svg class="ml-auto mb-[4px]" width="27" height="20"
                                                viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.925 19.2505H7.7L11.55 11.5505V0.000488281H0V11.5505H5.775L1.925 19.2505ZM17.325 19.2505H23.1L26.95 11.5505V0.000488281H15.4V11.5505H21.175L17.325 19.2505Z"
                                                    fill="#016450" />
                                            </svg>
                                        </span>
                                        <p class="text-dark">من السهل جدًا على كل شخص شراء أو بيع أو استئجار عقار
                                             نحن نظن أنهم يواصلون خدمتهم العظيمة.</p>
                                        <ul>
                                            <li class="flex flex-wrap items-center justify-between mt-4">
                                                <span
                                                    class="font-recoleta text-[18px] leading-none capitalize text-secondary">يوسف محمد</span>
                                                <span class="flex flex-wrap">
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg> 
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>




                                </div>
                            </div>




                            <div class="swiper-slide">
                                <div class="relative text-right">
                                    <!-- shape and images -->
                                    <div
                                        class="inline-block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-primary text-primary before:w-full before:h-[calc(100%_-_50px)] before:z-[-1] before:rounded-[16px]">
                                        <img src="{{ URL::asset('assets/img/backgrounds/per1.jpg') }}"
                                            class="w-auto h-auto block mx-auto relative z-[2]" loading="lazy"
                                            width="300" height="380" alt="Sun Francisco">
                                        <img class="absolute right-[20px] bottom-0 z-[1]"
                                            src="assets/images/testimonial/shape.png" width="130" height="132"
                                            loading="lazy" alt="shape">
                                    </div>

                                    <!-- content -->
                                    <div
                                        class="review-shadow-card text-left rounded-[14px] pl-[20px] sm:pl-[30px] pr-[45px] pt-[30px] sm:pt-[45px] pb-[20px] sm:pb-[30px]">
                                        <span class="block absolute right-[20px] top-[30px]">
                                            <svg class="ml-auto mb-[4px]" width="27" height="20"
                                                viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.925 19.2505H7.7L11.55 11.5505V0.000488281H0V11.5505H5.775L1.925 19.2505ZM17.325 19.2505H23.1L26.95 11.5505V0.000488281H15.4V11.5505H21.175L17.325 19.2505Z"
                                                    fill="#016450" />
                                            </svg>
                                        </span>
                                        <p class="text-dark">
                                            لقد كنت خائف جدا من الشركات الغير موثقه ولاكن عندما تعاملت مع هذه الشركه العقريه لقد تمكنت من العثور علي منزل احلامي
                                        </p>
                                        <ul>
                                            <li class="flex flex-wrap items-center justify-between mt-4">
                                                <span
                                                    class="font-recoleta text-[18px] leading-none capitalize text-secondary">محمد احمد</span>
                                                <span class="flex flex-wrap">
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative text-right">
                                    <!-- shape and images -->
                                    <div
                                        class="inline-block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-primary text-primary before:w-full before:h-[calc(100%_-_50px)] before:z-[-1] before:rounded-[16px]">
                                        <img src="{{ URL::asset('assets/img/backgrounds/per2.jpg') }}"
                                            class="w-auto h-auto block mx-auto relative z-[2]" loading="lazy"
                                            width="300" height="380" alt="Oliver Stephen">
                                        <img class="absolute right-[20px] bottom-0 z-[1]"
                                            src="assets/images/testimonial/shape.png" width="130" height="132"
                                            loading="lazy" alt="shape">
                                    </div>

                                    <!-- content -->
                                    <div
                                        class="review-shadow-card text-left rounded-[14px] pl-[20px] sm:pl-[30px] pr-[45px] pt-[30px] sm:pt-[45px] pb-[20px] sm:pb-[30px]">
                                        <span class="block absolute right-[20px] top-[30px]">
                                            <svg class="ml-auto mb-[4px]" width="27" height="20"
                                                viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.925 19.2505H7.7L11.55 11.5505V0.000488281H0V11.5505H5.775L1.925 19.2505ZM17.325 19.2505H23.1L26.95 11.5505V0.000488281H15.4V11.5505H21.175L17.325 19.2505Z"
                                                    fill="#016450" />
                                            </svg>
                                        </span>
                                        <p class="text-dark">فعلا شركه قويه جدا جدا لقد تمكنت من العثور علي منزل بسرعه رهيبه .</p>
                                        <ul>
                                            <li class="flex flex-wrap items-center justify-between mt-4">
                                                <span
                                                    class="font-recoleta text-[18px] leading-none capitalize text-secondary">زياد محمود</span>
                                                <span class="flex flex-wrap">
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5 mb-[30px] order-first lg:order-last">
                    <div class="relative 2xl:ml-[55px] max-w-[385px]">
                        <span class="text-secondary text-tiny capitalize inline-block mb-[10px]">شهادة</span>
                        <h2
                            class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl mb-[20px] max-w-[375px]">
                            تعليقات من عملائنا السعداء .<span class="text-secondary">.</span></h2>
                        <p>يتوفر هنا عدد ضخم من العقارات للبيع والشراء والإيجار. يمكنك أيضًا العثور هنا على عقار للعيش المشترك ، لذا عليك أن تختار هنا وتستمتع به. </p>

                        <!-- If we need navigation buttons -->
                        <div class="testimonial-pagination hidden sm:block">
                            <div
                                class="swiper-button-prev w-[36px] h-[36px] rounded-full bg-primary  text-white hover:bg-secondary top-auto bottom-[-65px] left-0">
                            </div>
                            <div
                                class="swiper-button-next w-[36px] h-[36px] rounded-full bg-primary  text-white hover:bg-secondary top-auto bottom-[-65px] left-[56px]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonial carousel End -->














@endsection
@section('js')

@endsection