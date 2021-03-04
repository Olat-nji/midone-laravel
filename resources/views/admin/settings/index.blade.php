<div>
    @section('header')
    <a href="" class="breadcrumb--active"> Settings</a>
    @endsection
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Settings
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Input -->
            <div class="intro-y box">

                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        Company Details
                    </h2>

                </div>
                <form method="post" enctype="multipart/form-data" wire:submit.prevent="save">
                    @csrf
                    <div class="p-5" id="input">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="mt-3 col-span-12 lg:col-span-6">
                                <label>Email</label>
                                <input type="email" class="input w-full border @error('email')border-theme-6 @enderror mt-2" wire:model="email">
                                @error('email')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                            </div>
                            <div class="mt-3 col-span-12 lg:col-span-6">
                                <label>Phone</label>
                                <input type="phone" class="input w-full border @error('phone') border-theme-6 @enderror mt-2" wire:model="phone">
                                @error('phone')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                            </div>
                            <div class="mt-3 col-span-12 lg:col-span-6">
                                <label>Address</label>
                                <input type="text" class="input w-full border @error('address') border-theme-6 @enderror mt-2" wire:model="address">
                                @error('address')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                            </div>
                            <div class="mt-3 col-span-12 lg:col-span-6">
                                <label>Opening Hours</label>
                                <input type="text" class="input w-full border @error('opening_hours') border-theme-6 @enderror mt-2" wire:model="opening_hours">
                                @error('opening_hours')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                            </div>
                            <div class="mt-3 col-span-12 lg:col-span-6">
                                <label>Whatsapp Number</label>
                                <input type="text" class="input w-full border @error('whatsapp') border-theme-6 @enderror mt-2" wire:model="whatsapp">
                                @error('whatsapp')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                            </div>
                            <div class="mt-3 col-span-12 lg:col-span-6">
                                <label>Facebook</label>
                                <input type="text" class="input w-full border @error('facebook') border-theme-6 @enderror mt-2" wire:model="facebook">
                                @error('facebook')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                            </div>
                            <div class="mt-3 col-span-12 lg:col-span-6">
                                <label>Instagram</label>
                                <input type="text" class="input w-full border @error('instagram') border-theme-6 @enderror mt-2" wire:model="instagram">
                                @error('instagram')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                            </div>

                            <div class="mt-3 col-span-12 lg:col-span-6">
                                <label>Twitter</label>
                                <input type="text" class="input w-full border @error('twitter') border-theme-6 @enderror mt-2" wire:model="twitter">
                                @error('twitter')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                            </div>
                            <div class="mt-3 col-span-12 lg:col-span-6">

                                <label>Image (Multiple files can be selected)</label>
                                <div class="fallback cloneMe mt-3">
                                    @isset ($image)
                                    Photo Preview:
                                    <img class="w-40 p-3" src="{{ $image->temporaryUrl() }}">
                                    @else
                                    Current Logo:
                                    <img class="w-40 p-3" src="{{ asset('public/'.$logo) }}">
                                    @endisset
                                    
                                    <div wire:loading wire:target="image">Uploading...</div>
                                    <input type="file" wire:model="image" class="" />

                                </div>
                                @error('image')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror


                            </div>

                            <div class="text-right mt-3 col-span-12">
                                <a type="button" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1" href="{{url('/')}}">Cancel</a>
                                <button type="submit" class="button w-24 bg-theme-1 text-white" wire:loading.class='bg-theme-5'>Save</button>
                                <div x-data="{ shown: false, timeout: null }" x-init="@this.on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;" class='text-sm text-gray-600'>
                                    {{ 'Saved.' }}
                                </div>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
            <!-- END: Input -->
            <!-- BEGIN: Input Sizing -->


        </div>
    </div>
