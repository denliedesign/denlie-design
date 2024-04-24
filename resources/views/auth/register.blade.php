@extends('layouts.app')
@section('content')

    <div class="bg-warm">
        <div class="container py-5">
            <div class="d-md-flex justify-content-center align-items-center">
                <div class="numero fonts-robo d-flex align-items-center color-warm" style="width: max-content;"><span>step</span>&nbsp;<span style="font-size: 2em;">1</span></div>
                <h2 class="open-concept-title text-center ms-3">Create An Account</h2>
            </div>

            <form method="POST" action="{{ route('register') }}">
            @csrf

                <div class="my-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered? Login Here.') }}
                    </a>
                </div>
            <!-- Name -->
                <div class="">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="btn-lg">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        </form>
    </div>
    </div>

@endsection
