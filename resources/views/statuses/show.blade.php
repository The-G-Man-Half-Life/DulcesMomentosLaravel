@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Status Details</h1>
    <a href="{{ route('statuses.index') }}" class="btn btn-secondary mb-3">Back to statuses</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $status->name }}</h5>
            <p class="card-text">Description: {{ $status->description }}</p>
        </div>
    </div>
</div>
@endsection
