@extends('layouts.guest.app')

@section('title', 'Data Warga Rumbai')

@section('content')


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
<div class="card shadow p-4" style="width: 350px;">
    <h4 class="text-center mb-3">Login</h4>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required autofocus>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button class="btn btn-primary w-100">Login</button>
        <p class="text-center mt-2 mb-0">Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
    </form>
</div>
</body>
</html>


@endsection
