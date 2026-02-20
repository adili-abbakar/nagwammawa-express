@extends('layout.base')

@section('title', 'Login')

@section('content')
    <section id="main" class="">
        <div class="inner">
            <div class="content">
                <header>
                    <h2>Nagwammawa Express</h2>
                    <hr />
                    <h4>Login</h4>
                </header>
                <form method="post" action="#">
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <input type="email" name="email" id="name" value="" placeholder="Email" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <input type="password" name="password" id="email" value="" placeholder="password" />
                        </div>
                        <!-- Break -->

                        <!-- Break -->
                        <div class="col-12">
                            <p><a href="/forgot-password.html">Forgot password</a></p>
                            <ul class="actions">
                                <li><input type="submit" value="Login" class="primary" /></li>
                                <li>
                                    <a href="/register.html" class="button">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
