@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Role Details</h1>
    <a href="{{ route('roles.index') }}" class="btn btn-secondary mb-3">Back to Roles</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $role->name }}</h5>
            <p class="card-text">Description: {{ $role->description }}</p>
        </div>
    </div>
</div>
@endsection
