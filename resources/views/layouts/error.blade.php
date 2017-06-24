@extends('layouts/app')

@section('header')
	@include("includes/header_basic")
@endsection
@section('content')
    <div class="container main">
        @yield('container')
    </div>
@endsection