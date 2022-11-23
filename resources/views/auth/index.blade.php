@extends('layouts.master')

@section('content-head')
    <title>@yield('title-auth') | {{ config('app.name') }} </title>

    <!-- custom -->
    <link rel="stylesheet" href="{{ mix('css/auth.css') }}">
    <script src="{{ mix('js/auth.js') }}" defer></script>
@endsection

@section('content-body')
    <div id="auth" class="auth">
        @yield('content-auth')
    </div>
@endsection
