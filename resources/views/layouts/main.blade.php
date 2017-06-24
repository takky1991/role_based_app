@extends('layouts/app')

@section('header')
	@include("includes/header")
@endsection
@section('content')
    <div class="container main">
        @yield('container')
    </div>
@endsection