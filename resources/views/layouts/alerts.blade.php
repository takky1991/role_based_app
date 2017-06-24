@if(session('info') || session('success') || session('error') || session('warning') || session('status'))
    @if(session('info'))
        <div class="alert alert-info app-alert" role="alert">
            <div class="container">
                <strong>{{__('common.info')}}!</strong> {{session('info')}}
            </div>
        </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success app-alert" role="alert">
            <div class="container">
                <strong>{{__('common.success')}}!</strong> {{session('success')}}
            </div>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger app-alert" role="alert">
            <div class="container">
                <strong>{{__('common.error')}}!</strong> {{session('error')}}
            </div>
        </div>
    @endif
    @if(session('warning'))
        <div class="alert alert-warning app-alert" role="alert">
            <div class="container">
                <strong>{{__('common.warning')}}!</strong> {{session('warning')}}
            </div>
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success app-alert" role="alert">
            <div class="container">
                <strong>{{__('common.success')}}!</strong> {{ session('status') }}
            </div>
        </div>
    @endif
@endif