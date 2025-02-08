@extends('auth.components.master')
@section('title', 'register')
@section('content')

<div class="container-fluid h-100">
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
            <div class="authincation-content">
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <div class="auth-form">

                            <h4 class="text-center mb-4">Sign up your account</h4>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div class="form-group">
                                    <label><strong>Username</strong></label>
                                    <!-- <x-input-label for="name" :value="__('Name')" /> -->
                                    <x-text-input class="form-control" id="name" class="form-control block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="form-group">
                                    <label><strong>Email</strong></label>
                                    <!-- <x-input-label for="email" :value="__('Email')" /> -->
                                    <x-text-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <label><strong>Password</strong></label>
                                    <!-- <x-input-label for="password" :value="__('Password')" /> -->

                                    <x-text-input id="password" class="form-control block mt-1 w-full form-control"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group">
                                    <label><strong>Confirm Password</strong></label>
                                    <!-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> -->

                                    <x-text-input id="password_confirmation" class="block mt-1 w-full form-control"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a> -->

                                    <x-primary-button class="ms-4 text-center mt-4 btn btn-primary btn-block">
                                        {{ __('Register') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection