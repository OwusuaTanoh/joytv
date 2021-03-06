<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JoyTV - Home')</title>
    @include('front.essentials.links')
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <header>
        @if (Auth::user()->role!=='admin')
        @include('front.essentials.navbar')
        @else
        @include('backend.essentials.navbar')
        @endif
    </header>

    @yield('content')
    
    <br><br><br><br>
    @include('front.essentials.footer')

    @include('front.essentials.scripts')
</body>
</html>