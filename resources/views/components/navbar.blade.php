@php
    $username = request()->query('username'); // ambil username dari URL aktif
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">K-Manhwa</a>
    <div>
      <a href="{{ route('dashboard', ['username' => $username]) }}" class="btn btn-outline-light btn-sm me-2">Dashboard</a>
      <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn btn-outline-light btn-sm me-2">Pengelolaan</a>
      <a href="{{ route('profile', ['username' => $username]) }}" class="btn btn-outline-light btn-sm">Profile</a>
    </div>
  </div>
</nav>
