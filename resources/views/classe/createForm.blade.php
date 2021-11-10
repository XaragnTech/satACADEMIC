@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Creation de classe') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('classe.create') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="className" class="col-md-4 col-form-label text-md-right">{{ __('Nom de la classe') }}</label>

                            <div class="col-md-6">
                                <input id="className" type="text" class="form-control @error('className') is-invalid @enderror" name="className" value="{{ old('className') }}" required autocomplete="className" autofocus>

                                @error('className')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="level" class="col-md-4 col-form-label text-md-right">{{ __('Niveau') }}</label>

                            <div class="col-md-6">
                                <select id="inputState" class="form-control" name = "level">
                                    @foreach ($levels as $level )
                                        <option value="{{ $level->id }}">{{ $level->libele }}</option>
                                    @endforeach
                                  </select>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
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
