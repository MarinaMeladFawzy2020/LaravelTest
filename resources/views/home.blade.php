@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>You are logged in!</h3>

                    <a class="btn btn-primary" href="{{ route('offers.create') }}">{{ __('Create New Offer') }}</a>
                    <br><br>
                    <a class="btn btn-primary" href="{{ route('offers.all') }}">{{ __('Show All Offer') }}</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
