@extends('app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="display-6 text-center mb-4">Fill Guestbook</h2>
                <p class="text-center lead">Compose your most heartfelt messages as you fill out the guestbook form.</p>
                <div class="text-center mb-3">
                    <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('guestbook.submit') }}" class="border border-1 p-4">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="mb-1">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="mb-1">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="message" class="mb-1">Message:</label>
                        <textarea class="form-control" id="message" name="message">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
