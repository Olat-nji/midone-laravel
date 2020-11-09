<div>

    @section("header")

    <a href="" class="breadcrumb--active"> {{ __('Settings') }}</a>

    @endsection

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Settings
        </h2>
    </div>
    <div class=" grid grid-cols-12 gap-6 mt-5 mt-5">
        <div class="intro-y box col-span-12 lg:col-span-6 flex flex-col lg:flex-row mt-5">
            <div class="intro-y flex-1 px-5 py-16">
                <i data-feather="info" class="w-12 h-12 text-theme-1 dark:text-theme-10 mx-auto"></i>
                <div class="text-xl font-medium text-center mt-10">About</div>

                <div class="text-gray-600 dark:text-gray-400 px-10 text-center mx-auto mt-2">Edit about information on the site.</div>

                <a class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8" href="{{url('settings/about')}}">Go</a>
            </div>


        </div>
        <div class="intro-y box col-span-12 lg:col-span-6 flex flex-col lg:flex-row mt-5">

            <div class="intro-y flex-1 px-5 py-16 flex-1 py-16">
                <i data-feather="tv" class="w-12 h-12 text-theme-1 dark:text-theme-10 mx-auto"></i>
                <div class="text-xl font-medium text-center mt-10">Portfolio</div>

                <div class="text-gray-600 dark:text-gray-400 px-10 text-center mx-auto mt-2">Add Or Delete Portfolio</div>

                <a class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8" href="{{url('settings/portfolios')}}">Go</a>
            </div>

        </div>
        <div class="intro-y box col-span-12 lg:col-span-6 flex flex-col lg:flex-row mt-5">

            <div class="intro-y flex-1 px-5 py-16 flex-1 py-16">
                <i data-feather="mic" class="w-12 h-12 text-theme-1 dark:text-theme-10 mx-auto"></i>
                <div class="text-xl font-medium text-center mt-10">Testimonials</div>

                <div class="text-gray-600 dark:text-gray-400 px-10 text-center mx-auto mt-2">Add Or Delete Testimonials</div>

                <a class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8" href="{{url('settings/testimonials')}}">Go</a>
            </div>

        </div>
        {{-- <div class="intro-y box col-span-12 lg:col-span-6 flex flex-col lg:flex-row mt-5">

            <div class="intro-y flex-1 px-5 py-16 flex-1 py-16">
                <i data-feather="credit-card" class="w-12 h-12 text-theme-1 dark:text-theme-10 mx-auto"></i>
                <div class="text-xl font-medium text-center mt-10">Pricing</div>

                <div class="text-gray-600 dark:text-gray-400 px-10 text-center mx-auto mt-2">Change pricing details</div>

                <a class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8" href="{{url('settings/pricing')}}">Go</a>
            </div>

        </div> --}}

        <div class="intro-y box col-span-12 lg:col-span-6 flex flex-col lg:flex-row mt-5">
            <div class="intro-y flex-1 px-5 py-16">
                <i data-feather="database" class="w-12 h-12 text-theme-1 dark:text-theme-10 mx-auto"></i>
                <div class="text-xl font-medium text-center mt-10">Services</div>

                <div class="text-gray-600 dark:text-gray-400 px-10 text-center mx-auto mt-2">Edit services offered.</div>

                <a class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8" href="{{url('settings/services')}}">Go</a>
            </div>
            {{-- <div class="intro-y flex-1 px-5 py-16 flex-1 py-16">
            <i data-feather="tool" class="w-12 h-12 text-theme-1 dark:text-theme-10 mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">Core Technologies</div>

            <div class="text-gray-600 dark:text-gray-400 px-10 text-center mx-auto mt-2">Add or delete Core Technologies used</div>

            <a class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8" href="{{url('settings/core-technologies')}}">Go</a>
        </div> --}}

    </div>
    <div class="intro-y box col-span-12 lg:col-span-6 flex flex-col lg:flex-row mt-5">

        <div class="intro-y flex-1 px-5 py-16 flex-1 py-16">
            <i data-feather="activity" class="w-12 h-12 text-theme-1 dark:text-theme-10 mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">FAQ</div>

            <div class="text-gray-600 dark:text-gray-400 px-10 text-center mx-auto mt-2">Add or remove FAQ</div>

            <a class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8" href="{{url('settings/faqs')}}">Go</a>
        </div>
    </div>
</div>
</div>
