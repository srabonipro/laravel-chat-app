@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1>{{ __('Add Language') }}</h1>
                    <a class="btn btn-success" href="{{ route('language.index') }}">Back</a>
                </div>

                @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif

                <div class="card-body">
                    <form action="{{ route('language.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Language Name</label>
                          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
                          @error('name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
