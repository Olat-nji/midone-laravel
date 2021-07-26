<div>
    @section("header")

    <a href="" class="breadcrumb--active"> {{ __('Products') }}</a>

    @endsection

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Products
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

        @foreach($products as $key => $product)
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
            <div class="flex items-center bproduct-b bproduct-gray-200 dark:bproduct-dark-5 px-5 py-4">

                <div class="ml-3 mr-auto">
                    @if($product->type=='Comments')
                    <a href="" class="font-medium">Comments</a>

                    <div class="flex text-gray-600 truncate text-xs mt-1">{{$product->type}} <span class="mx-1">•</span><a class="text-theme-1 dark:text-theme-10 inline-block truncate" href="">₦{{$product->price}}</a> </div>
                    @else
                    <a href="" class="font-medium">{{$product->name}}</a>

                    <div class="flex text-gray-600 truncate text-xs mt-1"> {{$product->type}}<span class="mx-1">•</span><a class="text-theme-1 dark:text-theme-10 inline-block truncate" href="">₦{{$product->price}}</a> </div>
                    @endif

                </div>

            </div>



            <div class="flex items-center px-5 py-3 bproduct-t bproduct-gray-200 dark:bproduct-dark-5">


                <a href="{{url('products/'.$product->id)}}" class="button ml-auto w-full button--sm text-white bg-theme-1 mr-2">Edit</a>

            </div>
        </div>
        
        @endforeach


        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagination -->
       
        <!-- END: Pagination -->
    </div>


</div>
