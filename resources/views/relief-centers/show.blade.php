@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Relief Center Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $reliefCenter->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Location: {{ $reliefCenter->location }}</h5>
            <p class="card-text">Capacity: {{ $reliefCenter->capacity }}</p>
            <a href="{{ route('relief-centers.edit', $reliefCenter->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('relief-centers.destroy', $reliefCenter->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection