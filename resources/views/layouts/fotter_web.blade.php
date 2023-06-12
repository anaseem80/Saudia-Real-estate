@include('layouts.email_section')
<footer class="footer bg-[#ECFAF7] pt-[80px] lg:pt-[200px] pb-[80px] lg:pb-[110px] font-light bg-no-repeat" style="background-image: url({{ URL::asset('assets/images/footer/pattern.png') }});">
    <div class="container">
        <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px]">
            <div class="col-span-12 sm:col-span-6 lg:col-span-4 mb-[30px]">
                <a href="index.html" class="block mb-[25px]">
                    <img src="{{ URL::asset('BLOSSOM.png') }}" style="width: 300px; height:100%;">
                </a>
                <p class="mb-5 xl:mb-40 max-w-270 text-white">
                    {{$company_data->biographical_information}}
                    {{-- ما هو دور شركة blossomblue
                    تأمين سير عملية شراء العقار بكل سلاسة، مع جميع المعاملات المترتبة.
                    - ا، ووضع اللمسات الفنية على العقار.
                    - التسويق للعقار الذي تريد استثماره، وإيجاد عدد من العملاء المناسبين..
                    - الإشراف على عملية الاستثمار، وفق أحدث أساليب الإدارة والتنظيم المتبعة. --}}
                  </p>
                  
                <p class="text-sm hidden md:block text-white">&copy; <a href="https://www.nanots.ae/" class="text-secondary">NTS.</a> All Rights Reserved - Privacy Policy</p>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 mb-[30px]">
                <h3 class="font-recoleta font-normal text-[22px] leading-[1.222] text-primary mb-[20px] lg:mb-[30px]">المعلومات<span class="text-secondary">.</span></h3>
                <ul class="text-[16px] leading-none mb-[-20px]">
                    <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary" href="about">معلومات عنا</a></li>
                    <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary" href="terms">الشروط و الاحكام</a></li>
                    <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary" href="#">وسائل الدفع التي نوفرها</a></li>
                    <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary" href="blogview">المدونه</a></li>
                </ul>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 mb-[30px]">
                <h3 class="font-recoleta font-normal text-[22px] leading-[1.222] text-primary mb-[20px] lg:mb-[30px]">روابط سريعه<span class="text-secondary">.</span></h3>
                <ul class="text-[16px] leading-none mb-[-20px]">
                    <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary" href="add-properties.html">كيف تختار العقار المناسب لك</a></li>
                    <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary" href="#"> أسرار للإستثمار العقاري الناجح وأهم النصائح</a></li>
                    <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary" href="#">خطوات هى دليلك الكامل لتشطيب شقتك</a></li>
                    <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary" href="agent.html">السكن فى شقق الروف بين المميزات والعيوب</a></li>

                </ul>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-2 mb-[30px]">
                <h3 class="font-recoleta font-normal text-[22px] leading-[1.222] text-primary mb-[20px] lg:mb-[30px]">العنوان<span class="text-secondary">.</span></h3>
                <p class="text-white">
                    
                    {{$company_data->company_address}}
                    {{-- الامارات بجوار برج خليفه --}}
                </p>
                <ul class="inline-flex items-center justify-center mt-[20px]">
                    <li class="first:ml-0 ml-[15px]"><a href="{{$company_data->facebook}}" class="w-[26px] h-[26px] transition-all rounded-full bg-primary flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-white hover:bg-secondary">
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.36 4.20156V3.12156C4.36 2.65356 4.468 2.40156 5.224 2.40156H6.16V0.601562H4.72C2.92 0.601562 2.2 1.78956 2.2 3.12156V4.20156H0.760002V6.00156H2.2V11.4016H4.36V6.00156H5.944L6.16 4.20156H4.36Z" fill="currentColor"></path>
                            </svg>

                        </a></li>
                    <li class="ml-[15px]"><a href="{{$company_data->twitter}}" class="w-[26px] h-[26px] transition-all rounded-full bg-primary flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-white hover:bg-secondary">
                            <svg width="14" height="12" viewBox="0 0 14 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.6667 1.93957C13.1669 2.15783 12.6376 2.30093 12.096 2.36424C12.6645 2.0304 13.092 1.50098 13.2987 0.874908C12.76 1.18846 12.1725 1.40931 11.5607 1.52824C11.303 1.25838 10.9931 1.04383 10.6498 0.897693C10.3065 0.751554 9.93709 0.676884 9.564 0.678241C8.05333 0.678241 6.82866 1.88491 6.82866 3.37157C6.82866 3.58224 6.85266 3.78824 6.89933 3.98491C5.81571 3.93337 4.75474 3.65651 3.78411 3.172C2.81348 2.68749 1.9545 2.00596 1.26199 1.17091C1.01921 1.58051 0.891605 2.04809 0.892662 2.52424C0.893126 2.96955 1.00455 3.40773 1.21685 3.79917C1.42916 4.19061 1.73566 4.52298 2.10866 4.76624C1.67498 4.75224 1.25068 4.63646 0.869995 4.42824V4.46157C0.869995 5.76691 1.81333 6.85557 3.06333 7.10357C2.8284 7.16591 2.58638 7.1975 2.34333 7.19757C2.16666 7.19757 1.99533 7.18091 1.828 7.14757C2.00672 7.68619 2.34873 8.15578 2.80654 8.49113C3.26435 8.82648 3.81522 9.01095 4.38266 9.01891C3.40937 9.7686 2.21454 10.1736 0.985995 10.1702C0.764662 10.1702 0.547328 10.1569 0.333328 10.1329C1.5875 10.9267 3.04172 11.3471 4.52599 11.3449C9.55733 11.3449 12.308 7.24024 12.308 3.68091L12.2987 3.33224C12.8352 2.95469 13.2988 2.4828 13.6667 1.93957Z" fill="currentColor"></path>
                            </svg>
  

                        </a></li>
                    <li class="ml-[15px]"><a href="{{$company_data->google}}" class="w-[26px] h-[26px] transition-all rounded-full bg-primary flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-white hover:bg-secondary">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 3.79646C5.22656 3.79646 3.79531 5.22771 3.79531 7.00115C3.79531 8.77458 5.22656 10.2058 7 10.2058C8.77344 10.2058 10.2047 8.77458 10.2047 7.00115C10.2047 5.22771 8.77344 3.79646 7 3.79646ZM7 9.08396C5.85312 9.08396 4.91719 8.14802 4.91719 7.00115C4.91719 5.85427 5.85312 4.91834 7 4.91834C8.14687 4.91834 9.08281 5.85427 9.08281 7.00115C9.08281 8.14802 8.14687 9.08396 7 9.08396ZM10.3359 2.91834C9.92187 2.91834 9.5875 3.25271 9.5875 3.66677C9.5875 4.08084 9.92187 4.41521 10.3359 4.41521C10.75 4.41521 11.0844 4.0824 11.0844 3.66677C11.0845 3.56845 11.0652 3.47107 11.0277 3.38021C10.9901 3.28935 10.935 3.2068 10.8654 3.13727C10.7959 3.06775 10.7134 3.01262 10.6225 2.97506C10.5316 2.93749 10.4343 2.91821 10.3359 2.91834ZM13.2469 7.00115C13.2469 6.13865 13.2547 5.28396 13.2063 4.42302C13.1578 3.42302 12.9297 2.53552 12.1984 1.80427C11.4656 1.07146 10.5797 0.844898 9.57969 0.796461C8.71719 0.748023 7.8625 0.755836 7.00156 0.755836C6.13906 0.755836 5.28437 0.748023 4.42344 0.796461C3.42344 0.844898 2.53594 1.07302 1.80469 1.80427C1.07187 2.53709 0.84531 3.42302 0.796873 4.42302C0.748435 5.28552 0.756248 6.14021 0.756248 7.00115C0.756248 7.86209 0.748435 8.71834 0.796873 9.57927C0.84531 10.5793 1.07344 11.4668 1.80469 12.198C2.5375 12.9308 3.42344 13.1574 4.42344 13.2058C5.28594 13.2543 6.14062 13.2465 7.00156 13.2465C7.86406 13.2465 8.71875 13.2543 9.57969 13.2058C10.5797 13.1574 11.4672 12.9293 12.1984 12.198C12.9312 11.4652 13.1578 10.5793 13.2063 9.57927C13.2562 8.71834 13.2469 7.86365 13.2469 7.00115ZM11.8719 10.6855C11.7578 10.9699 11.6203 11.1824 11.4 11.4011C11.1797 11.6215 10.9687 11.759 10.6844 11.873C9.8625 12.1996 7.91094 12.1261 7 12.1261C6.08906 12.1261 4.13594 12.1996 3.31406 11.8746C3.02969 11.7605 2.81719 11.623 2.59844 11.4027C2.37812 11.1824 2.24062 10.9715 2.12656 10.6871C1.80156 9.86365 1.875 7.91209 1.875 7.00115C1.875 6.09021 1.80156 4.13709 2.12656 3.31521C2.24062 3.03084 2.37812 2.81834 2.59844 2.59959C2.81875 2.38084 3.02969 2.24177 3.31406 2.12771C4.13594 1.80271 6.08906 1.87615 7 1.87615C7.91094 1.87615 9.86406 1.80271 10.6859 2.12771C10.9703 2.24177 11.1828 2.37927 11.4016 2.59959C11.6219 2.8199 11.7594 3.03084 11.8734 3.31521C12.1984 4.13709 12.125 6.09021 12.125 7.00115C12.125 7.91209 12.1984 9.86365 11.8719 10.6855Z" fill="currentColor"></path>
                            </svg>
                        </a></li>
                </ul>
                
                <p class="text-sm md:hidden mt-[20px]">&copy; <a href="https://www.nanots.ae/" class="text-secondary">NTS</a> All Rights Reserved - Privacy Policy</p>. 
           
           
            </div>
        </div>
    </div>
</footer>