<!DOCTYPE html>
<html lang="en">
<head>
    @include('russian_steel_site.includes.head')
</head>
<body>

<div class="site-wrap">

    @include('russian_steel_site.includes.navbar')

    @yield('content')

    @include('russian_steel_site.includes.footer')
</div>

    @include('russian_steel_site.includes.js_scripts_down')

</body>
</html>