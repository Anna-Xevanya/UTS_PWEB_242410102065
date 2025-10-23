@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-header text-center bg-dark text-white">Login</div>
            <div class="card-body">
                <form method="POST" action="{{ route('doLogin') }}">
                    @csrf
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
