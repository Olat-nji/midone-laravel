<div>
    @section("header")

    <a href="{{url('projects')}}">{{ __('Projects') }}</a>


    @endsection


    <div class="intro-y news p-5 box mt-8">

        <h2 class="intro-y font-medium text-xl sm:text-2xl">
            {{$project->name}}
        </h2>
        <div class="intro-y text-gray-700 dark:text-gray-600 mt-3 text-xs sm:text-sm"> {{$project->created_at->DiffForHumans()}} <span class="mx-1">•</span> {{$project->status}} <span class="mx-1">•</span> <a class="text-theme-1 dark:text-theme-10" href="{{url('projects/'.$project->id.'/edit')}}">Edit</a></div>
        <div class="intro-y mt-6">

            @if($project->image!='')
            <div class="news__preview image-fit">
                <img alt="{{$project->name}}" class="rounded-md" src="{{$project->image}}">
            </div>
            @endif

        </div>
        <div class="intro-y flex relative pt-16 sm:pt-6 items-center pb-6">
            <a href="" class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full border border-gray-500 dark:border-dark-5 dark:bg-dark-5 dark:text-gray-300 text-gray-600 mr-3 tooltip" title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>

            <div class="absolute sm:relative -mt-12 sm:mt-0 w-full flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm">
                <div class="intro-x mr-1 sm:mr-3"> Budget: <span class="font-medium">₦{{number_format($project->budget)}}</span> </div>
                @if(Auth::user()->CurrentTeam->id==1) <span class="mx-1">•</span>
                <div class="intro-x mr-1 sm:mr-3"> Start Project: <span class="font-medium">{{$project->urgency}}</span> </div>@endif
                <div class="intro-x sm:mr-3 ml-auto"> Progress: <span class="font-medium">{{$project->progress}}%</span> </div>
            </div>
            <a href="" class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full bg-theme-14 dark:bg-dark-5 dark:text-gray-300 text-theme-10 ml-auto sm:ml-0 tooltip" title="Progress"> <i data-feather="refresh-ccw" class="w-3 h-3"></i> </a>





        </div>
        <div class="intro-y text-justify leading-relaxed">
            <p class="mb-5">Purpose : {{$project->purpose}} @if($project->purpose=='Launch a New Website')
                @if($project->no_of_products!='') <span class="mx-1">•</span> Ecommerce : Yes <span class="mx-1">•</span> Number of Products : {{$project->no_of_products}} <span class="mx-1">•</span> Other Vendors : {{$project->vendors}} @endif
                @else
                <span class="mx-1">•</span> Extent of Redesign : {{$project->extent_of_redesign}} <span class="mx-1">•</span> Website Url : {{$project->website_url}}
                @endif
            </p>
            <p class="mb-5">{{$project->description}}</p>
        </div>
        <div class="intro-y flex text-xs sm:text-sm flex-col sm:flex-row items-center mt-5 pt-5 border-t border-gray-200 dark:border-dark-5">
            <div class="flex items-center">
                <div class="w-12 h-12 flex-none image-fit">
                    <img class="rounded-full" src="{{$project->user->profile_photo_url}}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="{{url('users?q='.$project->user->email)}}" class="font-medium">{{$project->user->name}}</a>
                    <div class="text-gray-600">{{$project->team->name}}</div>
                </div>
            </div>
            <div class="flex items-center text-gray-700 dark:text-gray-600 sm:ml-auto mt-5 sm:mt-0">
                Delete this Project?
                <a class="w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center border dark:border-dark-5 ml-2 text-gray-500 zoom-in tooltip" title="Delete" wire:click="confirmDelete"> <i class="w-3 h-3 fill-current" data-feather="trash"></i> </a>
            </div>
        </div>

        <div class="intro-y mt-5 pt-5 border-t border-gray-200 dark:border-dark-5">
            <div class="text-base sm:text-lg font-medium" wire:poll>{{$comments->count()}} Responses</div>
            <div class="news__input relative mt-5">
                <i data-feather="message-circle" class="w-5 h-5 absolute my-auto inset-y-0 ml-6 left-0 text-gray-600"></i>
                <form wire:submit.prevent="newComment">
                    <textarea class="input w-full bg-gray-200 pl-16 py-6 placeholder-theme-13 resize-none" rows="1" placeholder="Post a comment..." wire:model.defer="comment"></textarea>


                    <div class="mt-2 flex items-center">
                        @error('comment')<a class="text-theme-6 text-left pl-2">{{$message}}</a>@enderror
                        <div class="text-right lg:text-right  ml-auto flex items-center">
                            <button class="button button--md text-white bg-theme-1" wire:loading.remove wire:target="newComment" type="submit">Post</button>
                            <button class="button button--md text-white bg-theme-1 bg-opacity-50" wire:loading wire:target="newComment">Posting ...</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="intro-y mt-20 pb-10" wire:poll>
            @foreach($comments as $key => $comment)
            <div class="mt-5 pt-5 border-t border-gray-200 dark:border-dark-5">
                <div class="flex">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit">
                        <img class="rounded-full" src="{{$comment->user->profile_photo_url}}">
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex items-center"> <a href="{{url('users?q='.$comment->user->email)}}" class="font-medium">{{$comment->user->name}}</a> <a href="" class="ml-auto text-xs text-gray-600">Reply</a> </div>
                        <div class="text-gray-600 text-xs sm:text-sm" wire:ignore>{{$comment->created_at->diffForHumans()}}</div>
                        <div class="mt-2">{{$comment->comment}}</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <!-- END: Comments -->
    </div>

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

</div>
