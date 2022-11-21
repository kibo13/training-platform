@extends('layouts.master')

@section('content-head')
    <title>@yield('title-admin') | {{ config('app.name') }} </title>

    <!-- custom -->
    <link rel="stylesheet" href="{{ mix('css/admin.css') }}">
    <script src="{{ mix('js/admin.js') }}" defer></script>
@endsection

@section('content-body')
    <div class="admin">
        <h1>Admin page</h1>
    </div>
@endsection
