@extends('layout.base')


@section('content')
    <!-- Header -->
    <header id="header">
        <a class="logo" href="{{ route('home') }}">Nagwammawa Express</a>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>
    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="index.html">Home</a></li>
            <li><a href="/about.html">About</a></li>
            <li><a href="/services.html">Services</a></li>
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
    @yield('page-content')

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <div class="content">
                <section>
                    <h3>Nagwammawa Express</h3>
                    <p>
                        Safe, reliable, and efficient transport & logistics solutions.
                    </p>
                </section>
                <section>
                    <h4>Quick Links</h4>
                    <ul class="alt">
                        <li><a href="/about.html">About</a></li>
                        <li><a href="">Services.</a></li>
                        <li><a href="#">Contact.</a></li>
                        <li><a href="/industries.html">Industries.</a></li>
                        <li><a href="/track-shipments.html">Track Shipments</a></li>
                    </ul>
                </section>
                <section>
                    <h4>Magna sed ipsum</h4>
                    <ul class="plain">
                        <li>
                            <a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon fa-github">&nbsp;</i>Github</a>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="copyright">
                &copy; 2026 Nagwammawa Express. All rights reserved.
            </div>
        </div>
    </footer>
@endsection
