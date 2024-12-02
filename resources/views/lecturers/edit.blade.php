@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Lecturer</h1>
    <form action="{{ route('lecturers.update', $lecturer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $lecturer->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $lecturer->email }}" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $lecturer->phone }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('lecturers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
