@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" style="text-align:center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br />
                    <a class="navbar-brand" href="{{ url('/') }}">
                        IR A LA PÁGINA DE INICIO
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
