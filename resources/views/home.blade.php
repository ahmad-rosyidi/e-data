@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Selamat Datang!') }}</div>

                    <div class="card-body">
                        Aplikasi: {{ env('APP_NAME') }}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
