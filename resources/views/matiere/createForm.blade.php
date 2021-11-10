@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Creation de matiere') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('matiere.create') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="libele" class="col-md-4 col-form-label text-md-right">{{ __('Nom de la Matiere') }}</label>

                            <div class="col-md-6">
                                <input id="libele" type="text" class="form-control @error('libele') is-invalid @enderror" name="libele" value="{{ old('libele') }}" required autocomplete="libele" autofocus>

                                @error('libele')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="semestre" class="col-md-4 col-form-label text-md-right">{{ __('Semestre') }}</label>

                            <div class="col-md-6">
                                <select id="inputState" class="form-control" name = "semestre">
                                    <option selected>Semestre 1</option>
                                    <option>Semestre 2</option>
                                  </select>
                                @error('semestre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
