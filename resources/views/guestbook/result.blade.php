@extends('app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center display-6 mb-4">POST Result</h2>
                <p class="text-center lead">The following is the result obtained after submitting your input via a POST request.</p>
                <div class="text-center mb-4">
                    <a href="{{ route('home') }}" class="btn btn-primary mx-2">Back to Home</a>
                    <a href="{{ route('guestbook.view') }}" class="btn btn-secondary mx-2">View All Guestbook</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <pre>{{ var_export($guestbookData, true) }}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
