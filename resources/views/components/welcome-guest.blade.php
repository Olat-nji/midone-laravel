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
                                                <div class="ml-auto">
                                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month"> 33% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                                </div>
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
                                                <i data-feather="credit-card" class="report-box__icon text-theme-11"></i> 
                                                <div class="ml-auto">
                                                    <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% Lower than last month"> 2% <i data-feather="chevron-down" class="w-4 h-4"></i> </div>
                                                </div>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">3.521</div>
                                            <div class="text-base text-gray-600 mt-1">New Orders</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="monitor" class="report-box__icon text-theme-12"></i> 
                                                <div class="ml-auto">
                                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% Higher than last month"> 12% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                                </div>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">2.145</div>
                                            <div class="text-base text-gray-600 mt-1">Total Projects</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="user" class="report-box__icon text-theme-9"></i> 
                                                <div class="ml-auto">
                                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="22% Higher than last month"> 22% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                                </div>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">152.000</div>
                                            <div class="text-base text-gray-600 mt-1">Unique Visitors</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- END: General Report -->
                        <!-- BEGIN: Weekly Top Products -->
                        <div class="col-span-12 mt-6">
                            <div class="intro-y block sm:flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    New Orders
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
                                            
                                            <th class="text-center whitespace-no-wrap">URGENCY</th>
                                            <th class="text-center whitespace-no-wrap">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="intro-x">
                                            
                                            <td>
                                                <a href="" class="font-medium whitespace-no-wrap">Nike Tanjun</a> 
                                                <div class="text-gray-600 text-xs whitespace-no-wrap">Sport &amp; Outdoor</div>
                                            </td>
                                            
                                            <td class="w-40">
                                                <div class="flex items-center justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i>High </div>
                                            </td>
                                            <td class="table-report__action w-56">
                                                <div class="flex justify-center items-center">
                                                    <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                    <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                                <ul class="pagination">
                                    <li>
                                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                                    </li>
                                    <li>
                                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                                    </li>
                                    <li> <a class="pagination__link" href="">...</a> </li>
                                    <li> <a class="pagination__link" href="">1</a> </li>
                                    <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                                    <li> <a class="pagination__link" href="">3</a> </li>
                                    <li> <a class="pagination__link" href="">...</a> </li>
                                    <li>
                                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                                    </li>
                                    <li>
                                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                                    </li>
                                </ul>
                                <select class="w-20 input box mt-3 sm:mt-0">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>35</option>
                                    <option>50</option>
                                </select>
                            </div>
                        </div>
                        <!-- END: Weekly Top Products -->
                    </div>
                    <div class="col-span-12 xxl:col-span-3 xxl:border-l border-theme-5 -mb-10 pb-10">
                        <div class="xxl:pl-6 grid grid-cols-12 gap-6">
                            <!-- BEGIN: Transactions -->
                            <div class="col-span-12 md:col-span-6 xl:col-span-6 xxl:col-span-12 mt-3 xxl:mt-8">
                                <div class="intro-x flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Ongoing
                                    </h2>
                                </div>
                                <div class="mt-5">
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('midone/dist/images/profile-4.jpg')}}">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Russell Crowe</div>
                                                <div class="text-gray-600 text-xs">2 December 2021</div>
                                            </div>
                                            <div class="text-theme-9">33% Done</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('midone/dist/images/profile-14.jpg')}}">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Brad Pitt</div>
                                                <div class="text-gray-600 text-xs">21 July 2022</div>
                                            </div>
                                            <div class="text-theme-9">+$60</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('midone/dist/images/profile-6.jpg')}}">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Angelina Jolie</div>
                                                <div class="text-gray-600 text-xs">22 June 2021</div>
                                            </div>
                                            <div class="text-theme-9">+$114</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('midone/dist/images/profile-4.jpg')}}">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Arnold Schwarzenegger</div>
                                                <div class="text-gray-600 text-xs">30 March 2022</div>
                                            </div>
                                            <div class="text-theme-9">+$43</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('midone/dist/images/profile-2.jpg')}}">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Bruce Willis</div>
                                                <div class="text-gray-600 text-xs">4 October 2021</div>
                                            </div>
                                            <div class="text-theme-9">+$59</div>
                                        </div>
                                    </div>
                                    <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a> 
                                </div>
                            </div>
                            <!-- END: Transactions -->
                            <!-- BEGIN: Recent Activities -->
                            <div class="col-span-12 md:col-span-6 xl:col-span-6 xxl:col-span-12 mt-3">
                                <div class="intro-x flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Recent Activities
                                    </h2>
                                    <a href="" class="ml-auto text-theme-1 dark:text-theme-10 truncate">See all</a> 
                                </div>
                                <div class="report-timeline mt-5 relative">
                                    <div class="intro-x relative flex items-center mb-3">
                                        <div class="report-timeline__image">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('midone/dist/images/profile-1.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                            <div class="flex items-center">
                                                <div class="font-medium">Robert De Niro</div>
                                                <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                            </div>
                                            <div class="text-gray-600 mt-1">Has joined the team</div>
                                        </div>
                                    </div>
                                    <div class="intro-x relative flex items-center mb-3">
                                        <div class="report-timeline__image">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('midone/dist/images/profile-13.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                            <div class="flex items-center">
                                                <div class="font-medium">Angelina Jolie</div>
                                                <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                            </div>
                                            <div class="text-gray-600">
                                                <div class="mt-1">Added 3 new photos</div>
                                                <div class="flex mt-2">
                                                    <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Nike Tanjun">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md border border-white" src="{{ asset('midone/dist/images/preview-10.jpg')}}">
                                                    </div>
                                                    <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Apple MacBook Pro 13">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md border border-white" src="{{ asset('midone/dist/images/preview-1.jpg')}}">
                                                    </div>
                                                    <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Sony Master Series A9G">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md border border-white" src="{{ asset('midone/dist/images/preview-15.jpg')}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-x text-gray-500 text-xs text-center my-4">12 November</div>
                                    <div class="intro-x relative flex items-center mb-3">
                                        <div class="report-timeline__image">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('midone/dist/images/profile-3.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                            <div class="flex items-center">
                                                <div class="font-medium">Sylvester Stallone</div>
                                                <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                            </div>
                                            <div class="text-gray-600 mt-1">Has changed <a class="text-theme-1 dark:text-theme-10" href="">Dell XPS 13</a> price and description</div>
                                        </div>
                                    </div>
                                    <div class="intro-x relative flex items-center mb-3">
                                        <div class="report-timeline__image">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('midone/dist/images/profile-11.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                            <div class="flex items-center">
                                                <div class="font-medium">Sylvester Stallone</div>
                                                <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                            </div>
                                            <div class="text-gray-600 mt-1">Has changed <a class="text-theme-1 dark:text-theme-10" href="">Apple MacBook Pro 13</a> description</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Recent Activities -->
                            <!-- BEGIN: Important Notes -->
                            <div class="col-span-12 md:col-span-6 xl:col-span-12 xxl:col-span-12 xl:col-start-1 xl:row-start-1 xxl:col-start-auto xxl:row-start-auto mt-3">
                                <div class="intro-x flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-auto">
                                        Important Notes
                                    </h2>
                                    <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator button px-2 border border-gray-400 dark:border-dark-5 flex items-center text-gray-700 dark:text-gray-600 mr-2"> <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                                    <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator button px-2 border border-gray-400 dark:border-dark-5 flex items-center text-gray-700 dark:text-gray-600"> <i data-feather="chevron-right" class="w-4 h-4"></i> </button>
                                </div>
                                <div class="mt-5 intro-x">
                                    <div class="box zoom-in">
                                        <div class="tiny-slider" id="important-notes">
                                            <div class="p-5">
                                                <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                                <div class="font-medium flex mt-5">
                                                    <button type="button" class="button button--sm bg-gray-200 dark:bg-dark-5 text-gray-600 dark:text-gray-300">View Notes</button>
                                                    <button type="button" class="button button--sm border border-gray-300 dark:border-dark-5 text-gray-600 ml-auto">Dismiss</button>
                                                </div>
                                            </div>
                                            <div class="p-5">
                                                <div class="font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                                <div class="font-medium flex mt-5">
                                                    <button type="button" class="button button--sm bg-gray-200 dark:bg-dark-5 text-gray-600 dark:text-gray-300">View Notes</button>
                                                    <button type="button" class="button button--sm border border-gray-300 dark:border-dark-5 text-gray-600 ml-auto">Dismiss</button>
                                                </div>
                                            </div>
                                            <div class="p-5">
                                                <div class="font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                                <div class="font-medium flex mt-5">
                                                    <button type="button" class="button button--sm bg-gray-200 dark:bg-dark-5 text-gray-600 dark:text-gray-300">View Notes</button>
                                                    <button type="button" class="button button--sm border border-gray-300 dark:border-dark-5 text-gray-600 ml-auto">Dismiss</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Important Notes -->
                            <!-- BEGIN: Schedules -->
                            
                            <!-- END: Schedules -->
                        </div>
                    </div>
                </div>
            