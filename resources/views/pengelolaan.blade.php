@extends('layouts.app')

@section('title', 'Pengelolaan Manhwa')

@section('content')
<h3 class="mb-4 text-center text-light"> All Series</h3>

<div class="row">
    @foreach ($manhwas as $manhwa)
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
            <img src="{{ asset($manhwa['gambar']) }}" class="card-img-top" alt="{{ $manhwa['judul'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $manhwa['judul'] }}</h5>
                <p class="card-text mb-1"><strong>Genre:</strong> {{ $manhwa['genre'] }}</p>
                <p class="card-text"><strong>Rating:</strong> ⭐ {{ $manhwa['rating'] }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
