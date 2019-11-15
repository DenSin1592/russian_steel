<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.includes.head')
</head>
<body>

<div class="site-wrap">

    @include('website.includes.navbar')

    @yield('content')

    @include('website.includes.footer')
</div>

    @include('website.includes.js_scripts_down')

</body>
</html>