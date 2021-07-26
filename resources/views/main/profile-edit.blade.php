<div class="wrapper">
    <div class=" content-area">
        <div class="page-header">
            <h4 class="page-title">Edit Profile</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('profile')}}">Back</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">My Profile</h3>
                    </div>
                    <div class="card-body p-4 bg-primary text-white">
                        <form>
                            <div class="row text-center">
                                <div class="col-12">
                                    <span class="avatar brround avatar-xl" style="background-image: url({{$user->profile_photo_url}})"></span>
                                </div>
                                <div class="col-12">
                                    <h4 class="mb-1 mt-2 ">{{$user->name}}</h4>
                                    <p class="mb-0">{{$user->email}}</p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Your name" wire:model="user.name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Your Email" wire:model="user.email">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="081••••••" wire:model="user.phone">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Instagram ID</label>
                            <input class="form-control" placeholder="Your Instagram ID" wire:model="user.instagram_id">
                        </div>
                        <div class="form-footer">
                            <button class="btn btn-secondary btn-block" wire:click="save">Save</button>
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

            <div class="col-lg-8 col-xl-9">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Edit profile</h2>
                    </div>
                    <div class="card-body">
                        <div class="e-profile">


                            <div class="tab-content pt-3">
                                <div class="tab-pane active">
                                    <form class="form" novalidate="" wire:submit.prevent="save">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="form-label">Full Name</label>
                                                            <input type="text" class="form-control" name="name" placeholder="Your name" wire:model="user.name">
                                                            @error('user.name')<div class="text-danger">{{$message}}</div>@enderror
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="form-label">Instagram ID</label>
                                                            <input class="form-control" placeholder="Your Instagram ID" wire:model="user.instagram_id">
                                                            @error('user.instagram_id')<div class="text-danger">{{$message}}</div>@enderror
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" class="form-control" name="email" placeholder="Your Email" wire:model="user.email">
                                                            @error('user.email')<div class="text-danger">{{$message}}</div>@enderror
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="form-label">Phone</label>
                                                            <input type="text" class="form-control" name="phone" placeholder="081••••••" wire:model="user.phone">
                                                            @error('user.phone')<div class="text-danger">{{$message}}</div>@enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-12 col-sm-12 mb-3">
                                                <div class="mb-2">
                                                    <h2 class="card-title">Change Password</h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="form-label">Current Password</label>
                                                            <input class="form-control" type="password" wire:model="current_password" placeholder="••••••">
                                                            @error('current_password')<div class="text-danger">{{$message}}</div>@enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="form-label">New Password</label>
                                                            <input class="form-control" type="password" wire:model="password" placeholder="••••••">
                                                            @error('password')<div class="text-danger">{{$message}}</div>@enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="form-label">Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                            <input class="form-control" type="password" wire:model="password_confirmation" placeholder="••••••">
                                                            @error('password')<div class="text-danger">{{$message}}</div>@enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="float-right mt-0 mb-0">
                                            <button class="btn btn-secondary mr-3" type="submit">Cancel</button>
                                            <button class="btn btn-primary " type="submit">Update Profile</button>
                                        </div>
                                    </form>
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
            @this.on('saved', id => {
                Swal.fire({
                    title: 'Profile Updated'
                    , icon: 'success'
                });
            });
            @this.on('notmatch', id => {
                Swal.fire({
                    title: 'Error!'
                    , text: 'The password you provided is invalid!'
                    , icon: 'warning'
                });
            });
        })

    </script>
    @endpush
</div>
