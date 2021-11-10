@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <!-------- button for the test -------------------------->
        <div class="col-md-10" style="margin-top: 20px ">
            <a href="{{ route('matiere.createForm') }}">
                <button type="button" class="btn btn-primary">Nouvelle Matiere</button>
            </a>

            <a href="{{ route('niveau.createForm') }}">
                <button type="button" class="btn btn-primary">Nouveau niveau</button>
            </a>
            <a href="{{ route('classe.createForm') }}">
                <button type="button" class="btn btn-primary">Nouvelle Classe</button>
            </a>
            <a href="{{ route('matiere.show') }}">
                <button type="button" class="btn btn-success">Liste matiere</button>
            </a>
            <a href="{{ route('classe.show') }}">
                <button type="button" class="btn btn-success">Liste Classe</button>
            </a>
            <a href="{{ route('niveau.show') }}">
                <button type="button" class="btn btn-success">Liste Niveau</button>
            </a>
            <a href="{{ route('niveau.show') }}">
                <button type="button" class="btn btn-success">Liste des utisateurs</button>
            </a>
        </div>
        <!-----------end-------------------------------------------->
    </div>
</div>
@endsection
