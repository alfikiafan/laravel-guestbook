@extends('app')

@section('content')
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h2 class="display-6">Guestbook Table</h2>
            <p class="lead">This is a list showcasing all the entries in the guestbook.</p>
            <div class="my-4">
                <a href="{{ route('guestbook.reset') }}" class="btn btn-danger mx-2">Reset Table</a>
                <a href="{{ route('home') }}" class="btn btn-primary mx-2">Back to Home</a>
            </div>
        </div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($mergedGuestbookData as $guestbookData)
                    <tr>
                        <td>{{ $guestbookData['name'] }}</td>
                        <td>{{ $guestbookData['email'] }}</td>
                        <td>{{ $guestbookData['message'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
