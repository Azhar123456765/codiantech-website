<!DOCTYPE html>
<html lang="en">
<head>
     <!-- ========== Meta Tags ========== -->
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tanda - IT Solutions Template">

    <!-- ========== Page Title ========== -->
    <title>@yield('title')</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}" type="image/x-icon">
    @include('inc.style')
</head>
<body>
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    @if($header2 != true)
    @include('inc.header')
    @endif
    
    @yield('content')

    @include('inc.footer')
    @include('inc.script')
</body>
</html>