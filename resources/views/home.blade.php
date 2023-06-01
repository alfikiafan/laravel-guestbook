@extends('app')

@section('content')
    <div class="container mt-5">
        <h2>Welcome to Laravel Guestbook!</h2>
        <p>This is a simple guestbook using Laravel.</p>
        <a href="{{ route('guestbook.form') }}" class="btn btn-primary">Fill Guestbook</a>
        <a href="{{ route('guestbook.view') }}" class="btn btn-secondary">View Guestbook</a>
    </div>
@endsection
