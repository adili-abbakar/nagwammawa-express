<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title') | {{ config('app.name') }} </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/intl-tel-input/intlTelInput.css') }}">

</head>

<body class="is-preload">
    @yield('content')
    <script>
        const input = document.querySelector("#phone");
        window.intlTelInput(input, {
            initialCountry: "ng", // Nigeria by default
            utilsScript: "{{ asset('js/intl-tel-input/utils.js') }}"
        });
    </script>

    <script src="{{ asset('js/intl-tel-input/intlTelInput.min.js') }}"></script>
    <script src="{{ asset('js/intl-tel-input/utils.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"></script> --}}

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/browser.min.js') }}"></script>
    <script src="{{ asset('js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
