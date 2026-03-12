@extends('layout.base')


@section('content')
    <x-header panel="Admin panel" />
    <x-admin-nav />
    @yield('page-content')
    <x-footer />
@endsection
