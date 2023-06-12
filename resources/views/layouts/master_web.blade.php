
<!DOCTYPE html>
<html class="no-js" lang="ar" dir="rtl"  >

<head>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="Bery-Real Estate Listing Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @include('layouts.head_web')

</head>


<body class="font-ubuntu text-body text-tiny">
    <div class="overflow-x-hidden">
        <!-- Header start -->    
        @include('layouts.head_web_design')
        @yield('page-header')
        @yield('content')
        @include('layouts.fotter_web')
        
        <a id="scrollUp" class="w-12 h-12 rounded-full bg-primary text-white fixed right-5 bottom-16 flex flex-wrap items-center justify-center transition-all duration-300 z-10" href="#" aria-label="scroll up">

            <svg width="25" height="auto" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M6.101 261.899L25.9 281.698c4.686 4.686 12.284 4.686 16.971 0L198 126.568V468c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12V126.568l155.13 155.13c4.686 4.686 12.284 4.686 16.971 0l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L232.485 35.515c-4.686-4.686-12.284-4.686-16.971 0L6.101 244.929c-4.687 4.686-4.687 12.284 0 16.97z" />
            </svg>

        </a>
    </div>
  @include('layouts.fotter_secript')
</body>

</html>