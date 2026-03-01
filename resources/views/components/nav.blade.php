<nav id="menu">
    <ul class="links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="/industries.html">Industries </a></li>
        <li><a href="/track-shipments.html">Track Shipment</a></li>
        <li><a href="/login.html">Contact</a></li>
        <li><a href="/login.html">Get Quote</a></li>
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
        @endguest
        @auth
            <li>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="button fit">Logout</button>
                </form>
            </li>
        @endauth
    </ul>
</nav>
