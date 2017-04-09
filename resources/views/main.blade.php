<!DOCTYPE html>
<html>
<head>
    @include('partials._head')
</head>

<body>

<div class="page-wrapper">
    @include('partials._mainheader')
    @yield('content')
    @include('partials._footer')
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

@include('partials._javascript')
@yield('scripts')
</body>

</html>