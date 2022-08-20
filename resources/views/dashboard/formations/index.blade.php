@extends('dashboard.layout')

@section('title', 'Mes formations')

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Mes formations</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item active">Mes formations</li>
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
            </div>

            <div>
                @if ($user->formations->count() === 0)
                    <div class="alert alert-info alert-block">
                        <strong>Vous n'avez pas encore de formations. <a href="{{ route('formations.create', $user->id) }}">
                                Cliquer ici pour en créer.</a></strong>
                    </div>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Diplôme/Certification</th>
                                <th>Établissement</th>
                                <th>Date de début</th>
                                <th>Date de fin</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <a class="btn btn-info mb-3" href="{{ route('formations.create', $user->id) }}">
                            Ajouter une formation</a>
                        <tbody>
                            @foreach ($user->formations as $formation)
                                <tr>
                                    <th>{{ $formation->degree }}</th>
                                    <td>{{ $formation->establishment }}</< /td>
                                    <td>{{ $formation->start_date }}</< /td>
                                    <td>{{ $formation->end_date ?? '-' }}</< /td>
                                    <td>{{ $formation->description ?? '-' }}</< /td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-primary mx-2"
                                                href="{{ route('formations.edit', $formation->id) }}"><i
                                                    class="fa fa-edit"></i></a>
                                            <form action="{{ route('formations.delete', $formation->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger mx-2"><i
                                                        class="fa fa-trash"></i>
                                                </button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>

        </div><!-- /.container-fluid -->
    </section>
@endsection
