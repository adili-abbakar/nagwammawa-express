@extends('layout.base')

@section('title', 'Sign In')

@section('content')
    <section id="main" class="">
        <div class="inner">
            <div class="content">
                <header>
                    <h2>Nagwammawa Express</h2>
                    <hr />
                    <h3>Login</h3>
                </header>
                <form method="post" action="{{ route('login.attempt') }}">
                    @csrf

                    @error('login')
                        <div class="error-message">
                            <i class="icon fa-solid fa-exclamation-circle"></i> <span> {{ $message }} </span>
                        </div>
                    @enderror
                    <br>
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <label for="email" class="Label">Email:</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                @error('email')  class="error-boder-color" @enderror placeholder="example@email.com" />
                            @error('email')
                                <small class="error-text-color error-text-size"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="password" class="Label">Password:</label>
                            <input type="password" name="password" id="password"
                                @error('password')  class="error-boder-color" @enderror placeholder="••••••••" />
                            @error('password')
                                <small class="error-text-color error-text-size"> {{ $message }}</small>
                            @enderror

                        </div>
                        <!-- Break -->
                        <div class="inner">
                            <div class="row highlights">
                                <div class="col-6 col-12-small"><a href="{{ route('forgot-password') }}">Forgot password</a>
                                </div>
                                <div class="col-6 col-12-small">
                                    <input type="checkbox" id="checkbox-beta" name="remember">
                                    <label for="checkbox-beta">Remember me</label>
                                </div>
                            </div>
                        </div>

                        <!-- Break -->
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Login" class="primary" /></li>
                                <li>
                                    <a href="{{ route('register') }}" class="button">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
