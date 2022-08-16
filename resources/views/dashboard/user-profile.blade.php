@extends('dashboard.layout')

@section('title', 'user-profile')

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
<x-guest-layout>
    <x-auth-card>
        <h3>Modifier les informations de votre profil</h3>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Contact -->
            <div>
                <x-label for="contact" :value="__('Contact')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Adresse -->
            <div class="mt-4">
                <x-label for="adresse" :value="__('Adresse')" />

                <x-input id="adresse" class="block mt-1 w-full" type="adresse" name="adresse" :value="old('adresse')" required />
            </div>

            <!-- Reseaux sociaux -->
            <div class="mt-4">
                <x-label for="Reseau social" :value="__('Password')" />

                <x-input id="socialMedia" class="block mt-1 w-full"
                               
            </div>

            <!-- Reseaux sociaux -->
            <div class="mt-4">
                <x-label for="Reseau social" :value="__('Password')" />

                <x-input id="socialMedia" class="block mt-1 w-full"
                               
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('dashboard.index') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@ensection
