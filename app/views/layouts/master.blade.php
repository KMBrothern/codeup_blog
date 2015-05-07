<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    @yield('head')
    @include('partials.nav')
    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif

    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif

   <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        @yield('content')

    </body>
@include('partials.footer')
<script>
    $('.alert').fadeOut(7000, 'swing');
</script>
</html>