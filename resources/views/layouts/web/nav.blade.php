<div id="offcanvas-mobile-menu" class="offcanvas left-0 transform -translate-x-full fixed font-normal text-sm top-0 z-50 h-screen xs:w-[300px] lg:w-[380px] transition-all ease-in-out duration-300 main-button-color">

    <div class="py-12 pr-5 h-[100vh] overflow-y-auto">
        <!-- close button start -->
        <button class="offcanvas-close text-primary text-[25px] w-10 h-10 absolute right-0 top-0" aria-label="offcanvas">x</button>
        <!-- close button end -->

        <!-- offcanvas-menu start -->

        <nav class="offcanvas-menu">
            <ul>
                <li class="relative block border-b-primary border-b first:border-t first:border-t-primary">
                    <a href="{{ route('home') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">الصفحه الرئيسيه</a>
                </li>
                <li class="relative block border-b-primary border-b">
                    <a href="{{ route('profile.edit') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">الاعدادات</a>
                </li>
                <li class="relative block border-b-primary border-b">
                    <a href="#" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">عقارات</a>
                    <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                        <li>
                            <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="#">عقارات اضيفت حديثا</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                @foreach ($catogerys as $item)
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary" href="properties-v1.html">{{$item->name}}</a>
                                </li>
                                @endforeach

                            </ul>
                        </li>
                        <li>
                            <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="#">الأقتراحات</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li>
                                    <a href="{{ route('newProperty') }}" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">عقارات اضيفت حديثا</a>
                                </li>
                                <li>
                                    <a href="{{ route('topView') }}" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">عقارات مميزه</a>
                                </li>
                            </ul>


                        </li>

                    </ul>
                </li>

                <li class="relative block border-b-primary border-b">
                    <a href="{{ route('blogview') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">المدونه</a>
                </li>
                @guest

                <li class="relative block border-b-primary border-b">
                    <a href="{{ route('login') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">تسجيل الدخول</a>
                </li>
                <li class="relative block border-b-primary border-b">
                    <a href="{{ route('register') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">تسجيل حساب جديد</a>
                </li>
                          
                @endguest
                @auth
                <li class="relative block border-b-primary border-b">
                    <a href="{{ route('logout') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">تسجيل الخروج</a>
                </li>
                @endauth
                <!--  -->
            </ul>
        </nav>
        <!-- offcanvas-menu end -->
        @auth
        <div class="px-5 flex flex-wrap mt-3 sm:hidden">
            <a href="{{ route('propertyinsertweb') }}" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">إضافة عقار</a>
        </div>
        @endauth



    </div>
</div>