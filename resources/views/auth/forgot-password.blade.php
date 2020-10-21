<x-guest-layout>
    <x-authentication-card>
        
        {{-- <x-authentication-card-logo /> --}}
        <div
        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0"
      >
      <x-slot name="logo">
        
    </x-slot>
        <div class="rounded-t mb-0 px-6 py-6">
          
          @include('auth.includes.login-button')
          <hr class="mt-6 border-b-1 border-gray-400" />
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
          <div class="text-gray-500 text-center mb-3 font-bold">
            
          </div>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <label class='block font-medium text-sm text-gray-700'>{{ __('Email') }}</label>
                <input class="block mt-1 w-full form-input rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type='submit' class ='ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150'>
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</div>
    </x-jet-authentication-card>
</x-guest-layout>
