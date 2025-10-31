<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'My Website')</title>

  {{-- Favicon --}}
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" />

  {{-- 1. Bootstrap CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  {{-- 2. Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

  {{-- 3. AOS Animation --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  {{-- 4. Custom main CSS --}}
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />

  {{-- CSS tambahan dari halaman child --}}
  @stack('layouts.css')
    @include('layouts.header')
</head>

<body>
  {{-- Header --}}
  {{-- @include('layouts.header') --}}

  {{-- Spacer untuk header fixed --}}
  <div style="height: 90px;"></div>

  {{-- Konten utama --}}
  <main id="main">
    @yield('content')
  </main>

  {{-- Script JS utama --}}
  @include('layouts.js')

  {{-- Script tambahan per halaman --}}
  @stack('scripts')
</body>
</html>
