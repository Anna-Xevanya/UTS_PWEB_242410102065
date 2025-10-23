@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="text-center">
    <h3>Profil Pengguna</h3>
    <p>Nama pengguna: <strong>{{ $username ?? 'Guest' }}</strong></p>
    <p>Email: {{ strtolower($username ?? 'guest') }}@example.com</p>
</div>
@endsection
