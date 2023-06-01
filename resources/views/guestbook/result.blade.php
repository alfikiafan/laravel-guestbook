@extends('app')

@section('content')
    <div class="container mt-5">
        <h2>POST Result</h2>
        <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
        <a href="{{ route('guestbook.view') }}" class="btn btn-secondary">View All Guestbook</a>
        <div class="card">
            <div class="card-body">
                <pre>{{ var_export($guestbookData, true) }}</pre>
            </div>
        </div>
    </div>
@endsection
