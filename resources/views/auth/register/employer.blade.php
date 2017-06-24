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
		    <form role="form" action="{{route('employer.register')}}" method="POST">
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
		    			<input class="form-control app-input" 
		    				type="password" 
		    				name="password" 
		    				placeholder="{{__('Create password')}}"
		    				value="{{old('password')}}">
	    				@if($errors->has('password'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('password') }}</strong>
	                        </span>
	                    @endif
		    		</div>
		    	</div>
		    	<div class="row form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
		    		<div class="col-sm-4">
		    			<label class="app-label">{{__('common.phone')}} <span class="mandatory-star">*</span></label>
		    		</div>
		    		<div class="col-sm-8">
		    			<input class="form-control app-input" 
		    				type="text" 
		    				name="phone" 
		    				value="{{old('phone')}}">
	    				@if($errors->has('phone'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('phone') }}</strong>
	                        </span>
	                    @endif
		    		</div>
		    	</div>
		    	<div class="row form-group {{ $errors->has('job_title') ? ' has-error' : '' }}">
		    		<div class="col-sm-4">
		    			<label class="app-label">{{__('common.job_title')}} <span class="mandatory-star">*</span></label>
		    		</div>
		    		<div class="col-sm-8">
		    			<input class="form-control app-input" 
		    				type="text" 
		    				name="job_title" 
		    				placeholder="{{__('Your role or position')}}"
		    				value="{{old('job_title')}}">
	    				@if($errors->has('job_title'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('job_title') }}</strong>
	                        </span>
	                    @endif
		    		</div>
		    	</div>
		    	<div class="row form-group {{ $errors->has('company_name') ? ' has-error' : '' }}">
		    		<div class="col-sm-4">
		    			<label class="app-label">{{__('common.company_name')}} <span class="mandatory-star">*</span></label>
		    		</div>
		    		<div class="col-sm-8">
		    			<input class="form-control app-input" 
		    				type="text" 
		    				name="company_name" 
		    				placeholder="{{__('common.company_name')}}"
		    				value="{{old('company_name')}}">
	    				@if($errors->has('company_name'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('company_name') }}</strong>
	                        </span>
	                    @endif
		    		</div>
		    	</div>
		    	<div class="row form-group {{ $errors->has('company_url') ? ' has-error' : '' }}">
		    		<div class="col-sm-4">
		    			<label class="app-label">{{__('common.company_url')}} <span class="mandatory-star">*</span></label>
		    		</div>
		    		<div class="col-sm-8">
		    			<input class="form-control app-input" 
		    				type="text" 
		    				name="company_url" 
		    				placeholder="{{__('http://yourcompany.com')}}"
		    				value="{{old('company_url')}}">
	    				@if($errors->has('company_url'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('company_url') }}</strong>
	                        </span>
	                    @endif
		    		</div>
		    	</div>
		    	<div class="row form-group {{ $errors->has('company_size') ? ' has-error' : '' }}">
		    		<div class="col-sm-4">
		    			<label class="app-label">{{__('common.company_size')}} <span class="mandatory-star">*</span></label>
		    		</div>
		    		<div class="col-sm-8">
		    			<select class="form-control app-input" type="text" name="company_size">
		    				<option value="">{{__('Select one')}}</option>
		    				<option value="1-5" {{old('company_size') == '1-5' ? 'selected' : ''}}>1-5</option>
		    				<option value="6-10" {{old('company_size') == '6-10' ? 'selected' : ''}}>6-10</option>
		    				<option value="11-20" {{old('company_size') == '11-20' ? 'selected' : ''}}>11-20</option>
		    				<option value="21-50" {{old('company_size') == '21-50' ? 'selected' : ''}}>21-50</option>
		    				<option value="51-100" {{old('company_size') == '51-100' ? 'selected' : ''}}>51-100</option>
		    				<option value="100+" {{old('company_size') == '100+' ? 'selected' : ''}}>100+</option>
		    			</select>
		    			@if($errors->has('company_size'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('company_size') }}</strong>
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
