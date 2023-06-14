
<!DOCTYPE html>
<html class="no-js" lang="ar" dir="rtl"  >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    @include('layouts.web.head_scripts')

</head>


<body >
    <div class="boxed_wrapper">
        <!-- Header start -->    
        @include('layouts.web.head')
        @yield('page-header')
        @yield('content')
        @include('layouts.web.footer')
    </div>
  @include('layouts.web.footer-scripts')
</body>

</html>