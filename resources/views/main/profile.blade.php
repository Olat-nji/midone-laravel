<div>
    <div class="wrapper">
        <div class=" content-area">
            <div class="page-header">
                <h4 class="page-title">Profile</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Back</a></li>
                </ol>
            </div>
            <div class="row" id="user-profile">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xl-3">
                    <div class="card clearfix">
                        <div class="card-header">
                            <h2 class="card-title">Profile</h2>
                        </div>
                        <div class="card-body p-0">
                            <div class="card-body bg-primary text-white">
                                <img src="{{auth()->user()->profile_photo_url}}" alt="" class="profile-img img-responsive center-block">
                                <a href="{{url('profile/edit')}}" class="profile-image">
                                    <span class="fa fa-pencil" aria-hidden="true"></span>
                                </a>
                                <div class="profile-label mt-3">
                                    <span>{{auth()->user()->name}}</span>
                                </div>

                                <div class="profile-since"><strong>
                                        Member since: {{auth()->user()->created_at->diffForHumans()}} </strong>
                                </div>
                            </div>
                            <div class="border-bottom align-items-center">
                                <div class="card-body">
                                    <div class="profile-details">
                                        <div class="list-group list-group-transparent mb-0 mail-inbox">
                                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                                <span class="icon mr-3"><i class="fa fa-truck"></i></span>Total Orders: <span>{{$orders}}</span>
                                            </a>

                                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                                <span class="icon mr-3"><i class="fa fa-truck"></i></span>Done: <span>{{$ordersdone}}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="profile-message-btn center-block text-center">
                                    <a href="{{url('/#contact-us')}}" class="btn btn-secondary btn-block">
                                        <i class="fa fa-envelope"></i> Send message
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Contact &amp; Personal Info</h2>
                        </div>
                        <div class="card-body">
                            <div class="media-list">
                                <div class="media mt-0">
                                    <div class="mediaicon bg-primary">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body ml-5 ">
                                        <h6 class="mediafont text-dark mb-0">Instagram ID</h6><a class="d-block" href="">{{auth()->user()->instagram_id}}</a>
                                    </div>
                                    <!-- media-body -->
                                </div>
                                <!-- media -->

                                <!-- media -->
                                <div class="media">
                                    <div class="mediaicon bg-secondary">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body ml-5">
                                        <h6 class="mediafont text-dark mb-0">Email Address</h6><a class="d-block" href="">{{auth()->user()->email}}</a>
                                    </div>
                                    <!-- media-body -->
                                </div>
                                <!-- media -->

                                <!-- media -->
                                <!-- media -->
                                <div class="media">
                                    <div class="mediaicon bg-primary">
                                        <i class="mdi mdi-account-off" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body ml-5">
                                        <h6 class="mediafont text-dark mb-0">Logout</h6>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <a href="{{ route('logout') }}" class="flex items-center block transition duration-300 ease-in-out hover:bg-gray-700 dark:hover:bg-dark-3 rounded-md" onclick="event.preventDefault();
                                                this.closest('form').submit();"> Exit </a>
                                        </form>
                                    </div>
                                    <!-- media-body -->
                                </div>
                                <!-- media -->
                            </div>
                        </div>
                        <!-- media-list -->
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12 col-xl-9">
                    <div class="card clearfix">
                        <div class="card-header">
                            <h2 class="card-title">User info</h2>
                        </div>
                        <div class="card-body">
                            <div class="row profile-user-info">
                                <div class="col-lg-12">
                                    <div class="table-responsive border ">
                                        <table class="table row table-borderless w-100 m-0 ">
                                            <tbody class="col-lg-6 p-0">
                                                <tr>
                                                    <td><strong>Full Name :</strong> {{auth()->user()->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Email :</strong> {{auth()->user()->email}}</td>
                                                </tr>

                                            </tbody>
                                            <tbody class="col-lg-6 p-0">
                                                <tr>
                                                    <td><strong>Instagram ID :</strong> {{auth()->user()->instagram_id}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Phone :</strong> {{auth()->user()->phone}}</td>
                                                </tr>
                                            </tbody>


                                        </table>
                                        <div class="col-lg-12 d-flex ml-auto mr-auto">

                                            <a href="{{url('profile/edit')}}" class="btn btn-info btn-md"> <span class="fa fa-pencil" aria-hidden="true"></span> Edit</a>
                                        </div>
                                    </div>




                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-xl-8">
                                    <div class="card m-b-20">
                                        <div class="card-header ">
                                            <div class="card-title">My Cart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>price</th>
                                                            <th>Action</th>
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
                                                            $price=intval($comments)*intval($price);

                                                            @endphp
                                                            <td> {{$comments}} Comments</td>

                                                            <td><input type="number" min="1" wire:model="comments"> <span>* ₦{{$carts->product->price}} per comment </span> = <span>₦{{number_format($price)}}</span></td>

                                                            <td><a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" wire:click="$emit('triggerDelete',{{ $carts->id }})" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td>
                                                        </tr>
                                                        @elseif ($carts->product->type=='Pages')
                                                        @php
                                                        $price=0;
                                                        @endphp
                                                        @else
                                                        <tr>
                                                            <td>{{$carts->product->name}}</td>
                                                            <td><span>₦{{$carts->product->price}} </span></td>
                                                            <td><a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" wire:click="$emit('triggerDelete',{{ $carts->id }})" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td>
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
                                            <form class="text-left  product-cart m-t-20 mb-0">
                                                <div class="row">
                                                    <div class="col-6"><input class="productcart form-control" type="text" placeholder="Coupon Code"></div>
                                                    <div class="col-6"><a href="#" class="btn btn-primary btn-md">Apply</a></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-4">
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
                                                            <td class="text-right">₦{{number_format($total)}}</td>
                                                        </tr>

                                                        <tr>
                                                            <td><span>Order Total</span></td>
                                                            <td>
                                                                <h2 class="price text-right mb-0">₦{{number_format($total)}}</h2>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <form class="text-center mt-3">
                                                @if($cart->count()!=0)
                                                <a class="btn btn-primary btn-block btn-lg mt-2 m-b-20 text-white" href="{{url('checkout')}}">Proceed To Checkout</a>
                                                @endif
                                                <a class="btn btn-secondary btn-block btn-lg mt-2 text-white" href="{{url('/#pricing-plans')}}">Forgot to add something?</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @push('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            @this.on('triggerDelete', id => {
                Swal.fire({
                    title: 'Are You Sure?'
                    , text: 'This  will be deleted from your cart!'
                    , icon: "warning"
                    , showCancelButton: true
                    , confirmButtonColor: '#3085d6'
                    , cancelButtonColor: '#aaa'
                    , confirmButtonText: 'Delete!'
                }).then((result) => {
                    //if user clicks on delete
                    if (result.value) {
                        // calling destroy method to delete
                        @this.call('destroy', id)
                        // success response
                        Swal.fire({
                            title: 'Deleted successfully!'
                            , icon: 'success'
                        });
                    } else {
                        
                    }
                });
            });
        })

    </script>
    @endpush
</div>
