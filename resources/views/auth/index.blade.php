@extends('layouts.master')

@section('content-head')
    <title>@yield('title-auth') | {{ config('app.name') }} </title>

    <!-- vendors -->
    <link rel="stylesheet" href="{{ asset('css/vendors/bootstrap.min.css') }}">

    <!-- custom -->
    <link rel="stylesheet" href="{{ mix('css/auth.css') }}">
    <script src="{{ mix('js/auth.js') }}" defer></script>
@endsection

@section('content-body')
    <div class="auth">
        @yield('content-auth')
    </div>
@endsection
