
<div class="flex content-center items-center justify-center  mb-3">
            <a href="/">
    
                <img class="w-16 h-16" src="{{asset('public/img/apple-touch-icon.png')}}">
            </a>
            
          </div><div class="btn-wrapper text-center">
    <a href="{{ url('/login') }}"
      class="transition duration-500 ease-in-out transform  hover:scale-110  bg-white @if(request()->routeIs('login')) scale-110 hover:text-gray-800 hover:bg-gray-200 text-gray-200  bg-gray-900 @else hover:bg-gray-900 hover:text-gray-200  text-gray-800 @endif  font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
      type="button"
      style="transition: all 0.15s ease 0s;"
    >
    Login</a>
<a href="{{ url('/register') }}"
      class="transition duration-500 ease-in-out transform hover:scale-110  bg-white  @if(request()->routeIs('register')) hover:text-gray-800 hover:bg-gray-200  scale-110 text-gray-200  bg-gray-900 @else hover:bg-gray-900 hover:text-gray-200  text-gray-800 @endif  font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
      type="button"
      style="transition: all 0.15s ease 0s;"
    >
    Register
</a>
  </div>