<div>
    @section("header")

    <a href="" class="breadcrumb--active"> {{ __('Orders') }}</a>

    @endsection

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Orders
        </h2>


    </div>
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Item List -->
        <div class="intro-y col-span-12 lg:col-span-12">
            <div class="lg:flex intro-y">
                <div class="relative text-gray-700 dark:text-gray-300">
                    <input type="text" class="input input--lg w-full lg:w-64 box pr-10 placeholder-theme-13" placeholder="Search item..." wire:model="q">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>

            </div>


        </div>
        <!-- END: Item List -->
        <!-- BEGIN: Ticket -->

        <!-- END: Ticket -->
    </div>


    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Blog Layout -->

        @foreach($orders as $key => $order)
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
            <div class="flex items-center border-b border-gray-200 dark:border-dark-5 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    <img alt="{{$order->first()->user->name}}" class="rounded-full" src="{{$order->first()->user->profile_photo_url}}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">DEEORDER-{{$order->first()->order_id}}</a>
                    <div class="flex text-gray-600 truncate text-xs mt-1"> <a class="text-theme-1 dark:text-theme-10 inline-block truncate" href="">{{$order->first()->user->name}}</a> <span class="mx-1">•</span> {{$order->first()->details->created_at->diffForHumans()}} </div>
                </div>
                <div class="dropdown ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500 dark:text-gray-300"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-box w-40">
                        <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                            <a href="{{url("orders/".$order->first()->order_id.'/edit')}}" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit</a>
                            <a wire:click="confirmDelete" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">



                <div class="flex flex-wrap lg:flex-no-wrap items-center justify-center p-3">

                    <div class="w-full  mb-4 lg:mb-0 mr-auto">
                        <div class="flex">
                            <div class="text-gray-600 text-xs mr-auto">Items</div>
                            <div class="text-xs font-medium">{{$order->count()}}</div>
                        </div>
                        <div class="flex">
                            <div class="text-gray-600 text-xs mr-auto">Total</div>
                            <div class="text-xs font-medium">₦{{number_format($order->first()->details->total)}}</div>
                        </div>
                    </div>

                </div>

            </div>


            <div class="flex items-center px-5 py-3 border-t border-gray-200 dark:border-dark-5">
            @if($order->first()->details->answered)
            <button class="button  button--sm text-white bg-red-500 mr-2" wire:click="unanswer({{$order->first()->details->id}})">Unanswer</button>
            @else
            
            <button class="button  button--sm text-white bg-green-500 mr-2" wire:click="answer({{$order->first()->details->id}})">Answer</button>
            @endif
                
                <a href="{{url('orders/'.$order->first()->order_id)}}" class="button ml-auto  button--sm text-white bg-theme-1 mr-2">View</a>

            </div>
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

                <x-danger-button class="ml-2" wire:click="delete({{$order->first()->order_id}})" wire:loading.attr="disabled">
                    {{ __('Delete') }}
                    </x-button>
            </x-slot>
        </x-dialog-modal>
        @endforeach


        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">


            <select class="w-20 input box mt-3 sm:mt-0" wire:model="pages">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>


</div>
