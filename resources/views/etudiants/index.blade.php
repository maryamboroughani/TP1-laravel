@extends('layout')

@section('title', 'Liste des Étudiants')

@section('content')
<div class="container">
    <h1 class="my-4">Liste des Étudiants</h1>
    <a href="{{ route('etudiants.create') }}" class="btn btn-primary mb-3">Ajouter un Nouvel Étudiant</a>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->adresse }}</td>
                    <td>{{ $etudiant->telephone }}</td>
                    <td>{{ $etudiant->email }}</td>
                    <td>{{ $etudiant->ville->nom }}</td>
                    <td>
                        <a href="{{ route('etudiants.edit', $etudiant->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
