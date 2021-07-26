<div>
    @section("header")

    <a href="" class="breadcrumb--active"> {{ __('Dashboard') }}</a>

    @endsection

    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        General Report
                    </h2>
                    <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="users" class="report-box__icon text-theme-10"></i>

                                </div>
                                <div class=" mt-6"><span class="text-3xl font-bold leading-8"> {{$usersCount}}</span> <span class="text-2lg font-bold leading-8"> +{{ $adminUsersCount }}</span></div>

                                <div class="text-base text-gray-600 mt-1">Total Users</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="monitor" class="report-box__icon text-theme-11"></i>

                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{count($messages)}}</div>
                                <div class="text-base text-gray-600 mt-1">Messages</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="box" class="report-box__icon text-theme-12"></i>

                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{$countorders}}</div>
                                <div class="text-base text-gray-600 mt-1">Total Orders</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <!-- END: General Report -->
            <!-- BEGIN: Weekly Top Products -->
            @if(count($orders)>0)
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Orders
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

                                <th class="whitespace-no-wrap">ORDER NAME</th>
                                <th class="whitespace-no-wrap">Total</th>
                                <th class="text-center whitespace-no-wrap">Items</th>
                                <th class="text-center whitespace-no-wrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $key => $lit)
                            <tr class="intro-x">

                                <td>
                                    <a href="" class="font-medium whitespace-no-wrap">DEEORDER-{{$lit->first()->details->id}}</a>
                                    <div class="text-gray-600 text-xs whitespace-no-wrap">{{$lit->first()->details->created_at->diffForHumans()}}</div>
                                </td>
                                <td>
                                    <a href="" class="font-medium whitespace-no-wrap">₦{{number_format($lit->first()->details->total)}}</a>
                                    <div class="text-gray-600 text-xs whitespace-no-wrap">{{$lit->first()->user->name}}</div>
                                </td>
                                <td class="w-40">
                                    <div class="flex items-center justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i>{{count($lit)}} </div>
                                </td>

                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href="{{url('orders/'.$lit->first()->order_id)}}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>

                                    </div>
                                </td>
                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>
                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">


                    <select class="w-20 input box mt-3 sm:mt-0" wire:model="orderPages">
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


    </div>



    @section('scripts')
    <script>
        // var tour = new Tour({
        //     name: "{{ Str::uuid() }}",

        //     backdrop: true,
        //   steps: [


        //   {
        //     element: "#tour1",
        //    title:'Welcome' ,

        //     content: "You can directly view your stats here"
        //   }
        // ],
        // template:'@include('tailwind-components.tour-modal')',
        // onStart: function (tour) {
        //     const body = document.querySelector('body')
        //       const modal = document.querySelector('.modal')

        //       body.classList.toggle('modal-active')
        // },});

        // // Initialize the tour
        // tour.init();

        // // Start the tour
        // tour.start();

        // var tou = new Tour({
        //     name: "aslkds",
        //     backdrop: true,
        //   steps: [

        //   {
        //     element: "#profile",

        //     title:'Profile',

        //     content: "Manage settings like Personal details, Two factor authentication, Browser Sessions and also delete your account here"

        //   }

        // ],
        // template:'@include('tailwind-components.tour-modal')'
        // });

        // // Initialize the tour
        // tou.init();



        // function startTour(){


        // // Start the tour
        //   tou.start();
        //     };

    </script>
    @endsection
</div>
