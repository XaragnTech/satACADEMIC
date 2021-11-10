@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Creation de classe') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('niveau.update',$niveau) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="libele" class="col-md-4 col-form-label text-md-right">{{ __('Nom du niveau') }}</label>

                            <div class="col-md-6">
                                <input id="libele" type="text" class="form-control @error('libele') is-invalid @enderror" name="libele" value="{{ $niveau->libele }}" required autocomplete="libele" autofocus>

                                @error('libele')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modifier') }}
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