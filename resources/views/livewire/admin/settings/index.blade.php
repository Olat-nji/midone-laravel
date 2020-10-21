<div>
    @section("header")
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"  >
            {{ __('Site Settings') }}
        </h2>
    @endsection
    <div class="container flex flex-wrap mx-auto  w-full items-center justify-center bg-gray-100 overflow-hidden shadow-none sm:rounded-lg">
 
   <ul class=" flex flex-wrap   items-center justify-center p-4">
        <li class="w-full xl:w-6/12 mb-12  px-4 border-gray-400 flex flex-row mb-2">
          <div class="  p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800  flex flex-1 items-center p-4  ">
            <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"><i class="fa fa-info-circle"></i></div>
            <div class="flex-1">
              <div class="text-lg font-semibold text-gray-700 dark:text-gray-200">About</div>
            
            </div>
            <div class="text-gray-600 text-sm transition duration-500 ease-in-out select-none cursor-pointer transform  hover:text-blue-300"><a href="{{url('/settings/about')}}">Edit &RightArrow;</a></div>  
          </div>
        </li>
             <li class="w-full xl:w-6/12 mb-12  px-4 border-gray-400 flex flex-row mb-2">
          <div class="  p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800  flex flex-1 items-center p-4  ">
            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"><i class="fa fa-money-check"></i></div>
            <div class="flex-1">
              <div class="text-lg font-semibold text-gray-700 dark:text-gray-200">Pricing</div>
              
            </div>
            <div class="text-gray-600 text-sm transition duration-500 ease-in-out select-none cursor-pointer transform  hover:text-blue-300"><a href="{{url('/settings/pricing')}}">Edit &RightArrow;</a></div>  
          </div>
        </li>
             <li class="w-full xl:w-6/12 mb-12  px-4 border-gray-400 flex flex-row mb-2">
          <div class="  p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800  flex flex-1 items-center p-4  ">
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"><i class="fa fa-server"></i></div>
            <div class="flex-1">
              <div class="text-lg font-semibold text-gray-700 dark:text-gray-200"> Services </div>
              
            </div>
            <div class="text-gray-600 text-sm transition duration-500 ease-in-out select-none cursor-pointer transform  hover:text-blue-300"><a href="{{url('/settings/services')}}">Edit &RightArrow;</a></div>  
          </div>
        </li>

          <li class="w-full xl:w-6/12 mb-12  px-4 border-gray-400 flex flex-row mb-2">
          <div class="  p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800  flex flex-1 items-center p-4  ">
            <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"><i class="fa fa-tools"></i></div>
            <div class="flex-1">
              <div class="text-lg font-semibold text-gray-700 dark:text-gray-200">Core Technologies</div>
              
            </div>
            <div class="text-gray-600 text-sm transition duration-500 ease-in-out select-none cursor-pointer transform  hover:text-blue-300"><a href="{{url('/settings/core_technologies')}}">Edit &RightArrow;</a></div>  
          </div>
        </li>
    </ul>
    
  </div>
</div>
