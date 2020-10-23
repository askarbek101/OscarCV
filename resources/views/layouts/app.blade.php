<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

    <body id="page-top">
        @include('layouts.header')

        @yield('home')
        @yield('about')
        @yield('service')
        @yield('counter')
        @yield('portfolio')
        @yield('testimonial')

        @include('layouts.footer')
    </body>

    @include('layouts.scripts')

</html>
