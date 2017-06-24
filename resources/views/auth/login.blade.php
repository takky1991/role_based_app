@extends('layouts/main')

@section('container')
    <div class="app-paper login">
	    <section class="text-align-center">
	    	<h3>{{__('common.login')}}</h3>
	    </section>
	    <hr>
	    <section>
		    <form role="form" action="{{route('login')}}" method="POST">
		    	{{csrf_field()}}
		    	<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
		    		<input class="form-control app-input" 
		    			name="email" 
		    			placeholder="{{__('common.email')}}"
		    			value="{{old('email')}}">
		    		@if($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
		    	</div>
		    	<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
		    		<input class="form-control app-input" 
		    			type="password" 
		    			name="password" 
		    			placeholder="{{__('common.password')}}">
		    		@if($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
		    	</div>
		    	<div class="row">
			    	<div class="col-md-6 form-group">
                        <div class="checkbox m-0">
                            <label>
                                <input class="app-checkbox-input" 
                                	type="checkbox" 
                                	name="remember" 
                                	{{ old('remember') ? 'checked' : '' }}> 
                                	{{__('common.remember_me')}}
                            </label>
                        </div>
	                </div>
                	<div class="col-md-6 form-group">
                        <a class="text-small pull-right" href="{{ route('password.request') }}">
                            {{__('Forgot your password?')}}
                        </a>
                    </div>
		    	</div>
			    <hr>
		    	<div class="row">
		    		<div class="col-sm-6">
		    			<div class="text-small fill-space">{{__('Don\'t have an account?')}}</div>
		    			<a href="{{route('register')}}" class="text-small">{{__('common.register')}}</a>
		    		</div>
		    		<div class="col-sm-6">
		    			<button class="btn btn-default app-btn pull-right call-to-action">{{__('common.login')}}</button>
		    		</div>
		    	</div>
		    </form>
	    </section>
    </div>
@endsection
