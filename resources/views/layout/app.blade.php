@extends('layout.base')


@section('content')
    <x-header />
    <x-nav />

    @yield('page-content')
    <x-footer />
@endsection
