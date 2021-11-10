@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <table class="table table-hover app-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Libelé</th>
                <th>Semestre</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($matieres as $matiere)
                <tr>
                    <td>{{ $matiere->id}}</td>
                    <td>{{ $matiere->libele }}</td>
                    <td>{{ $matiere->semestre }}</td>
                    <td class="inline-actions">
                        <a href="{{ route('matiere.delete', $matiere) }}"  data-toggle="tooltip"
                        data-placement="top" title="supprimer">
                        <button type="button" class="btn btn-danger">supprimer</button></a>

                        <a href="{{ route('matiere.updateForm',$matiere) }}"  data-toggle="tooltip"
                        data-placement="top" title="modifier">
                        <button type="button" class="btn btn-warning">modifier</button></a>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
