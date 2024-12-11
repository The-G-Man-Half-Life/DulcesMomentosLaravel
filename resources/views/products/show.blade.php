@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Products Details</h1>
    <a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">Back to products</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $Product->name }}</h5>
            <p class="card-text">Description: {{ $Product->description }}</p>
            <p class="card-text">Price: {{$Product ->price}}</p>
            <p class="card-text">Creation date: {{$Product ->creation_date}}</p>
        </div>
    </div>
</div>
@endsection