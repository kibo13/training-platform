@extends('layouts.master')

@section('content-head')
    <title>@yield('title-admin') | {{ config('app.name') }} </title>

    <!-- custom -->
    <link rel="stylesheet" href="{{ mix('css/admin.css') }}">
    <script src="{{ mix('js/admin.js') }}" defer></script>
@endsection

@section('content-body')
    <div class="admin">
        <h1>
            @if(auth()->user()->hasRole('admin'))
                Добро пожаловать, Администратор!
            @elseif(auth()->user()->hasRole('teacher'))
                Добро пожаловать, Учитель!
            @else
                Добро пожаловать, Ученик!
            @endif
        </h1>


        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
@endsection
