@extends('layouts/main')

@section('container')
    <div class="app-paper login">
        <section class="text-align-center">
            <h3>{{__('common.reset_password')}}</h3>
        </section>
        <hr>
        <section>
            <form role="form" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">   
                    <input class="form-control app-input" 
                        name="email" 
                        placeholder="{{__('common.email')}}"
                        value="{{ $email or old('email') }}">
                    @if($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">   
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
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">   
                    <input class="form-control app-input"
                        type="password" 
                        name="password_confirmation" 
                        placeholder="{{__('common.confirm_password')}}">
                    @if($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary app-btn">
                        {{__('common.send')}}
                    </button>
                </div>
            </form>
        </section>
    </div>
@endsection