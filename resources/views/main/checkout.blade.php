<div>
    <div class="wrapper">
        <div class=" content-area">
            <div class="page-header">
                <h4 class="page-title">Checkout</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('cart')}}">Back to Cart</a></li>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" class="text-white d-flex items-center block p-2 transition duration-300 ease-in-out hover:bg-gray-700 dark:hover:bg-dark-3 rounded-md" onclick="event.preventDefault();
                                                this.closest('form').submit();"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                    </form>
                </ol>
            </div>

            <div class="row">
                <div class="col-lg-8 col-xl-8">
                    <div class="card m-b-20">
                        <div class="card-header ">
                            <div class="card-title">Review & Checkout</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>price</th>
                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $total=0;
                                        @endphp
                                        @foreach ($cart as $carts)
                                        @if($carts->product->type=='Comments')
                                        @php
                                        $price=$carts->product->price;
                                        @endphp
                                        <tr>
                                            @php
                                            $price=intval($comments)*intval($carts->product->price);

                                            @endphp
                                            <td> {{$comments}} Comments</td>

                                            <td><span>{{$comments}}</span> <span>* ₦{{$carts->product->price}} per comment </span> = <span>₦{{number_format($price)}}</span></td>


                                        </tr>
                                        @elseif ($carts->product->type=='Pages')
                                        @php
                                        $price=0;
                                        @endphp
                                        @else
                                        <tr>
                                            <td>{{$carts->product->name}}</td>
                                            <td><span>₦{{$carts->product->price}}</span></td>
                                            {{-- <td><a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" wire:click="$emit('triggerDelete',{{ $carts->id }})" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td> --}}
                                        </tr>

                                        @php
                                        $price=$carts->product->price;
                                        @endphp
                                        @endif

                                        @php
                                        $total=$total+$price;
                                        @endphp
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @if (!auth()->check())
                <div class="col-lg-8 col-xl-8">
                    <form class="card" wire:submit.prevent="register">
                        <div class="card-header">
                            <h3 class="card-title">Billing Details</h3>
                        </div>
                        <div class="alert alert-primary">
                            <strong data-toggle="modal" data-target="#exampleModal3">Existing Customer?</strong>
                            <hr class="message-inner-separator">
                            <p data-toggle="modal" data-target="#exampleModal3" style="cursor:pointer;">Login here</p>
                        </div>
                        <div class="expanel-body"><strong>
                                Create a New Account</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input class="form-control" placeholder="Enter your Name" type="text" wire:model="name" :value="old('name')" required autofocus autocomplete="name" />
                                        @error('name')<span class="text-danger">{{$message}}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Email address</label>
                                        <input class="form-control" placeholder="Enter your email" type="email" wire:model="email" :value="old('email')" required />
                                        @error('email')<span class="text-danger">{{$message}}</span>@enderror

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone</label>
                                        <input class="form-control" placeholder="Enter your Phone Number" type="phone" wire:model="phone" :value="old('phone')" required />
                                        @error('phone')<span class="text-danger">{{$message}}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Instagram Id</label>
                                        <input type="text" wire:model="instagram_id" class="form-control">
                                        @error('instagram_id')<span class="text-danger">{{$message}}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <input class="form-control" placeholder="Enter your password" type="password" wire:model="password" required autocomplete="new-password" />
                                        @error('password')<span class="text-danger">{{$message}}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Confirm Password</label>
                                        <input class="form-control" placeholder="Confirm your password" type="password" wire:model="password_confirmation" required autocomplete="new-password" />
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                @endif

                <div class="col-lg-4 col-xl-4">
                    <div class="card ">
                        <div class="card-header ">
                            <div class="card-title">Order Summary</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Cart Subtotal</td>
                                            <td class="text-right">₦{{$total}}</td>
                                        </tr>

                                        <tr>
                                            <td><span>Order Total</span></td>
                                            <td>
                                                <h2 class="price text-right mb-0">₦{{$total}}</h2>
                                            </td>

                                        </tr>
                                        @php
                                        $this->total=$total;
                                        @endphp
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center mt-3" wire:ignore>
                                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" id="#paymentform">
                                    @if(session()->has('msg'))
                                    {{session()->get('msg')}}
                                    @endif
                                    @if(auth()->check()&&$total!=0)


                                    <input type="hidden" name="email" value="{{auth()->user()->email}}">
                                    {{-- <input type="hidden" name="orderID" value="{{$this->cart_id}}"> --}}
                                    <input type="hidden" name="currency" value="NGN">
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                    <input type="hidden" name="amount" value="{{$total*100}}">
                                    {{csrf_field()}}
                                    <button class="btn btn-primary btn-block btn-lg mt-2 m-b-20 text-white" type="submit" style="cursor:pointer;" wire:click="checkout">Checkout</button>



                                    @endif
                                    <button class="d-none" style="cursor:pointer;" type="submit" style="display:none" id="check">Submit</button>
                                </form>
                                <a class="btn btn-secondary btn-block btn-lg mt-2 text-white" href="{{url('/')}}">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-hidden="true" wire:ignore.self>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="example-Modal3"><strong>LOGIN</strong></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closer">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="card" method="POST" wire:submit.prevent="login">
                                @csrf
                                <x-validation-errors class="mb-4" />
                                <div class="card-body p-6 ">
                                    <div class="card-title text-center">Enter your Account Details</div>
                                    <div class="input-icon form-group wrap-input">
                                        <span class="input-icon-addon search-icon">
                                            <i class="mdi mdi-account"></i>
                                        </span>
                                        <input type="text" placeholder="Enter your email" class="form-control" type="email" wire:model="log_email" :value="old('log_email')" required autofocus>
                                        @error('log_email')<span class="text-danger">{{$message}}</span>@enderror
                                    </div>
                                    <div class="input-icon form-group wrap-input">
                                        <span class="input-icon-addon search-icon">
                                            <i class="zmdi zmdi-lock"></i>
                                        </span>
                                        <input class="form-control mb-0" placeholder="Enter your password" type="password" wire:model="log_password" required autocomplete="current-password">
                                        @if (Route::has('password.request'))
                                        <label class="form-label">
                                            <a href="{{ route('password.request') }}" class="float-right small">I forgot my password</a>
                                        </label>
                                        @endif
                                    </div>
                                    <div class="form-group mt-5">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" wire:model="remember">
                                            <span class="custom-control-label">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
    @push('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {

            @this.on('logged_in', name => {

                $('#closer').click();
                Swal.fire({
                    title: 'Hello ' + name
                    , icon: 'success'

                });
            });

            @this.on('out', name => {
                Swal.fire({
                    title: 'Please wait '
                    , text: 'You will be redirected to the payment portal soon ...'
                    , icon: 'info'

                });
                

            });

            @if (session('msg'))
             Swal.fire({
                    title: 'Error'
                    , text: '{{session('msg')}}'
                    , icon: 'error'

                });
            @endif



        })

    </script>
    @endpush
</div>
