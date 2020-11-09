<div>
    @section('header')
    <a href="{{url('settings')}}" class="sm:hidden">{{ __('Settings') }}</a>
    <i data-feather="chevron-right" class="breadcrumb__icon sm:hidden"></i>
    <a href="" class="breadcrumb--active">FAQ</a>
    @endsection
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Services - {{$faq->name}}
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

            <a href="{{url('settings/faqs')}}" class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white"> <i data-feather="arrow-left" class="w-4 h-4 mr-2"></i> Go Back</a>

        </div>
    </div>

    <form wire:submit.prevent="save">

        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-12">
                <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5">


                    <div>
                        <label> Name</label>
                        <input type="text" class="input w-full border @error('faq.name')border-theme-6 @enderror  mt-2" wire:model="faq.name">
                        @error('faq.name')<div class="text-theme-6 mt-2">This field is required</div>@enderror
                    </div>





                    <div class="mt-3">

                        <label>Value</label>
                        <textarea class="input w-full border @error('faq.value')border-theme-6 @enderror mt-2" wire:model="faq.value"></textarea>
                        @error('faq.value')<div class="text-theme-6 mt-2">This field is required</div>@enderror
                        <div class="text-xs text-gray-600 mt-2">Seperate each feature by a comma ','</div>

                    </div>
                    

                    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                        <div class="mr-auto">
                            <a href="{{url('settings/faq')}}" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</a>
                            <button type="button" wire:click="confirmDelete" wire:loading.class="bg-opacity-75" class="button w-24 bg-theme-6 text-white">Delete</button>
                        </div>
                        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

                            <div x-data="{ shown: false, timeout: null }" x-init="@this.on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;" class='text-sm text-gray-600 text-center w-20 mr-auto p-2'>
                                {{ 'Saved.' }} </div>
                            <button wire:loading.remove wire:target="save" type="submit" class="button w-24 bg-theme-1 text-white mr-auto">Save</button>
                            <button wire:loading wire:target="save" class="bg-opacity-75 button w-24 bg-theme-1 text-white mr-auto"> Saving ...</button>

                        </div>
                    </div>
                </div>
                <!-- END: Form Layout -->
            </div>




    </form>
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

            <x-danger-button class="ml-2" wire:click="delete({{$faq->id}})" wire:loading.attr="disabled">
                {{ __('Delete') }}
                </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
