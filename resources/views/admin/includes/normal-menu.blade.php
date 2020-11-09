@if(!Auth::check())
<nav class="side-nav">
    <a href="{{url('/')}}" data-turbolinks="false" class="intro-x flex items-center pl-5 pt-4">
        <img alt="{{config('app.name', 'Skylevel')}}" class="w-6" src="{{asset('public/img/apple-touch-icon.png')}}">
        <span :class="{ 'text-gray-200': dark }" class="hidden xl:block  text-lg ml-3"> SL <span class="font-medium">Concepts</span> </span>
    </a>
    <div class="border-opacity-25 border-gray-600 border b-t-0 my-6" style="border-top:0.5px;"></div>
    <ul>
        <li>
            <a href="{{url('/')}}" data-turbolinks="false"  class="side-menu">
                <div :class="{ 'text-gray-200': dark }" class="side-menu__icon text-gray-800  "> <i data-feather="home"></i> </div>
                <div :class="{ 'text-gray-200': dark }" class="side-menu__title text-gray-800  "> Back to Home Page </div>
            </a>
        </li>
        
        <li>
            <a href="{{url('projects')}}" class="side-menu @if(request()->routeIs('projects')) side-menu--active @endif">
                <div :class="{ 'text-gray-200': dark }" class="side-menu__icon text-gray-800  "> <i data-feather="box"></i> </div>
                <div :class="{ 'text-gray-200': dark }" class="side-menu__title text-gray-800  ">Your Projects</div>
            </a>
        </li>
        

        <li>
            <a href="{{url('chat')}}" class="side-menu @if(request()->routeIs('live-chat')) side-menu--active @endif">
                <div :class="{ 'text-gray-200': dark }" class="side-menu__icon text-gray-800  "> <i data-feather="message-square"></i> </div>
                <div :class="{ 'text-gray-200': dark }" class="side-menu__title text-gray-800  "> Live Chat</div>
            </a>
        </li>


    </ul>
</nav>

@else
<nav class="side-nav">
    <a href="{{url('/')}}" data-turbolinks="false" class="intro-x flex items-center pl-5 pt-4">
        <img alt="{{config('app.name', 'Skylevel')}}" class="w-6" src="{{asset('public/img/apple-touch-icon.png')}}">
        <span :class="{ 'text-gray-200': dark }" class="hidden xl:block  text-lg ml-3"> SL <span class="font-medium">Concepts</span> </span>
    </a>
    <div class="border-opacity-25 border-gray-600 border b-t-0 my-6" style="border-top:0.5px;"></div>
    <ul>
        <li>
            <a href="{{url('dashboard')}}" class="side-menu @if(request()->routeIs('dashboard')) side-menu--active @endif">
                <div :class="{ 'text-gray-200': dark }" class="side-menu__icon text-gray-800  "> <i data-feather="home"></i> </div>
                <div :class="{ 'text-gray-200': dark }" class="side-menu__title text-gray-800  "> Dashboard </div>
            </a>
        </li>
        @if(auth()->user()->CurrentTeam->id==1)
        <li>
            <a href="{{url('projects')}}" class="side-menu @if(request()->routeIs('projects')) side-menu--active @endif">
                <div :class="{ 'text-gray-200': dark }" class="side-menu__icon text-gray-800  "> <i data-feather="box"></i> </div>
                <div :class="{ 'text-gray-200': dark }" class="side-menu__title text-gray-800  "> Projects</div>
            </a>
        </li>
        @else
        <li>
            <a href="{{url('projects')}}" class="side-menu @if(request()->routeIs('projects')) side-menu--active @endif">
                <div :class="{ 'text-gray-200': dark }" class="side-menu__icon text-gray-800  "> <i data-feather="box"></i> </div>
                <div :class="{ 'text-gray-200': dark }" class="side-menu__title text-gray-800  ">Your Projects</div>
            </a>
        </li>
        @endif


        <li>
            <a href="{{url('chat')}}" class="side-menu @if(request()->routeIs('live-chat')) side-menu--active @endif">
                <div :class="{ 'text-gray-200': dark }" class="side-menu__icon text-gray-800  "> <i data-feather="message-square"></i> </div>
                <div :class="{ 'text-gray-200': dark }" class="side-menu__title text-gray-800  "> Live Chat</div>
            </a>
        </li>

        @if(auth()->user()->CurrentTeam->id==1)
        <li>
            <a href="{{url('users')}}" class="side-menu @if(request()->routeIs('users')) side-menu--active @endif">
                <div :class="{ 'text-gray-200': dark }" class="side-menu__icon text-gray-800  "> <i data-feather="users"></i> </div>
                <div :class="{ 'text-gray-200': dark }" class="side-menu__title text-gray-800  "> Users</div>
            </a>
        </li>

        <li>
            <a href="{{url('settings')}}" class="side-menu @if(request()->routeIs('settings')) side-menu--active @endif">
                <div :class="{ 'text-gray-200': dark }" class="side-menu__icon text-gray-800  "> <i data-feather="settings"></i> </div>
                <div :class="{ 'text-gray-200': dark }" class="side-menu__title text-gray-800  "> Settings</div>
            </a>
        </li>
        @endif

    </ul>
</nav>
@endif