<div class="search hidden sm:block">
    <input type="search" class="search__input input placeholder-theme-13" placeholder="Search..." data-list=".searchitems" id="search-highlight">
    <i data-feather="search" class="search__icon dark:text-gray-300"></i>
</div>
<a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon dark:text-gray-300"></i> </a>
<div class="search-result">

    <div class="search-result__content searchitems" id="searchitems">
        
            <div class="search-result__content__title">Pages</div>
            <div class="mb-5 searchitems">

                @if(!Auth::check())
                <a href="{{url('/')}}" data-turbolinks="false" class="flex items-center mt-2">
                    <div :class="{ 'text-gray-200': dark }" class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="home"></i> </div>
                    <div :class="{ 'text-gray-200': dark }" class="ml-3"> Back to Home Page </div>
                </a>
                <a href="{{url('projects')}}" class="flex items-center mt-2">
                    <div :class="{ 'text-gray-200': dark }" class="w-8 h-8 bg-theme-17 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="box"></i> </div>
                    <div :class="{ 'text-gray-200': dark }" class="ml-3">Your Projects</div>
                </a>
                <a href="{{url('chat')}}" class="flex items-center mt-2">
                    <div :class="{ 'text-gray-200': dark }" class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="message-square"></i> </div>
                    <div :class="{ 'text-gray-200': dark }" class="ml-3"> Live Chat</div>
                </a>
                @else

                <a href="{{url('dashboard')}}" class="flex items-center mt-2">
                    <div :class="{ 'text-gray-200': dark }" class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="home"></i> </div>
                    <div :class="{ 'text-gray-200': dark }" class="ml-3"> Dashboard </div>
                </a>
                @if(is_admin())
                <a href="{{url('projects')}}" class="flex items-center mt-2">
                    <div :class="{ 'text-gray-200': dark }" class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="box"></i> </div>
                    <div :class="{ 'text-gray-200': dark }" class="ml-3"> Projects</div>
                </a>
                @else
                <a href="{{url('projects')}}" class="flex items-center mt-2">
                    <div :class="{ 'text-gray-200': dark }" class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="box"></i> </div>
                    <div :class="{ 'text-gray-200': dark }" class="ml-3">Your Projects</div>
                </a>
                @endif
                <a href="{{url('chat')}}" class="flex items-center mt-2">
                    <div :class="{ 'text-gray-200': dark }" class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="message-square"></i> </div>
                    <div :class="{ 'text-gray-200': dark }" class="ml-3"> Live Chat</div>
                </a>
                @if(is_admin())
                <a href="{{url('users')}}" class="flex items-center mt-2">
                    <div :class="{ 'text-gray-200': dark }" class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>
                    <div :class="{ 'text-gray-200': dark }" class="ml-3"> Users</div>
                </a>



                <a href="{{url('settings')}}" class="flex items-center mt-2">
                    <div :class="{ 'text-gray-200': dark }" class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="settings"></i> </div>
                    <div :class="{ 'text-gray-200': dark }" class="ml-3"> Settings</div>
                </a>
                @endif

                @endif

            </div>
        
            @if(count($searchusers)>0)
              
            <div class="search-result__content__title">Users</div>
            <div class="mb-5 searchitems">
                @foreach($searchusers as $user)
                <a href="{{url('users?q='.$user->email)}}" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="{{$user->name}}" class="rounded-full" src="{{$user->profile_photo_url}}">
                    </div>
                    <div class="ml-3">{{$user->name}}</div>
                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">{{$user->email}}</div>
                </a>

                @endforeach
            </div>
            @endif
        
            <div class="search-result__content__title">Projects</div>
            @foreach($searchprojects as $key => $value)
            <a href="" class="flex items-center mt-2">
                <div class="w-8 h-8 image-fit">
                    <img alt="{{$value->name}}" class="rounded-full" src="{{\App\Models\User::find($value->user_id)->profile_photo_url}}">
                </div>
                <div class="ml-3">{{$value->name}}</div>
                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">{{$value->purpose}}</div>
            </a>
            @endforeach
        

    </div>
</div>
