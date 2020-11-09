<div class="top-bar">
    <!-- BEGIN: Breadcrumb -->
    @if(Auth::check())
    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="{{url('dashboard')}}" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> {!! $header ?? $__env->yieldContent('header') !!}</div>
    @else
    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="{{url('/')}}" data-turbolinks="false" class="">Back To Home Page</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> {!! $header ?? $__env->yieldContent('header') !!}</div>
    @endif

    <div class="intro-x relative mr-3 sm:mr-6">
        <div class="search hidden sm:block">
            <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
            <i data-feather="search" class="search__icon dark:text-gray-300"></i>
        </div>
        <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon dark:text-gray-300"></i> </a>
        <div class="search-result">
            <div class="search-result__content">
                <div class="search-result__content__title">Pages</div>
                <div class="mb-5">
                    <a href="" class="flex items-center">
                        <div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="inbox"></i> </div>
                        <div class="ml-3">Mail Settings</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>
                        <div class="ml-3">Users & Permissions</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                        <div class="ml-3">Transactions Report</div>
                    </a>
                </div>
                <div class="search-result__content__title">Users</div>
                <div class="mb-5">
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('midone/dist/images/profile-4.jpg')}}">
                        </div>
                        <div class="ml-3">John Travolta</div>
                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">johntravolta@left4code.com</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('midone/dist/images/profile-11.jpg')}}">
                        </div>
                        <div class="ml-3">Tom Cruise</div>
                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">tomcruise@left4code.com</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('midone/dist/images/profile-6.jpg')}}">
                        </div>
                        <div class="ml-3">John Travolta</div>
                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">johntravolta@left4code.com</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('midone/dist/images/profile-13.jpg')}}">
                        </div>
                        <div class="ml-3">Tom Cruise</div>
                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">tomcruise@left4code.com</div>
                    </a>
                </div>
                <div class="search-result__content__title">Products</div>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('midone/dist/images/preview-13.jpg')}}">
                    </div>
                    <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('midone/dist/images/preview-11.jpg')}}">
                    </div>
                    <div class="ml-3">Dell XPS 13</div>
                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">PC &amp; Laptop</div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('midone/dist/images/preview-3.jpg')}}">
                    </div>
                    <div class="ml-3">Samsung Q90 QLED TV</div>
                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('midone/dist/images/preview-5.jpg')}}">
                    </div>
                    <div class="ml-3">Nike Tanjun</div>
                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor</div>
                </a>
            </div>
        </div>
    </div>






    <div class="intro-x relative mr-3 sm:mr-6">

        <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme" aria-label="Toggle color mode">
            <template x-if="!dark">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
            </template>
            <template x-if="dark">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                </svg>
            </template>


        </button>

    </div>
    @if(Auth::check())
    <div class="intro-x dropdown mr-auto sm:mr-6">
        <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
        <div class="notification-content pt-2 dropdown-box">
            <div class="notification-content__box dropdown-box__content box dark:bg-dark-6">
                <div class="notification-content__title">Notifications</div>
                <div class="cursor-pointer relative flex items-center ">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('midone/dist/images/profile-4.jpg')}}">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a>
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('midone/dist/images/profile-11.jpg')}}">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Tom Cruise</a>
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">03:20 PM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('midone/dist/images/profile-6.jpg')}}">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a>
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">06:05 AM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('midone/dist/images/profile-13.jpg')}}">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Tom Cruise</a>
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('midone/dist/images/profile-5.jpg')}}">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-x dropdown w-8 h-8">

        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
        </div>
        <div class="dropdown-box w-56">
            <div class="dropdown-box__content box  bg-gray-900 dark:bg-dark-6 text-white">
                <div class="p-4 border-b  border-gray-600 border-opacity-25  dark:border-dark-3">
                    <div class="font-medium">{{ Auth::user()->name }}</div>
                    <div class="text-xs text-theme-41 dark:text-gray-600">{{Auth::user()->currentTeam->name}}</div>
                </div>
                <div class="p-2">
                    <a href="{{ route('profile.show') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-gray-700 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                    @if (App\Helpers\MainHelper::hasApiFeatures())
                    <a href="{{ route('api-tokens.index') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-gray-700 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Api Tokens </a>
                    @endif
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-gray-700 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                </div>



                <div class="p-2 border-t  border-gray-600 border-opacity-25 dark:border-dark-3">
                    @if (App\Helpers\MainHelper::hasTeamFeatures())
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> {{ __('Team Settings') }}
                    </x-dropdown-link>

                    @can('create', App\Helpers\MainHelper::newTeamModel())
                    <x-dropdown-link href="{{ route('teams.create') }}">
                        <i data-feather="user-plus" class="w-4 h-4 mr-2"></i> {{ __('Create New Team') }}
                    </x-dropdown-link>
                    @endcan
                </div>
                <div class="p-2 border-t  border-gray-600 border-opacity-25 dark:border-dark-3">

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)

                    <form method="POST" action="{{ route('current-team.update') }}">
                        @method('PUT')
                        @csrf

                        <!-- Hidden Team ID -->
                        <input type="hidden" name="team_id" value="{{ $team->id }}">

                        <x-dropdown-link href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                            <div class="flex items-center">
                                @if (Auth::user()->isCurrentTeam($team))
                                <svg class="mr-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                @endif

                                <div class="truncate">{{ $team->name }}</div>
                            </div>
                        </x-dropdown-link>
                    </form>
                    @endforeach


                    @endif
                </div>







                <div class="p-2 border-t  border-gray-600 border-opacity-25 dark:border-dark-3">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-gray-700 dark:hover:bg-dark-3 rounded-md" onclick="event.preventDefault();
                                                this.closest('form').submit();"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="intro-x dropdown mr-auto sm:mr-6">
        <div class="notification cursor-pointer"><a href="{{url('/')}}"> <i data-feather="home" class="notification__icon dark:text-gray-300"></i> </a></div>

    </div>
    @endif


    <!-- END: Account Menu -->
</div>
