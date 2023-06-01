@extends('app')

@section('content')
    <div class="container mt-5">
        <h2>Result</h2>
        <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Halaman Home</a>
        <a href="{{ route('guestbook.view') }}" class="btn btn-secondary">Lihat Buku Tamu</a>
        <h5 class="card-title">Hasil dari Post:</h5>
        <div class="card">
            <div class="card-body">
                <pre>{{ var_export($guestbookData, true) }}</pre>
            </div>
        </div>
    </div>
@endsection
