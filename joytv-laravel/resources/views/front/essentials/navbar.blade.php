<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.html"><img src="img/logo.jpg" alt="" style="width: 40px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ $url ?? '' }}">
        <a class="nav-link" href="{{ route('joytv.home') }}">Home</a>
        </li>
        <li class="nav-item {{ $url1 ?? '' }}">
        <a class="nav-link" href="{{ route('front.about') }}">About</a>
        </li>
        <li class="nav-item {{ $url2 ?? '' }}">
            <a class="nav-link" href="{{ route('front.services') }}">Services</a>
        </li>
        <li class="nav-item {{ $url3 ?? '' }}">
            <a class="nav-link" href="{{ route('front.projects.index') }}">Projects</a>
        </li>
        <li class="nav-item {{ $url4 ?? '' }}">
            <a class="nav-link" href="{{ route('front.events.index') }}">Events</a>
        </li>
        <li class="nav-item {{ $url5 ?? '' }}">
            <a class="nav-link" href="{{ route('front.contact.index') }}">Contact</a>
        </li>
        <li class="nav-item {{ $url6 ?? '' }}">
            <a class="nav-link" href="{{ route('front.news.index') }}">News</a>
        </li>
    </ul>
    <ul class="navbar-nav navbar-right mr-auto">
        @if (!Auth::user())
        <li class="nav-item">
            <a class="nav-link btn btn-outline-primary" href="{{ route('login') }}"><i class="fa fa-sign-in-alt"></i> Login</a>
        </li>
        <li class="nav-item" style="margin-left: 5px;">
            <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}"><i class="fa fa-user-circle"></i> Register</a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link btn btn-outline-primary" href="{{ route('home') }}"><i class="fa fa-user-circle"></i> Profile</a>
        </li>
        <li class="nav-item" style="margin-left: 5px;">
            <a class="nav-link btn btn-outline-primary" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt"></i> Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        @endif
    </ul>
    </div>
</nav>