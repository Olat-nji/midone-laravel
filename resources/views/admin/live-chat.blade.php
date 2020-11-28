<div>
    @section("header")

    <a href="" class="breadcrumb--active"> {{ __('Live Chat') ??''}}</a>

    @endsection

    {{-- <x-live-chat :users="$users" :messages="$messages" :current="$current" :chatting="$chatting"/> --}}


    <div x-data="{ chatting: @entangle('chatting')}">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Chat
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button class="button text-white bg-theme-1 shadow-md mr-2" @click="chatting = null">Start New Chat</button>
                <div class="dropdown ml-auto sm:ml-0">
                    <button class="dropdown-toggle button px-2 box text-gray-700 dark:text-gray-300">
                        <span class="w-5 h-5 flex items-center justify-center" wire:ignore> <i class="w-4 h-4" data-feather="plus"></i> </span>
                    </button>
                    <div class="dropdown-box w-40">
                        <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" wire:ignore> <i data-feather="users" class="w-4 h-4 mr-2"></i> Create Group </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" wire:ignore> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y chat grid grid-cols-12 gap-5 mt-5">
            <!-- BEGIN: Chat Side Menu -->
            <div class="col-span-12 lg:col-span-4 xxl:col-span-3">
                <div class="intro-y pr-1">
                    <div class="box p-2">
                        <div class="chat__tabs nav-tabs justify-center flex" wire:ignore> <a data-toggle="tab" data-target="#chats" href="javascript:;" class="flex-1 py-2 rounded-md text-center active">Chats</a> <a data-toggle="tab" data-target="#friends" href="javascript:;" class="flex-1 py-2 rounded-md text-center">Users</a></div>
                    </div>
                </div>
                <div class="tab-content" wire:ignore>
                    <div class="tab-content__pane active" id="chats">
                        <div class="pr-1">
                            <div class="box px-5 pt-5 pb-5 lg:pb-0 mt-5">
                                <div class="relative text-gray-700 dark:text-gray-300">
                                    <input type="text" class="input input--lg w-full bg-gray-200 pr-10 placeholder-theme-13" placeholder="Search for messages or users..." wire:model="q">
                                    <i class="w-4 h-4 hidden sm:absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                                </div>
                                <div class="overflow-x-auto scrollbar-hidden">
                                    <div class="flex mt-5">
                                        @foreach($users as $key => $user)
                                        <a wire:click="now_chatting({{$user->id??''}})" class="w-10 mr-4 cursor-pointer">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full">
                                                <img alt="{{$user->name??''}}" class="rounded-full" src="{{$user->profile_photo_url??''}}">
                                                @if(is_online($user->id)) <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div> @endif
                                            </div>
                                            <div class="text-xs text-gray-600 truncate text-center mt-2">{{$user->name??''}}</div>
                                        </a>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat__chat-list overflow-y-auto scrollbar-hidden pr-1 pt-1 mt-4" wire:poll>
                            @foreach($recipients as $key => $recipient)
                            @if($recipient->chat->messages->count()!=0)
                            <div class="intro-x cursor-pointer box relative flex items-center p-5 " wire:click="now_chatting({{$recipient->toUser->id??''}})">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="{{$recipient->toUser->name??''}}" class="rounded-full" src="{{$recipient->toUser->profile_photo_url??''}}">
                                    @if(is_online($recipient->toUser->id)) <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div> @endif
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">

                                        <a href="javascript:;" class="font-medium truncate mr-5">{{$recipient->chat->messages->last()->user->name??''}}</a>
                                        <div class="text-xs text-gray-500  ml-auto whitespace-no-wrap" wire:poll.60s> {{$recipient->chat->messages->last()->created_at->diffForHumans() ?? ''}} </div>
                                    </div>
                                    <div class="w-full truncate text-gray-600">@if($recipient->chat->messages->last()->user->id==auth()->user()->id) You : @endif {{Illuminate\Support\Str::words($recipient->chat->messages->last()->message,10,'...')??''}}</div>
                                </div>
                                @if($recipient->chat->seen) <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">{{$recipient->chat->where('seen',false)->get()->count()??''}}</div> @endif
                            </div>
                            @endif

                            @endforeach


                        </div>
                    </div>

                    <div class="tab-content__pane" id="friends">
                        <div class="pr-1">
                            <div class="box p-5 mt-5">
                                <div class="relative text-gray-700 dark:text-gray-300">
                                    <input type="text" class="input input--lg w-full bg-gray-200 pr-10 placeholder-theme-13" placeholder="Search for messages or users..." wire:model="q">
                                    <i class="w-4 h-4 hidden sm:absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                                </div>

                            </div>
                        </div>
                        <div class="chat__user-list overflow-y-auto scrollbar-hidden pr-1 pt-1">

                            @foreach($users as $key => $user)
                            <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1" wire:click="now_chatting({{$user->id??''}})">
                                    <img alt="{{$user->name??''}}" class="rounded-full" src="{{$user->profile_photo_url??''}}">
                                    @if(is_online($user->id)) <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div> @endif
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center"> <a wire:click="now_chatting({{$user->id??''}})" class="font-medium">{{$user->name}}</a> </div>
                                    {{-- <div class="w-full truncate text-gray-600">Last seen 2 hours ago</div> --}}
                                </div>
                                <div class="dropdown ml-auto">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" wire:ignore> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700 dark:text-gray-300"></i> </a>
                                    <div class="dropdown-box w-40">
                                        <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" wire:ignore> <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" wire:ignore> <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            <!-- END: Chat Side Menu -->
            <!-- BEGIN: Chat Content -->
            <div class="intro-y col-span-12 lg:col-span-8 xxl:col-span-9">
                <div class="chat__box box">
                    <!-- BEGIN: Chat Active -->
                    {{-- @if($chatting!=null) --}}
                    <div class="h-full flex flex-col" x-show="chatting!=null">
                        <div class="flex flex-col sm:flex-row border-b border-gray-200 dark:border-dark-5 px-5 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit relative">
                                    <img alt="{{$current->name??''}}" class="rounded-full" src="{{$current->profile_photo_url??''}}">
                                </div>
                                <div class="ml-3 mr-auto">
                                    <div class="font-medium text-base">{{$current->name??''}}</div>
                                    <div class="text-gray-600 text-xs sm:text-sm">@if(is_online($chatting))Online @endif</div>
                                </div>
                            </div>
                            <div class="flex items-center sm:ml-auto mt-5 sm:mt-0 border-t sm:border-0 border-gray-200 pt-3 sm:pt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
                                <a href="javascript:;" class="w-5 h-5 text-gray-500" wire:ignore> <i data-feather="search" class="w-5 h-5"></i> </a>
                                <a href="javascript:;" class="w-5 h-5 text-gray-500 ml-5" wire:ignore> <i data-feather="user-plus" class="w-5 h-5"></i> </a>
                                <div class="dropdown ml-auto sm:ml-3">
                                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500" wire:ignore> <i data-feather="more-vertical" class="w-5 h-5"></i> </a>
                                    <div class="dropdown-box w-40">
                                        <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" wire:ignore> <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" wire:ignore> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-y-scroll scrollbar-hidden px-5 pt-5 flex-1" wire:poll>
                            @foreach($current_messages as $key => $value)
                            @if($value->sender!=auth()->user()->id)
                            <div class="clear-both"></div>
                            <div class="chat__box__text-box flex items-end float-left mb-4">
                                <div class="w-10 h-10 hidden sm:block flex-none image-fit relative mr-5">
                                    <img class="rounded-full" src="{{$value->user->profile_photo_url}}">
                                </div>
                                <div class="bg-gray-200 dark:bg-dark-5 px-4 py-3 text-gray-700 dark:text-gray-300 rounded-r-md rounded-t-md">
                                    {{$value->message}}
                                    <div class="mt-1 text-xs text-gray-600" wire:poll.60s>{{$value->created_at->diffForHumans()}}</div>
                                </div>
                                <div class="hidden sm:block dropdown ml-3 my-auto">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4 text-gray-500" wire:ignore> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                                    <div class="dropdown-box w-40">
                                        <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" wire:ignore> <i data-feather="corner-up-left" class="w-4 h-4 mr-2"></i> Reply </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" wire:ignore> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear-both"></div>
                            @else

                            <div class="chat__box__text-box flex items-end float-right mb-4">
                                <div class="hidden sm:block dropdown mr-3 my-auto">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4 text-gray-500" wire:ignore> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                                    <div class="dropdown-box w-40">
                                        <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="corner-up-left" class="w-4 h-4 mr-2"></i> Reply </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-theme-1 px-4 py-3 text-white rounded-l-md rounded-t-md">
                                    {{$value->message}}
                                    <div class="mt-1 text-xs text-theme-25 " wire:poll.60s>{{$value->created_at->diffForHumans()}}</div>
                                </div>
                                <div class="w-10 h-10 hidden sm:block flex-none image-fit relative ml-5">
                                    <img class="rounded-full" src="{{$value->user->profile_photo_url}}">
                                </div>
                            </div>
                            <div class="clear-both"></div>
                            @endif

                            @endforeach



                        </div>

                        @include('admin.components.emoji-keyboard')

                    </div>
                    {{-- @endif --}}
                    <!-- END: Chat Active -->
                    <!-- BEGIN: Chat Default -->

                    <div class="h-full flex items-center" x-show="chatting===null">
                        <div class="mx-auto text-center">
                            <div class="w-16 h-16 flex-none image-fit rounded-full overflow-hidden mx-auto">
                                <img src="{{auth()->user()->profile_photo_url??''}}">
                            </div>
                            <div class="mt-3">
                                <div class="font-medium">Hey, {{auth()->user()->name??''}}</div>
                                <div class="text-gray-600 mt-1">Please select a chat to start messaging.</div>
                            </div>
                        </div>
                    </div>

                    <!-- END: Chat Default -->
                </div>
            </div>
            <!-- END: Chat Content -->
        </div>
    </div>

</div>



</div>
