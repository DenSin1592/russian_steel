<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.includes.head')
</head>
<body>

<div class="site-wrap">

    @include('layouts.includes.navbar_site')

    @yield('content')

    @include('layouts.includes.footer_site')
</div>

    @include('layouts.includes.js_scripts')

</body>
</html>