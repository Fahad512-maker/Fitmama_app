<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('page_title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon.icon')}}"/>
    @include('admin.layouts.style')
    @stack('styles')
</head>
<body class="sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"><div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

     @include('admin.Header.navbar')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
         @include('admin.sidebar.sidebar')
        
            @yield('content')

    </div>
    <!-- END MAIN CONTAINER -->
      @include('admin.layouts.script')
     @stack('scripit')

</body>
</html>