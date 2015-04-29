<!DOCTYPE html>
<html lang="en">
    @include('partials.head') 
    @yield('head')
    @include('partials.nav')
   <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        @yield('content')

    </body>
@include('partials.footer')
</html>