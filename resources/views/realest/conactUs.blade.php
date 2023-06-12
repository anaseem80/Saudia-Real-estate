@extends('layouts.master_web')
@section('css')

@section('title')
    تواصل معنا
@stop
@endsection

@section('content')

<section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] xl:h-[650px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('{{ URL::asset('united.jpg') }}');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                    <div class="mb-5"><span class="text-base block">اتصل بنا
                    </span></div>
                    <h1 class="font-recoleta text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl">
                        معلومات الاتصال
                    </h1>

                    <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                        يتوفر هنا عدد ضخم من العقارات للبيع والشراء ، كما يمكنك أن تجد هنا عقارات مشتركة كما تريد
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-[80px] lg:py-[120px]">

    <div class="container">
        <div class="grid grid-cols-12 gap-x-[30px]">
            <div class="col-span-12">
                <div class="col-span-12 mb-[70px]">
                    <div class="text-center">
                        <span class="text-secondary text-tiny inline-block mb-2">اتصل بنا
                            .</span>
                        <h2 class="font-recoleta text-white text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-[5px]">تواصل معنا <span class="text-secondary">.</span></h2>
                        <p class="mx-auto max-w-[465px] text-white">
                            يتوفر هنا عدد ضخم من العقارات للبيع والشراء والإيجار. كما تجد هنا ممتلكات للعيش المشترك ، وفرص كثيرة.


                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="grid col-span-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] mb-[-30px]">

            <div class="flex flex-wrap hover: drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px]">
                <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="assets/images/icon/map.png" width="40" height="55" loading="lazy" alt="image icon">
                <div class="flex-1">
                    <h4 class="font-recoleta leading-none text-[28px] text-white mb-[10px]">العنوان . <span
                            class="text-secondary">.</span></h4>
                    <p class="font-light text-[18px] lg:max-w-[230px] text-white">الامارات بجوار برج خليفه</p>
                </div>
            </div>

            <div class="flex flex-wrap hover: drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px]">
                <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="assets/images/icon/phone.png" width="46" height="46" loading="lazy" alt="image icon">
                <div class="flex-1">
                    <h4 class="font-recoleta leading-none text-[28px] text-white mb-[10px]">اتصل بنا . <span
                            class="text-secondary">.</span></h4>
                    <p class="font-light text-[18px] lg:max-w-[230px] text-white">الامارات بجوار برج خليفه</p>
                </div>
            </div>

            <div class="flex flex-wrap hover: drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px] xl:pl-[65px]">
                <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="assets/images/icon/mail.png" width="46" height="52" loading="lazy" alt="image icon">
                <div class="flex-1">
                    <h4 class="font-recoleta leading-none text-[28px] text-white mb-[10px]">راسلنا عبر البريد الإلكتروني<span
                            class="text-secondary">.</span></h4>
                    <p class="font-light text-[18px] lg:max-w-[230px] text-white">
                        <a href="mailto:admin@examples.com" class="hover:text-secondary"> Nts@examples.com</a>
                    </p>
                </div>
            </div>

        </div>


    </div>
</section>
<div>
    <div class="container">
        <form id="contact-form" action="assets/php/contact.php" method="post">
            <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px] items-end">
                <div class="col-span-12 lg:col-span-7 mb-[30px]">
                    <div>
                        <h2 class="font-recoleta text-white text-[24px] sm:text-[28px] leading-[1.277] capitalize mb-[10px]">
                            أرسل رسالة

                        </h2>
                        <p class="max-w-[465px] mb-[40px] text-white">
                            يتوفر هنا عدد ضخم من العقارات للبيع والشراء والإيجار. كما تجد هنا ممتلكات للعيش المشترك ، وفرص كثيرة


                        </p>
                    </div>
                    <div class="grid grid-cols-12 gap-x-[20px] gap-y-[30px]">

                        <div class="col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="الاسم الاول" name="name">
                        </div>

                        <div class="col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="الاسم الاخير" name="name">
                        </div>

                        <div class="col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="رقم الهاتف" name="number">
                        </div>

                        <div class="col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="email" placeholder="عنوان البريد" name="email">
                        </div>

                        <div class="col-span-12">
                            <textarea class="h-[196px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none" name="message" id="textarea" cols="30" rows="10" placeholder="الرساله"></textarea>
                        </div>


                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5 mb-[30px] order-last lg:order-none">
                    <div class="h-[385px] rounded-[6px] overflow-hidden xl:ml-[40px]">
                        <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4814229.011985735!2d-65.89121968758322!3d-7.7486900084225026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91e8605342744385%3A0x3d3c6dc1394a7fc7!2sAmazon%20Rainforest!5e0!3m2!1sen!2sbd!4v1644813708270!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-span-12 mb-[30px] lg:mb-0  order-2 lg:order-none">
                    <button type="submit" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all mb-[30px] lg:mb-0">Contact us</button>
                    <p class="form-messege mt-3"></p>
                </div>
            </div>
        </form>

    </div>
</div>




@endsection
@section('js')

@endsection