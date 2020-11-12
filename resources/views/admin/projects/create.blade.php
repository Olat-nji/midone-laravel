<div x-data="{ step: @entangle('step')}">
    @section("header")

    <a href="" class="breadcrumb--active"> {{ __('Projects') }}</a>

    @endsection
    <form wire:submit.prevent="save">
        <div class="intro-y box py-10 sm:py-20 mt-5">

            <div class="flex justify-center">
                {{-- <button type="button" @if($step==1)class="intro-y w-10 h-10 rounded-full button text-white bg-theme-1 mx-2" @endif @if($step!=1) class="intro-y w-10 h-10 rounded-full button bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2" @endif @click="step = 1">1</button>
                <button type="button" @if($step==2)class="intro-y w-10 h-10 rounded-full button text-white bg-theme-1 mx-2" @endif @if($step!=2) class="intro-y w-10 h-10 rounded-full button bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2" @endif @click="step = 2">2</button>
                <button type="button" @if($step==3)class="intro-y w-10 h-10 rounded-full button text-white bg-theme-1 mx-2" @endif @if($step!=3) class="intro-y w-10 h-10 rounded-full button bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2" @endif @click="step = 3">3</button> --}}

                <template x-if="step === 1">
                    <button type="button" class="intro-y w-10 h-10 rounded-full button text-white bg-theme-1 mx-2">1</button>
                    <button type="button" class="intro-y w-10 h-10 rounded-full button bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2" @click="step = 2">2</button>
                    <button type="button" class="intro-y w-10 h-10 rounded-full button bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2" @click="step = 3">3</button>
                </template>
                <template x-if="step === 2">
                    <button type="button" class="intro-y w-10 h-10 rounded-full button bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2" @click="step = 1">1</button>
                    <button type="button" class="intro-y w-10 h-10 rounded-full button text-white bg-theme-1 mx-2">2</button>
                    <button type="button" class="intro-y w-10 h-10 rounded-full button bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2" @click="step = 3">3</button>
                </template>
                <template x-if="step === 3">
                    <button type="button" class="intro-y w-10 h-10 rounded-full button text-white bg-theme-1 mx-2" @click="step = 1">1</button>
                    <button type="button" class="intro-y w-10 h-10 rounded-full button text-white bg-theme-1 mx-2" @click="step = 2">2</button>
                    <button type="button" class="intro-y w-10 h-10 rounded-full button bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">3</button>
                </template>
            </div>
            <div class="px-5 mt-10">
                <div class="font-medium text-center text-lg">Get Started On Your Project</div>
                <template x-if="step === 1">
                    <div class="text-gray-600 text-center mt-2">Tell Us a Litle Bit More About Your Project</div>
                </template>
                <template x-if="step === 2">
                    <div class="text-gray-600 text-center mt-2">Tell Us More About '{{$name}}'</div>
                </template>
                <template x-if="step === 3">
                    <div class="text-gray-600 text-center mt-2">Answer These Last Questions</div>
                </template>
            </div>
            <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5" x-show="step === 1">
                <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">Company / Organization / Project</div>
                        <input type="text" class="input w-full border flex-1 @error('name')border-theme-6 @enderror" placeholder="Laser Limited" wire:model="name">
                        @error('name')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">What do you want to do?</div>
                        <select class="input w-full border flex-1" wire:model="purpose">
                            <option>Launch a New Website</option>
                            <option>Redesign an Old Website</option>
                        </select>
                    </div>
                    <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                        <button type="button" class="button w-24 justify-center block bg-gray-200 text-gray-600 dark:bg-dark-1 dark:text-gray-300">Previous</button>
                        @if($name==null)
                        @else
                        <button type="button" class="button w-24 justify-center block bg-theme-1 text-white ml-2" @click="step = 2">Next</button>
                        @endif
                    </div>
                </div>
            </div>







            <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5" x-show="step === 2">

                <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                    @if($purpose=='Redesign an Old Website')
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">What Is The Extent Of The Redesign</div>
                        <select class="input w-full border flex-1" wire:model="extent_of_redesign">
                            <option>Complete Redesign</option>
                            <option>Partial Redesign</option>
                            <option>Not Sure Yet</option>
                        </select>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">URL / Website Address</div>
                        <input type="text" class="input w-full border flex-1 @error('name')border-theme-6 @enderror" placeholder="www.whome.co" wire:model="website_url">
                        @error('name')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror

                    </div>

                    @else


                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">Do You Plan to Sell Items on Your Website?</div>

                        <div class="flex items-center text-gray-700 dark:text-gray-500 mt-2"> <input type="radio" wire:model="ecommerce" class="input border mr-2" id="y" value="Yes"> <label class="cursor-pointer select-none" for="y">Yes</label> </div>
                        <div class="flex items-center text-gray-700 dark:text-gray-500 mt-2"> <input type="radio" wire:model="ecommerce" class="input border mr-2" id="n" value="No" selected> <label class="cursor-pointer select-none" for="n">No</label> </div>
                        {{-- <select class="input w-full border flex-1" wire:model="ecommerce">
                            <option value="No">No</option>
                            <option>Yes</option>
                        </select> --}}

                    </div>
                    @if($ecommerce=='No')

                    @else
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">Number of Products You Plan to Sell</div>
                        <select class="input w-full border flex-1" wire:model="no_of_products">
                            <option>1-50</option>
                            <option>50-100</option>
                            <option>100-500</option>
                            <option>Unlimited</option>
                            <option>Not Sure</option>
                        </select>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">Would You Like To Have Other Vendors / Sellers Sell On Your Site</div>
                        <select class="input w-full border flex-1" wire:model="vendors">
                            <option value="No">No - Just Me</option>
                            <option>Yes</option>
                        </select>
                    </div>
                    @endif


                    @endif
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">Give Us a Brief Description of What You Want </div>
                        <textarea class="input w-full border @error('description')border-theme-6 @enderror mt-2" row="30" wire:model="description"></textarea>
                        @error('description')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror

                    </div>


                    <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                        <button type="button" class="button w-24 justify-center block bg-theme-1 text-white ml-2" @click="step = 1">Previous</button>
                        @if($name==null)
                        @else
                        <button type="button" class="button w-24 justify-center block bg-theme-1 text-white ml-2" @click="step = 3">Next</button>
                        @endif
                    </div>
                </div>
            </div>













            <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5" x-show="step === 3">

                <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">What is Your Approximate Budget For this Project (₦)?</div>

                        <input type="text" class="input  w-full border @error('budget')border-theme-6 @enderror col-span-4" wire:model="budget">
                        @error('budget')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror

                    </div>
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">How Soon Do You Want To Begin This Project?</div>

                        <select class="input w-full border flex-1" wire:model="urgency">
                            <option>Immediately</option>
                            <option>Next Week</option>
                            <option>2 - 4 Weeks</option>
                            <option>1 -2 Months</option>
                            <option>Still Undecided</option>
                        </select>
                        @error('urgency')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror

                    </div>
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">Are There Any Similar Websites That You like?</div>
                        <div class="flex items-center text-gray-700 dark:text-gray-500 mt-2"> <input type="radio" wire:model="similar" class="input border mr-2" id="vertical-radio-chris-evans" name="vertical_radio_button" value="Yes"> <label class="cursor-pointer select-none" for="vertical-radio-chris-evans">Yes</label> </div>
                        <div class="flex items-center text-gray-700 dark:text-gray-500 mt-2"> <input type="radio" wire:model="similar" class="input border mr-2" id="vertical-radio-liam-neeson" name="vertical_radio_button" value="No" selected> <label class="cursor-pointer select-none" for="vertical-radio-liam-neeson">No</label> </div>

                    </div>

                    @if($similar=='No')

                    @else
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">What Are The Website Addresses Of These Website(s)? </div>
                        <textarea class="input w-full border @error('similar_websites')border-theme-6 @enderror mt-2" wire:model="similar_websites"></textarea>
                        @error('similar_websites')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror

                    </div>
                    @endif
                    @if(!Auth::check())
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">Your Name</div>
                        <input type="name_of_user" class="input w-full border flex-1" wire:model="name_of_user">
                        @error('name_of_user')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                    </div>
                    @endif
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">Your Email Address</div>
                        <input type="email" class="input w-full border flex-1" wire:model="email">
                        @error('email')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">Your Phone Number</div>
                        <input type="tel" class="input w-full border flex-1" wire:model="phone">
                        @error('phone')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                    </div>
                    @if(!Auth::check())
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Your Password</div>
                        <input class="input w-full border flex-1" type="password" wire:model="password">
                        @error('password')<div class="text-theme-6 mt-2">{{$message}}</div>@enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Confirm Your Password</div>
                        <input class="input w-full border flex-1" type="password" wire:model="password_confirmation">
                    </div>
                    @endif


                    <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                        <button type="button" class="button w-24 justify-center block bg-theme-1 text-white ml-2" @click="step = 2">Previous</button>
                        <button class="button w-24 justify-center block bg-theme-1 text-white ml-2" type="submit">Finish</button>
                        @error('hi')<div class="text-theme-6 mt-2">{{$error}}</div> @enderror
                        @if(count($errors)>0)
                        @foreach($errors as $key => $error)
                        <div class="text-theme-6 mt-2">{{$error}}</div>
                        @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
