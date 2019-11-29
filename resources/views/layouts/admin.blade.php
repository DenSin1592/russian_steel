<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.includes.head')
</head>
<body>

<div class="site-wrap">

    @include('layouts.includes.navbar_admin')

    @yield('content')


</div>

@include('layouts.includes.js_scripts')

</body>
