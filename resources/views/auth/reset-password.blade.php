@extends('auth.components.master')
@section('title', 'Reset Password')
@section('content')

<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Reset Password</h4>

                                <form method="POST" action="{{ route('password.store') }}">
                                    @csrf

                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') ?? '' }}">

                                    <!-- Email Address -->
                                    <div class="form-group">
                                        <label><strong>Email Address</strong></label>
                                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email', $request->email ?? '') }}" required autofocus>
                                        @error('email')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group">
                                        <label><strong>Password</strong></label>
                                        <input id="password" class="form-control" type="password" name="password" required>
                                        @error('password')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form-group">
                                        <label><strong>Confirm Password</strong></label>
                                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
                                        @error('password_confirmation')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
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

@endsection
