<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            {{-- <x-authentication-card-logo /> --}}
        </x-slot>

        <div
        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0"
      >
        <div class="rounded-t mb-0 px-6 py-6">
          
          @include('auth.includes.login-button')
          <hr class="mt-6 border-b-1 border-gray-400" />
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
          <div class="text-gray-500 text-center mb-3 font-bold">
            <small>Create New Account</small>
          </div>
        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label class='block font-medium text-sm text-gray-700'>{{ __('Name') }}</label>
                <input class="block mt-1 w-full form-input rounded-md shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <label class='block font-medium text-sm text-gray-700'>{{ __('Email') }}</label>
                <input class="block mt-1 w-full form-input rounded-md shadow-sm" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <label class='block font-medium text-sm text-gray-700'>{{ __('Password') }}</label>
                <input class="block mt-1 w-full form-input rounded-md shadow-sm" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <label class='block font-medium text-sm text-gray-700'>{{ __('Confirm Password') }}</label>
                <input class="block mt-1 w-full form-input rounded-md shadow-sm" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

            <button type='submit' class ='ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150'>
                {{ __('Register') }}
            </button>
            </div>
        </form>
        </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
