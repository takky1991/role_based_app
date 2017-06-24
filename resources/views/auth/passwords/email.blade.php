@extends('layouts/main')

@section('container')
    <div class="app-paper login">
        <section class="text-align-center">
            <h3>{{__('common.reset_password')}}</h3>
        </section>
        <hr>
        <section>
            <form role="form" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">   
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
                <div class="form-group">
                    <button type="submit" class="btn btn-primary app-btn">
                        {{__('common.send')}}
                    </button>
                </div>
            </form>
        </section>
    </div>
@endsection
