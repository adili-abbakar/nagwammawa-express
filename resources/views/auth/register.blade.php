@extends('layout.base')

@section('title', 'Sign Up')

@section('content')
    <section id="main" class="">
        <div class="inner">
            <div class="content">
                <header>
                    <h2>Nagwammawa Express</h2>
                    <hr />
                    <h4>Register</h4>
                </header>
                <form method="post" action="{{ route('register.attempt') }}">
                    @csrf
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <input type="text" name="name" id="name" value="" placeholder="Name" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <input type="email" name="email" id="email" value="" placeholder="Email" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <input type="password" name="password" id="password" value="" placeholder="password" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <input type="password" name="confirm_password" id="confirm_password" value=""
                                placeholder="Confirm password" />
                        </div>
                        <!-- Break -->

                        <!-- Break -->
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Register" class="primary" /></li>
                                <li><a href="{{ route('login') }}" class="button">Back to Login</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
