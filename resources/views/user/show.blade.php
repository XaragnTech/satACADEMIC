@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <table class="table table-hover app-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td class="inline-actions">
                        <a href="{{ route('user.delete',$user) }}"  data-toggle="tooltip"
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
