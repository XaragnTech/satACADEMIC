@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <table class="table table-hover app-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Libelé</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($niveaux as $niveau)
                <tr>
                    <td>{{ $niveau->id}}</td>
                    <td>{{ $niveau->libele }}</td>
                    <td class="inline-actions">
                        <a href="{{ route('niveau.delete',$niveau) }}"  data-toggle="tooltip"
                        data-placement="top" title="supprimer">
                        <button type="button" class="btn btn-danger">supprimer</button></a>

                        <a href="{{ route('niveau.updateForm',$niveau) }}"  data-toggle="tooltip"
                        data-placement="top" title="modifier">
                        <button type="button" class="btn btn-warning">modifier</button></a>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
