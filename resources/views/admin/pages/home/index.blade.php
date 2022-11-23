@extends('admin.index')
@section('title-admin', __('_section.home'))
@section('content-admin')
    <section id="home-index" class="overflow-auto">
        <h3>{{ __('_section.home') }}</h3>

        <p>Добро пожаловать, {{ auth()->user()->role->name }}</p>
    </section>
@endsection
