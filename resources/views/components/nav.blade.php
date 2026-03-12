<nav id="menu">
    <ul class="links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="{{ route('industries') }}">Industries </a></li>
        <li><a href="{{ route('track-shipment') }}">Track Shipment</a></li>
        <li><a href="/login.html">Contact</a></li>
        <li><a href="{{ route('quotes.index') }}">My Quotes</a></li>
        <li><a href="{{ route('quotes.create') }}">Get Quote</a></li>
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
        @endguest
        @auth
            @if (Auth::user()->role === 'admin')
                <li><a href="{{ route('admin-panel.dashboard') }}">Admin Panel</a></li>
            @endif
            <li>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="button fit">Logout</button>
                </form>
            </li>
        @endauth
    </ul>
</nav>
