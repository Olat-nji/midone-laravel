<div>
    @section("header")

    <a href="{{url('orders')}}">{{ __('Orders') }}</a>


    @endsection


    <div class="intro-y news p-5 box mt-8">

        <h2 class="intro-y font-medium text-xl sm:text-2xl">
            DEEORDER-{{$order->id}}
        </h2>
        <div class="intro-y text-gray-700 dark:text-gray-600 mt-3 text-xs sm:text-sm"> {{$order->created_at->DiffForHumans()}} <span class="mx-1">•</span> {{$order->status}} <span class="mx-1">•</span> <a class="text-theme-1 dark:text-theme-10" href="{{url('orders/'.$order->id.'/edit')}}">Edit</a></div>



        <div class="intro-y flex relative pt-16 sm:pt-6 items-center pb-6">


            <div class="absolute sm:relative -mt-12 sm:mt-0 w-full flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm">
                <div class="intro-x mr-1 sm:mr-3"> Total: <span class="font-medium">₦{{number_format($order->total)}}</span> </div>
                <span class="mx-1">•</span>
                <div class="intro-x mr-1 sm:mr-3"> Items: <span class="font-medium">{{$order->items->count()}}</span> </div>

            </div>

        </div>
        <div class="intro-y text-justify leading-relaxed">
            <p class="mb-5"><br>
                Name: {{$order->items->first()->user->name}}<br>
                Email: {{$order->items->first()->user->email}}<br>
                Instagram ID: {{$order->items->first()->user->instagram_id}}
            </p>
            Items :
            @foreach($order->items as $key => $value)
            <p class="mb-5">
                ({{$key+1}}) {{$value->product->name}} (₦{{$value->product->price}}{{($value->quantity!='')?'x'.$value->quantity:''}})
            </p>
            @endforeach

            @if($order->answered)
            <button class="button  ml-auto button--sm text-white bg-red-500 mr-auto" wire:click="unanswer({{$order->id}})">Unanswer</button>
            @else

            <button class="button  ml-auto button--sm text-white bg-green-500 mr-auto" wire:click="answer({{$order->id}})">Answer</button>

            @endif
            <p wire:loading> Please wait ...</p>


        </div>
        <div class="intro-y flex text-xs sm:text-sm flex-col sm:flex-row items-center mt-5 pt-5 border-t border-gray-200 dark:border-dark-5">
            <div class="flex items-center">

                <div class="ml-3 mr-auto">
                    <a href="{{url('orders?user='.$order->items->first()->user->id)}}" class="font-medium">View all {{$order->items->first()->user->name}}'s orders</a>
                    {{-- <div class="text-gray-600">{{$order->items->first()->user->team->name}}</div> --}}
            </div>


        </div>
        <div class="flex items-center text-gray-700 dark:text-gray-600 sm:ml-auto mt-5 sm:mt-0">
            Delete this Order?
            <a class="w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center border dark:border-dark-5 ml-2 text-gray-500 zoom-in tooltip" title="Delete" wire:click="confirmDelete"> <i class="w-3 h-3 fill-current" data-feather="trash"></i> </a>
        </div>

    </div>



    <!-- END: Comments -->


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

            <x-danger-button class="ml-2" wire:click="delete({{$order->id}})" wire:loading.attr="disabled">
                {{ __('Delete') }}
                </x-button>
        </x-slot>
    </x-dialog-modal>

</div>
