@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <table class="table table-hover app-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom des classes</th>
                <th>level</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($classes as $classe)
                <tr>
                    <td>{{ $classe->id}}</td>
                    <td>{{ $classe->classname }}</td>
                    <td>{{ $classe->levels->libele }}</td>
                    <td class="inline-actions">
                        <a href="{{ route('classe.updateForm',$classe) }}"
                        data-placement="top" title="modifier">
                        <button type="button" class="btn btn-warning">modifier</button></a>

                        <a href="{{ route('classe.delete', $classe) }}"
                              data-method="POST" title="supprimer" data-confirm="Voulez-vous vraiment supprimer">
                            <button type="button" class="btn btn-danger">supprimer</button></a>
                    </tr>
                    @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
