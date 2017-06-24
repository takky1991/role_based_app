<ul class="nav nav-tabs app-tabs">
    <li role="presentation" class="{{Route::currentRouteName() == 'register' ? 'active' : ''}}">
    	<a href="{{route('register')}}">{{__('common.talent')}}</a>
    </li>
    <li role="presentation" class="{{Route::currentRouteName() == 'employer.register' ? 'active' : ''}}">
    	<a href="{{route('employer.register')}}">{{__('common.employer')}}</a>
    </li>
</ul>