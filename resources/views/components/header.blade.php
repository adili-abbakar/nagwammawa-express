<header id="header">
    @isset($panel)
        <a class="logo" href="{{ route('home') }}">{{ $panel }}</a>
    @else
        <a href="{{ route('home') }}" class="logo-container">
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="">
        </a>
    @endisset

    <nav>
        <a href="#menu">Menu</a>
    </nav>
</header>
