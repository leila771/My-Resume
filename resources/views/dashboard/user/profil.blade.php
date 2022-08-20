@extends('dashboard.layout')

@section('title', "Profil de l'utilisateur {{ $user->name }}")

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profil utilisateur</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item active">Profil</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">

        <div class="my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
            </div>
        @endif
        </div>

        <div>
        <h4>Informations personnelles</h4>
            <form action="{{ route('profil.update', $user->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">Identifiant</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" disabled>
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact" value="{{ $user->contact ?? "" }}">
                </div>
                <div class="form-group">
                    <label for="address">Adresse</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $user->address ?? "" }}">
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>

        <div class="my-5">
        <h4>Modification du mot de passe</h4>
            <form action="{{ route('password.update', $user->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="email">Confirmation du mot de passe</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>

        <div class="my-5">
        <h4>Image de Profil</h4>
            <form action="{{ route('image.update', $user->id) }}" method="post" enctype="multipart/form-data">

                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">Choisir une image de profil</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>

        </div><!-- /.container-fluid -->
    </section>
@endsection
