<div>
    @section('header')
    <a href="{{url('settings')}}" class="sm:hidden">{{ __('Settings') }}</a>
    <i data-feather="chevron-right" class="breadcrumb__icon sm:hidden"></i>
    <a href="" class="breadcrumb--active">Portfolio</a>
    @endsection
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Add New Portfolio
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

            <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white" @click="tab = 'index'"> <i data-feather="arrow-left" class="w-4 h-4 mr-2"></i>Go Back</button>

        </div>
    </div>

    <form wire:submit.prevent="new">

        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-12">
                <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5">


                    <div>
                        <label> Name</label>
                        <input type="text" class="input w-full border @error('name')border-theme-6 @enderror  mt-2" wire:model="name">
                        @error('name')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                    </div>
                    <div class="mt-3">
                        <label> Link</label>
                        <input type="text" class="input w-full border @error('link')border-theme-6 @enderror  mt-2" wire:model="link">
                        @error('link')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                    </div>

                    <div class="mt-3">

                        <label>Description</label>
                        <textarea class="input w-full border @error('description')border-theme-6 @enderror mt-2" wire:model="description"></textarea>
                        @error('description')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror


                    </div>
                    <div class="mt-3">

                        <label>Image</label>
                        <div class="fallback">
                            @isset ($image)
                            Photo Preview:
                            <img class="w-40 p-3" src="{{ $image->temporaryUrl() }}">

                            @endisset

                            <input name="file" type="file" wire:model="image" />
                        </div>
                        @error('image')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror


                    </div>

                    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                        <div class="mr-auto">
                            <button type="button" @click="tab = 'index'" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</button>

                        </div>
                        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">


                            <button wire:loading.remove wire:target="save" type="submit" class="button w-24 bg-theme-1 text-white mr-auto">Save</button>
                            <button wire:loading wire:target="save" class="bg-opacity-75 button w-24 bg-theme-1 text-white mr-auto"> Saving ...</button>

                        </div>
                    </div>
                </div>
                <!-- END: Form Layout -->
            </div>




    </form>

</div>
