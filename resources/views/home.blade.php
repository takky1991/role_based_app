@extends('layouts/main')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! User is {{Auth::user()->roles->first->name}}
                </div>
            </div>
        </div>
    </div>

@endsection