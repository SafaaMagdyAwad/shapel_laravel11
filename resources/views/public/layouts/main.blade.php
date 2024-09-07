<!DOCTYPE html>
<html>
@include('public.includes.head')
<body>
    @include('public.includes.header')

    @yield('content')
    
    @include('public.includes.info')
    @include('public.includes.footer')
    @include('public.includes.scriptFiles')

</body>

</html>

