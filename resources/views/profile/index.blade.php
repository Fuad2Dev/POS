@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile', 'section' => 'users'])

@section('content')
    @include('alerts.success')

    @include('alerts.error')
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Edit Profile</h5>
                </div>
                {{-- <form method="post" action="{{route('profile.update')}}" autocomplete="off"> --}}
                <form method="post" action="" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        @method('put')

                        {{-- @include('alerts.success') --}}

                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <label>Name</label>
                            <input type="text" name="name"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name"
                                value="{{ old('name', auth()->user()->name) }}">
                            {{-- @include('alerts.feedback', ['field' => 'name']) --}}
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <label>Email</label>
                            <input type="email" name="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email"
                                value="{{ old('email', auth()->user()->email) }}">
                            {{-- @include('alerts.feedback', ['field' => 'email']) --}}
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">Save</button>
                    </div>
                </form>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="title">Password</h5>
                </div>
<<<<<<< Updated upstream
                <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
=======

                <form method="post" action="{{ route('profile.update.password') }}" autocomplete="off">
>>>>>>> Stashed changes
                    <div class="card-body">
                        @csrf
                        @method('put')

                        {{-- @include('alerts.success', ['key' => 'password_status']) --}}

                        <div
                            class="form-group{{ $errors->has('old_password') ? ' has-danger' : (session()->has('error') ? ' has-danger' : '') }}">
                            <label>Current password</label>
                            <input type="password" name="old_password"
                                class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}"
<<<<<<< Updated upstream
                                placeholder="Current password" value="" required>
=======
                                placeholder="Current password" value="">
>>>>>>> Stashed changes
                            {{-- @include('alerts.feedback', ['field' => 'old_password']) --}}
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label>New Password</label>
                            <input type="password" name="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
<<<<<<< Updated upstream
                                placeholder="New password" value="" required>
=======
                                placeholder="New password" value="">
>>>>>>> Stashed changes
                            {{-- @include('alerts.feedback', ['field' => 'password']) --}}
                        </div>
                        <div class="form-group">
                            <label>Confirm new password</label>
                            <input type="password" name="password_confirmation" class="form-control"
<<<<<<< Updated upstream
                                placeholder="Confirm new password" value="" required>
=======
                                placeholder="Confirm new password" value="">
>>>>>>> Stashed changes
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <img class="avatar" src="{{ asset('assets/img/emilyz.jpg') }}" alt="">
                                <h5 class="title">{{ auth()->user()->name }}</h5>
                            </a>
                            <p class="description"></p>
                        </div>
                    </p>
                    <div class="card-description"></div>
                </div>
                
            </div>
        </div> --}}
    </div>
@endsection

@push('js')
    <script>
        $(function() {
            $('.alert').slideDown('slow')

        })
        $(function() {
            setTimeout(() => {
                $('.alert').slideUp('slow', 0)
            }, 3000);
        })
    </script>
@endpush
