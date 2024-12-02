@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Lecturer</h1>
    <form action="{{ route('lecturers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('lecturers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
