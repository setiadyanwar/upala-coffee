<!DOCTYPE html>
<html lang="en">

<head>
    @include('public_view.layouts.header')
</head>

<body id="body" style="background-color: #fafafa;  overflow-x: hidden;">
    @include('public_view.layouts.navbar')

    @yield('content')

    @include('public_view.layouts.footer')
</body>
@include('public_view.layouts.script')

</html>
