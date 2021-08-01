<div>
    <div class="wrapper">
        <div class=" content-area">
            <div class="page-header">
                <h4 class="page-title">Cart</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Back to Home</a></li>
                </ol>
            </div>

            <div class="row">
                <div class="col-lg-12 col-xl-8">
                    <div class="card m-b-20">
                        <div class="card-header ">
                            <div class="card-title">Shopping Cart</div>
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
                                <a class="btn btn-secondary btn-block btn-lg mt-2 text-white" href="{{url('/#pricing-plans')}}">Continue Shopping</a>
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
