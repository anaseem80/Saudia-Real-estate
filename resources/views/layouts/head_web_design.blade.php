
<header id="sticky-header"  class="relative lg:py-[30px] z-[25] secondary-sticky">
    <div class="container"  >
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="flex flex-wrap items-center justify-between">
                    <a href="index.html" class="block">
                        <img src="{{ URL::asset('BLOSSOM.png') }}" style="width: 250px; height:100%;">
                    </a>
                    <nav class="flex flex-wrap items-center">
                        <ul class="hidden lg:flex flex-wrap items-center font-recoleta text-[16px] xl:text-[18px] leading-none text-black">

                            <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                <a href="{{ route('home') }}" class="transition-all hover:text-secondary">الصفحه الرئيسيه</a>
                            </li> 

                            <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                <a href="#" class="transition-all hover:text-secondary">عقارات</a>
                                <ul class="list-none main-button-color drop-shadow-[0px_6px_10px_rgba(0,0,0,0.2)] rounded-[12px] flex flex-wrap w-[890px] absolute top-[120%] left-1/2 translate-x-[-40%] xl:translate-x-[-45%] transition-all
                                    group-hover:top-[100%] invisible group-hover:visible opacity-0 group-hover:opacity-100 px-[40px] py-[45px]
                                    bg-contain bg-left-top bg-no-repeat
                                    " style="background-image: url({{ URL::asset('unar.png') }});">


                                    <li>
                                        <ul>
                                            <li class="text-primary underline font-recoleta mb-[30px]">عقارات</li>

                                            @foreach ($catogerys as $item)
                                            <li class="mb-[25px] last:mb-0">
                                                <a href="{{ route('morepropertyCato', $item->id) }}" class="font-recoleta text-[14px] hover:text-secondary">{{$item->name}}</a>
                                            </li>
                                            @endforeach
                                            
                                          

                                        </ul>
                                    </li>



                                    <li class="mr-[70px]">
                                        <ul>
                                            <li class="text-primary underline font-recoleta mb-[30px]">اقتراحات</li>
                                            <li class="mb-[25px] last:mb-0">
                                                <a href="{{ route('newProperty') }}" class="font-recoleta text-[14px] hover:text-secondary">عقارات اضيفت حديثا</a>
                                            </li>

                                            <li class="mb-[25px] last:mb-0">
                                                <a href="{{ route('topView') }}" class="font-recoleta text-[14px] hover:text-secondary">عقارات مميزه</a>
                                            </li>

                                        </ul>
                                    </li>


                                </ul>
                            </li>





                            @auth
                            <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                <a href="{{ route('profile.edit') }}" class="transition-all hover:text-secondary">الاعدادات</a>
                            </li>
                        @endauth
                        
                        @guest
                            <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                <a href="{{ route('login') }}" class="transition-all hover:text-secondary">الاعدادات</a>
                            </li>
                        @endguest
                        


                            <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                <a href="{{ route('blogview') }}" class="transition-all hover:text-secondary">المدونه</a>
                  
  
                            </li>

                            <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                <a href="conactUs" class="transition-all hover:text-secondary">تواصل معنا</a>

                            </li>

                        </ul>

                        <ul class="flex flex-wrap items-center">
                            <li class="sm:mr-5 xl:mr-[20px] relative group"><a href="#">
                                    <img src="{{ URL::asset('logoam.png') }}" loading="lazy" width="100" height="100" alt="avater">
                                </a>

                                <ul class="list-none bg-white drop-shadow-[0px_6px_10px_rgba(0,0,0,0.2)] rounded-[12px] flex flex-wrap flex-col w-[180px] absolute top-[120%] sm:left-1/2 sm:-translate-x-1/2 transition-all
        group-hover:top-[60px] invisible group-hover:visible opacity-0 group-hover:opacity-100 left-0
        
        ">
                                    @guest
                                    <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                        <a href="{{ route('login') }}" class="font-recoleta leading-[1.571] text-[14px] text-black p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-t-[12px]">تسجيل الدخول</a>
                                    </li>
                                    @endguest
                                    @auth
                                    <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                        <a href="{{ route('logout') }}" class="font-recoleta leading-[1.571] text-[14px] text-black p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-b-[12px]">تسجيل الخروج</a>
                                    </li>
                                    @endauth

                                </ul>
                            </li>



                            @auth
                            <li>
                                <a href="{{ route('propertyinsertweb') }}" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] main-button-color after:bg-primary after:rounded-md after:transition-all">اضافة عقار</a>
                            </li>
                        @endauth
                        
                            @guest

                            <li>
                                <a href="{{ route('login') }}" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] main-button-color after:bg-primary after:rounded-md after:transition-all">اضافة عقار</a>
                            </li>
                            
                            @endguest
                        
                            
                            <li class="ml-2 sm:ml-5 lg:hidden">
                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle flex text-[#016450] hover:text-secondary">
                                    <svg width="24" height="24" class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                                    </svg>
                                </a>
                            </li>


                        </ul>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>

@include('layouts.nav')