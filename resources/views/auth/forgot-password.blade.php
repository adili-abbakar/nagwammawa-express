@extends('layout.base')

@section('title', 'Forgot Password')
<section id="main" class="">
    <div class="inner">
        <div class="content">
            <header>
                <h2>Nagwammawa Express</h2>
                <hr />
                <h4>Forgot password</h4>
            </header>
            <form method="post" action="/reset-password.html">
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <input type="email" name="email" id="name" value="" placeholder="Email" />
                    </div>

                    <!-- Break -->

                    <!-- Break -->
                    <div class="col-12">
                        <ul class="actions">
                            <li>
                                <input type="submit" value="Send Reset Link" class="primary" />
                            </li>
                            <li>
                                <a href="{{ route('login') }}" class="button">Back to Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@section('content')

@endsection
