<x-guest-layout page="Login">
    <div class="page-single">
        <div class="container">
            <div class="row authentication">
                <div class="col col-login mx-auto">
                    <div class="text-center mb-6">
                        <img src="assets\images\brand\logo.png" class="h-8" alt="">
                    </div>
                    <form class="card" method="POST" action="{{ route('login') }}">
                        @csrf
                        <x-validation-errors class="mb-4" />
                        @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="card-body p-6 ">
                            <div class="card-title text-center">Login to your Account</div>
                            <div class="input-icon form-group wrap-input">
                                <span class="input-icon-addon search-icon">
                                    <i class="mdi mdi-account"></i>
                                </span>
                                <input type="text" placeholder="Enter your email" class="form-control" type="email" name="email" :value="old('email')" required autofocus>
                            </div>
                            <div class="input-icon form-group wrap-input">
                                <span class="input-icon-addon search-icon">
                                    <i class="zmdi zmdi-lock"></i>
                                </span>
                                <input class="form-control mb-0" placeholder="Enter your password" type="password" name="password" required autocomplete="current-password">
                                <label class="form-label">
                                    @if (Route::has('password.request'))
                                    <a class="float-right small" href="{{ route('password.request') }}">
                                        {{ __('I forgot password') }}
                                    </a>
                                    @endif

                                </label>
                            </div>
                            <div class="form-group mt-5">
                                <label class="custom-control custom-checkbox">

                                    <input type="checkbox" class="custom-control-input" name="remember">
                                    <span class="custom-control-label">Remember me</span>
                                </label>
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                            <div class="text-center text-muted mt-3">
                                Don't have account yet? <a href="{{url('register')}}">Sign up</a>
                            </div>
                            <div class="flex-c-m text-center mt-5">
                                <a href="#" class="login100-social-item bg1">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <a href="#" class="login100-social-item bg2">
                                    <i class="fa fa-twitter"></i>
                                </a>

                                <a href="#" class="login100-social-item bg3">
                                    <i class="fa fa-google"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</x-guest-layout>
