@extends('layouts/main')

@section('container')
    <div class="app-paper">
	    @include('auth/register/includes/tabs')
	    <section class="text-align-center">
	    	<br>
	    	<h3>We Bring Job Offers to You</h3>
	    	<h5>Join thousands of people who’ve found their dream job using Hired.</h5>
	    	<br>
	    </section>
	    <hr>
	    <section>
		    <form role="form" action="{{route('register')}}" method="POST">
		    	{{csrf_field()}}
		    	<div class="row form-group {{ $errors->has('name') ? ' has-error' : '' }}">
		    		<div class="col-sm-4">
		    			<label class="app-label">{{__('common.first_name')}} <span class="mandatory-star">*</span></label>
		    		</div>
		    		<div class="col-sm-8">
		    			<input class="form-control app-input" 
		    				type="text" 
		    				name="name" 
		    				placeholder="{{__('Enter first name')}}"
		    				value="{{old('name')}}">
		    			@if($errors->has('name'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('name') }}</strong>
	                        </span>
	                    @endif
		    		</div>
		    	</div>
		    	<div class="row form-group {{ $errors->has('surname') ? ' has-error' : '' }}">
		    		<div class="col-sm-4">
		    			<label class="app-label">{{__('common.last_name')}} <span class="mandatory-star">*</span></label>
		    		</div>
		    		<div class="col-sm-8">
		    			<input class="form-control app-input" 
		    				type="text" 
		    				name="surname" 
		    				placeholder="{{__('Enter last name')}}"
		    				value="{{old('surname')}}">
		    			@if($errors->has('surname'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('surname') }}</strong>
	                        </span>
	                    @endif
		    		</div>
		    	</div>
		    	<div class="row form-group {{ $errors->has('email') ? ' has-error' : '' }}">
		    		<div class="col-sm-4">
		    			<label class="app-label">{{__('common.email')}} <span class="mandatory-star">*</span></label>
		    		</div>
		    		<div class="col-sm-8">
		    			<input class="form-control app-input"  
		    				name="email" 
		    				placeholder="{{__('you@example.com')}}"
		    				value="{{old('email')}}">
		    			@if($errors->has('email'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('email') }}</strong>
	                        </span>
	                    @endif
		    		</div>
		    	</div>
		    	<div class="row form-group {{ $errors->has('password') ? ' has-error' : '' }}">
		    		<div class="col-sm-4">
		    			<label class="app-label">{{__('common.password')}} <span class="mandatory-star">*</span></label>
		    		</div>
		    		<div class="col-sm-8">
		    			<input class="form-control app-input" type="password" name="password" placeholder="{{__('Create password')}}">
		    			@if($errors->has('password'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('password') }}</strong>
	                        </span>
	                    @endif
		    		</div>
		    	</div>
			    <hr>
		    	<div class="row">
		    		<div class="col-sm-6">
		    			<div class="text-small fill-space">{{__('Already have an account?')}}</div>
		    			<a href="{{route('login')}}" class="text-small">{{__('common.sign_in')}}</a>
		    		</div>
		    		<div class="col-sm-6">
		    			<button class="btn btn-default app-btn pull-right call-to-action">{{__('common.create_account')}}</button>
		    		</div>
		    	</div>
		    </form>
	    </section>
    </div>
@endsection
