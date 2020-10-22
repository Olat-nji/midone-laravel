<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{asset('img/apple-touch-icon.png')}}">
        <span :class="{ 'text-gray-200': dark }" class="hidden xl:block  text-lg ml-3"> SL <span class="font-medium">Concepts</span> </span>
    </a>
    <div class="border-opacity-25 border-gray-600 border b-t-0 my-6" style="border-top:0.5px;"></div>
    <ul>
        <li>
            <a href="index.html" class="side-menu side-menu--active">
                <div :class="{ 'text-gray-200': dark }" class="side-menu__icon text-gray-800  "> <i data-feather="home"></i> </div>
                <div :class="{ 'text-gray-200': dark }" class="side-menu__title text-gray-800  "> Dashboard </div>
            </a>
        </li>
        
    </ul>
</nav>
