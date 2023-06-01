@extends('app')

@section('content')
    <div class="container mt-5">
        <h2>Guestbook</h2>
        <a href="{{ route('guestbook.reset') }}" class="btn btn-danger mb-2">Reset Table</a>
        <a href="{{ route('home') }}" class="btn btn-primary mb-2">Back to Home</a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
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
    </div>
@endsection
