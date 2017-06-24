@extends('layouts/error')

@section('container')
    <div class="app-paper login">
	    <section class="text-align-center">
	    	<h1>403</h1>
	    	<h3>{{__('common.access_forbidden')}}</h3>
	    </section>
	    <hr>
    </div>
@endsection
