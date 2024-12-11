@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit status</h1>

    <form action="{{ route('statuses.update', $status->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">status Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $status->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ $status->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('statuses.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
