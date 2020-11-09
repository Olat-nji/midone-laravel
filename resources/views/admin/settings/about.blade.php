<div>
    @section('header')
    <a href="{{url('settings')}}">{{ __('Settings') }}</a>
    <i data-feather="chevron-right" class="breadcrumb__icon"></i>
    <a href="" class="breadcrumb--active">About</a>
    @endsection

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            About
        </h2>
    </div>
    <form wire:submit.prevent="save">
        <div class="grid grid-cols-12 gap-6 mt-5">

            @foreach ($abouts as $index => $about)

            <div class=" intro-y col-span-12 lg:col-span-6" wire:key="abouts-field-{{ $about->id }}">
                <div class="box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            {{$about->name}}
                        </h2>
                        @error('abouts.{{$index}}.value')<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-red-600">{{$message}}</span> @enderror
                        <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                            <div class="mr-3">Show Preview</div>
                            <input data-target="#code{{$index}}" class="show-code input input--switch border" type="checkbox">
                        </div>
                    </div>
                    <div class="p-5" id="code{{$index}}">
                        <div class="preview the-editor">

                            {{-- <x-wysiwyg-editor :index="$index" /> --}}
                            <textarea class="w-full h-40 px-3 py-2 border rounded-lg focus:outline-none" rows="4" wire:model="abouts.{{$index}}.value"></textarea>

                        </div>
                        <div class="source-code hidden">
                            <div class="overflow-y-auto h-64 mt-3">

                                {!!$about->value!!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            @endforeach
            
            <button wire:loading.remove wire:target="save" type="submit" class="button w-24 rounded-full mr-1 mb-2 bg-blue-900 text-white">Save</button>
            <button wire:loading wire:target="save" class="bg-opacity-75 button w-24 inline-block mr-1 mb-2  rounded-full bg-blue-900 text-white inline-flex items-center"> Saving ...</button>
            <div x-data="{ shown: false, timeout: null }" x-init="@this.on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;" class='text-sm text-gray-600 text-center w-24 mr-auto p-2'>
                {{ 'Saved.' }} </div>
            {{-- <i data-loading-icon="oval" data-color="white" class="w-4 h-4 ml-auto"></i>  --}}

        </div>
    </form>
    @section('scripts')

    @endsection
</div>
