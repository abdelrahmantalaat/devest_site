@extends('admin.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DEVEST ADMIN DASHBOARD</h2>
            </div>

            <!-- section -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">
                        <h2>
                            Edit - users
                        </h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                            <label for="">Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="" name="name" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your text" required autocomplete="name" autofocus>
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--text field-->

                            <label for="">Email address</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="">Password</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="password" value="{{ $user->password }}" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="">{{ __('Confirm Password') }}</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="password-confirm" value="{{ $user->password }}" type="text" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                        </form>
                    </div>
                </div>

            </div>
            <!--section end-->

        </div>
    </section>



@endsection
