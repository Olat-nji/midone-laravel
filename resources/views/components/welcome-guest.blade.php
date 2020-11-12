<div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        General Report
                    </h2>
                    <a class="ml-auto flex text-theme-1 dark:text-theme-10 cursor-pointer" wire:click="$refresh"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> <span wire:loading.remove>Reload Data</span> <span wire:loading> Reloading Data ...</span></a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">

                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="refresh-cw" class="report-box__icon text-theme-11"></i>
                                    {{-- <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% Lower than last month"> 2% <i data-feather="chevron-down" class="w-4 h-4"></i> </div>
                                    </div> --}}
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{$unanswered}}</div>
                                <div class="text-base text-gray-600 mt-1">Unanswered Orders</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="monitor" class="report-box__icon text-theme-10"></i>
                                    {{-- <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% Higher than last month"> 12% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                    </div> --}}
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{$allProjects->get()->count()}}</div>
                                <div class="text-base text-gray-600 mt-1">Total Projects</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @if(count($allProjects->get())==0)
            <div class="col-span-12  mt-3" x-data="{ open: true }">
                <div x-show="open">

                    <div class="mt-5 intro-x">
                        <div class="box zoom-in">
                            <div class="tiny-slider" id="important-notes">

                                <div class="p-5">
                                    <div class="text-base font-medium truncate"> Skylevel Concepts</div>
                                    {{-- <div class="text-gray-500 mt-1">{{$message->created_at->diffForHumans()}}
                                </div> --}}
                                <div class="text-gray-600 text-justify mt-1">Hello {{explode(' ', auth()->user()->name, 2)[0]}}, We see that you have not created a project yet. Would you like to create one now?</div>
                                <div class="font-medium  mt-5">
                                    <a type="button" class="mr-2 button button--sm bg-gray-700 text-white mt-3 hover:bg-gray-800 border border-transparent active:bg-gray-800 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" href="projects/create">Yes </a>
                                    <button class="button button--sm border border-gray-300 dark:border-dark-5 text-gray-600 ml-auto" @click.away="open = false">Dismiss</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            @endif
        </div>


        <!-- END: General Report -->
        <!-- BEGIN: Weekly Top Products -->
        @if(count($projects)>0)
        <div class="col-span-12 mt-6">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Projects
                </h2>
                <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                    <button class="button box flex items-center text-gray-700 dark:text-gray-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                    <button class="ml-3 button box flex items-center text-gray-700 dark:text-gray-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                </div>
            </div>
            <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                <table class="table table-report sm:mt-2">
                    <thead>
                        <tr>

                            <th class="whitespace-no-wrap">PROJECT NAME</th>
                            <th class="whitespace-no-wrap">BUDGET</th>
                            <th class="text-center whitespace-no-wrap">URGENCY</th>
                            <th class="text-center whitespace-no-wrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $key => $project)
                        <tr class="intro-x">

                            <td>
                                <a href="" class="font-medium whitespace-no-wrap">{{$project->name}}</a>
                                <div class="text-gray-600 text-xs whitespace-no-wrap">{{$project->created_at->diffForHumans()}}</div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-no-wrap">{{$project->budget}}</a>
                                <div class="text-gray-600 text-xs whitespace-no-wrap">{{$project->user->name}}</div>
                            </td>
                            <td class="w-40">
                                <div class="flex items-center justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i>Start {{$project->urgency}} </div>
                            </td>

                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>

                                </div>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                {{$projects->links('admin.components.pagination')}}

                <select class="w-20 input box mt-3 sm:mt-0" wire:model="projectPages">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
        </div>
        @endif
        <!-- END: Weekly Top Products -->
    </div>

    <div class="col-span-12 xxl:col-span-3 xxl:border-l border-theme-5 -mb-10 pb-10">
        <div class="xxl:pl-6 grid grid-cols-12 gap-6">
            <!-- BEGIN: Transactions -->
            @if(count($allProjects->where('status','In Progress')->get())>0)
            <div class="col-span-12 md:col-span-6 xl:col-span-6 xxl:col-span-12 mt-3 xxl:mt-8">
                <div class="intro-x flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Ongoing Projects
                    </h2>
                </div>
                <div class="mt-5">

                    @foreach($allProjects->where('status','In Progress')->get() as $project)
                    <div class="intro-x">
                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="{{$project->user->name}}" src="{{ $project->user->profile_photo_url}}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium">{{$project->name}}</div>
                                <div class="text-gray-600 text-xs">{{$project->created_at->diffForHumans()}}</div>
                            </div>
                            <div class="text-theme-9">{{$project->progress}}% Done</div>
                        </div>
                    </div>
                    @endforeach

                    <a href="{{url('projects')}}" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a>
                </div>
            </div>
            @endif

            <div class="col-span-12 md:col-span-6 xl:col-span-6 xxl:col-span-12 mt-3">
                <div class="intro-x flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Recent Activities
                    </h2>
                    <a href="" class="ml-auto text-theme-1 dark:text-theme-10 truncate">See all</a>
                </div>
                <div class="report-timeline mt-5 relative">
                    @foreach($users as $key => $user)
                    <div class="intro-x relative flex items-center mb-3">
                        <div class="report-timeline__image">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="{{$user->name}}" src="{{$user->profile_photo_url}}">
                            </div>
                        </div>
                        <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                            <div class="flex items-center">
                                @if(Auth::user()->id==$user->id)
                                <div class="font-medium">You</div>
                                @else
                                <div class="font-medium">{{$user->name}}</div>
                                @endif
                                <div class="text-xs text-gray-500 ml-auto">{{$user->created_at->diffForHumans()}}</div>
                            </div>
                            <div class="text-gray-600 mt-1"> Created an Account</div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- END: Recent Activities -->
            <!-- BEGIN: Important Notes -->

            <!-- END: Important Notes -->
            <!-- BEGIN: Schedules -->

            <!-- END: Schedules -->
        </div>
    </div>
</div>
