@extends('layouts.app')

@section('content')
<div class="container">
    <h1>statuses</h1>
    <a href="{{ route('statuses.create') }}" class="btn btn-primary mb-3">Create New status</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($statuses as $status)
                <tr>
                    <td>{{ $status->id }}</td>
                    <td>{{ $status->name }}</td>
                    <td>{{ $status->description }}</td>
                    <td>
                        <a href="{{ route('statuses.show', $status->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('statuses.edit', $status->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('statuses.destroy', $status->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
