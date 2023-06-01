@extends('app')

@section('content')
    <div class="background-container">
        <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
            <div class="text-center">
                <h1 class="display-5 text-white">Welcome to Laravel Guestbook!</h1>
                <p class="lead text-white">This is a simple guestbook using Laravel.</p>
                <div class="my-4">
                    <a href="{{ route('guestbook.form') }}" class="btn btn-lg btn-primary mx-2">Fill Guestbook</a>
                    <a href="{{ route('guestbook.view') }}" class="btn btn-lg btn-secondary mx-2">View Guestbook</a>
                </div>
            </div>
        </div>
    </div>
@endsection
