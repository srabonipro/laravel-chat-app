@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1>{{ __('Edit Phrase') }}</h1>
                    <a class="btn btn-success" href="{{ route('language.index') }}">Back</a>
                </div>

                <div class="card-body">

                    @foreach ($phrases as $phrase)
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <label class="form-label mr-2">{{ $phrase->key }}</label>
                        <input type="text" value="{{ $phrase->key }}" name="home" class="form-control mr-2 @error('home') is-invalid @enderror">
                        <button class="btn btn-sm btn-secondary">update</button>
                        @error('home')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
