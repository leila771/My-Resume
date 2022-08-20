@extends('dashboard.layout')

@section('title', "Création d'une formation")

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Modification : {{ $formation->degree }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item active">Modification : {{ $formation->degree }}</li>
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
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div>
                <form action="{{ route('formations.edit', $formation->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="degree">Diplôme/Certification</label>
                        <input type="text" class="form-control" id="degree" name="degree"
                            value="{{ $formation->degree }}">
                    </div>
                    <div class="form-group">
                        <label for="establishment">Établissement</label>
                        <input type="text" class="form-control" id="establishment" name="establishment"
                            value="{{ $formation->establishment }}">
                    </div>
                    <div class="form-group">
                        <label for="start_date">Date de début</label>
                        <input type="date" class="form-control" id="start_date" name="start_date"
                            value="{{ $formation->start_date }}">
                    </div>
                    <div class="form-group">
                        <label for="end_date">Date de fin</label>
                        <input type="date" class="form-control" id="end_date" name="end_date"
                            value="{{ $formation->end_date }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $formation->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>

        </div><!-- /.container-fluid -->
    </section>
@endsection
