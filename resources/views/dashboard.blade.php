@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container text-light">
    <h2 class="mb-4">Selamat datang, <span class="text-purple">{{ $username }}</span>!</h2>

    {{-- Pengumuman --}}
    <div class="mb-5">
        <h4 class="text-purple mb-3">Pengumuman</h4>
        <ul class="list-group">
            @foreach ($pengumuman as $item)
                <li class="list-group-item bg-dark text-light border-secondary">{{ $item }}</li>
            @endforeach
        </ul>
    </div>

    {{-- Rekomendasi Manhwa --}}
    <div class="mb-5">
        <h4 class="text-purple mb-3">Rekomendasi Manhwa Minggu Ini</h4>
        <div class="row">
            @foreach ($rekomendasi as $r)
            <div class="col-md-4 mb-3">
                <div class="card bg-dark text-light border-purple shadow-sm">
                    <img src="{{ asset($r['gambar']) }}" class="card-img-top" alt="{{ $r['judul'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $r['judul'] }}</h5>
                        <p class="card-text">{{ $r['genre'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
