@extends('layouts.master')

@section('content-head')
    <title>@yield('title-platform') | {{ config('app.name') }} </title>

    <!-- custom -->
    <link rel="stylesheet" href="{{ mix('css/platform.css') }}">
    <script src="{{ mix('js/platform.js') }}" defer></script>
@endsection

@section('content-body')
    <div class="platform">
        <h1>Platform page</h1>
    </div>
@endsection
