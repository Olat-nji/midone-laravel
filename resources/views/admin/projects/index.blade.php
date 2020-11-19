<div>
    @section("header")

    <a href="" class="breadcrumb--active"> {{ __('Projects') }}</a>

    @endsection

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Projects
        </h2>

        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="{{url('projects/create')}}" class="button text-white bg-theme-1 shadow-md mr-2">New Project</a>

        </div>
    </div>
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Item List -->
        <div class="intro-y col-span-12 lg:col-span-12">
            <div class="lg:flex intro-y">
                <div class="relative text-gray-700 dark:text-gray-300">
                    <input type="text" class="input input--lg w-full lg:w-64 box pr-10 placeholder-theme-13" placeholder="Search Projects..." wire:model.lazy="q">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
                <select class="input input--lg box w-full lg:w-auto mt-3 lg:mt-0 ml-auto">
                    <option>Newest to Oldest</option>
                    <option>A to Z</option>
                    <option>Z to A</option>
                    <option>Lat</option>
                    <option>Highest Price</option>
                </select>
            </div>


        </div>
        <!-- END: Item List -->
        <!-- BEGIN: Ticket -->

        <!-- END: Ticket -->
    </div>

    @if(count($projects)!=0) <div class=" text-center md:block mx-auto text-gray-600 mt-5">{{$projects->links('admin.components/showing')}}</div> @endif
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Blog Layout -->

        @if(count($projects)==0)
        <div class="col-span-12 text-center pt-5" wire:loading.remove>
            No Projects Found ...
        </div>
        @endif

        {{-- Loading Icon --}}
        <div class="col-span-12 text-center  flex justify-center " wire:loading.class="p-10">
            <div wire:loading>
                <i data-loading-icon="three-dots" class=" w-8 h-8" ></i>
            </div>
        </div>


        @foreach($projects as $key => $project)
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
            <div class="flex items-center border-b border-gray-200 dark:border-dark-5 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    <img alt="{{$project->user->name}}" class="rounded-full" src="{{$project->user->profile_photo_url}}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">{{$project->user->name}}</a>
                    <div class="flex text-gray-600 truncate text-xs mt-1"> <a class="text-theme-1 dark:text-theme-10 inline-block truncate" href="">{{$project->status}}</a> <span class="mx-1">•</span> {{$project->created_at->diffForHumans()}} </div>
                </div>
                <div class="dropdown ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500 dark:text-gray-300"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-box w-40">
                        <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                            <a href="{{url("projects/".$project->id.'/edit')}}" class="cursor-pointer flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit</a>
                            <button wire:click="confirmDelete" class="cursor-pointer flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">

                <a href="{{url('projects/'.$project->id)}}" class="block font-medium text-base mt-5">{{$project->name}}</a>
                <div class="text-gray-700 dark:text-gray-600 mt-2">{!! Illuminate\Support\Str::words($project->description, 10, '...') !!}</div>
                <div class="flex flex-wrap lg:flex-no-wrap items-center justify-center p-5">
                    <div class="w-full  mb-4 lg:mb-0 mr-auto">
                        <div class="flex">
                            <div class="text-gray-600 text-xs mr-auto">Progress</div>
                            <div class="text-xs font-medium">{{$project->progress}}</div>
                        </div>
                        <div class="w-full h-1 mt-2 bg-gray-400 dark:bg-dark-1 rounded-full">
                            <div class=" h-full bg-theme-1 dark:bg-theme-10 rounded-full" style="width:{{$project->progress}}%"></div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        @endforeach


        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagination -->
        @if(count($projects)!=0)
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
            {{$projects->links('admin.components.pagination')}}

            <select class="w-20 input box mt-3 sm:mt-0" wire:model="pages">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        @endif
        <!-- END: Pagination -->
    </div>

    @foreach($projects as $key => $project)
    <x-dialog-modal wire:model="confirmingDelete">
        <x-slot name="title">
            {{ __('Are You Sure You want to Delete?') }}
        </x-slot>

        <x-slot name="content">
            {{ __('This information would be lost forever!') }}


        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingDelete')" wire:loading.attr="disabled">
                {{ __('Nevermind') }}
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="delete({{$project->id}})" wire:loading.attr="disabled">
                {{ __('Delete') }}
                </x-button>
        </x-slot>
    </x-dialog-modal>
    @endforeach
</div>
