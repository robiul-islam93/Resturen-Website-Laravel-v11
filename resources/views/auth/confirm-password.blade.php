@extends('auth.components.master')
@section('title', 'register')
@section('content')

<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="mb-4 text-sm text-gray-600">
                                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                                </div>

                                <form method="POST" action="{{ route('password.confirm') }}">
                                    @csrf

                                    <!-- Password -->
                                    <div class="form-group">
                                        <!-- <x-input-label for="password" :value="__('Password')" /> -->
                                        <label>Email address</label>

                                        <x-text-input id="password" class="block mt-1 w-full form-control"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <div class="register-link text-center">
                                        <x-primary-button class="ms-3 btn btn-primary btn-block">
                                            {{ __('Confirm') }}
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
</div>


@endsection