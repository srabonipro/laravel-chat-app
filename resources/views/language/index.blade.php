@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1>{{ __('Language List') }}</h1>
                    <a class="btn btn-success" href="{{ route('language.create') }}">Create Language</a>
                </div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Language</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($languages as $language)
                            <tr>
                              <th>{{ $loop->iteration }}</th>
                              <td>{{ $language->name }}</td>
                              <td>
                                  <a href="#" class="btn btn-info">Edit</a>
                                  <a href="#" class="btn btn-danger">Delete</a>
                              </td>
                            </tr>
                            @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
