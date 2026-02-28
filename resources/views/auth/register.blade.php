@extends('layout.base')

@section('title', 'Sign Up')

@section('content')
    <section id="main" class="">
        <div class="inner">
            <div class="content">
                <header>
                    <h2>Nagwammawa Express</h2>
                    <hr />
                    <h3>Register</h3>
                </header>
                <form method="post" action="{{ route('register.attempt') }}">
                    @csrf
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <label for="name" class="label">Name:</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                @error('name')  class="error-boder-color" @enderror placeholder="Name Surname Lastname" />
                            @error('name')
                                <small class="error-text-color error-text-size"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="email" class="label">Email:</label>
                            <input type="email" name="email" id="" value="{{ old('email') }}"
                                @error('email')  class="error-boder-color" @enderror placeholder="eaxmple@email.com" />
                            @error('email')
                                <small class="error-text-color error-text-size"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-6 col-12-xsmall phone-cnt">
                            <label for="email" class="label">Phone:</label>
                            <input type="tel" name="phone_number" id="phone" value="{{ old('phone_number') }}"
                                @error('phone_number')  class="error-boder-color" @enderror placeholder="+123 123456789" />
                            @error('phone_number')
                                <small class="error-text-color error-text-size"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="password" class="label">Password:</label>
                            <input type="password" name="password" id="password"
                                @error('password')  class="error-boder-color" @enderror placeholder="••••••••" />
                            @error('password')
                                <small class="error-text-color error-text-size"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="confirm_password" class="label">Confirm Password:</label>
                            <input type="password" name="password_confirmation" id="confirm_password"
                                placeholder="••••••••" />
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const input = document.querySelector("#phone");
            const iti = window.intlTelInput(input, {
                initialCountry: "ng",
                preferredCountries: ["ng", "gh", "ci", "sn"],
                nationalMode: false, // force international format
                separateDialCode: true, // show country code visibly
                utilsScript: "{{ asset('js/intl-tel-input/utils.js') }}"
            });

            document.querySelector("form").addEventListener("submit", function() {
                // Always submit the full international number
                input.value = iti.getNumber(intlTelInputUtils.numberFormat.E164);
            });
        });
    </script>


@endsection
