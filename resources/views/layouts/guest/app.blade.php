<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'LPM')</title>

  {{-- Favicon --}}
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" />

  {{-- Bootstrap CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  {{-- Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

  {{-- AOS Animation --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  {{-- Custom CSS --}}
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />

  {{-- Tambahan CSS dari halaman --}}
  @stack('layouts.guest.css')
</head>

<body>
  {{-- Header --}}
  @include('layouts.guest.header')

  {{-- Spacer untuk header fixed --}}
  <div style="height: 90px;"></div>

  {{-- Konten utama --}}
  <main id="main">
    @yield('content')
  </main>

  {{-- Tombol WhatsApp mengambang --}}
  <a href="https://wa.me/6281234567890?text=Halo%20Kak,%20saya%20ingin%20bertanya%20tentang%20layanan%20Anda!"
     class="whatsapp-float"
     target="_blank"
     title="Chat via WhatsApp">
    <i class="bi bi-whatsapp"></i>
  </a>

  <style>
    .whatsapp-float {
      position: fixed;
      bottom: 25px;
      right: 25px;
      width: 60px;
      height: 60px;
      background-color: #25D366;
      color: white;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 32px;
      box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
      z-index: 1000;
      transition: transform 0.2s ease-in-out, background-color 0.3s;
    }

    .whatsapp-float:hover {
      background-color: #20ba5a;
      transform: scale(1.1);
      color: white;
    }
  </style>

  {{-- JS Scripts --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init();</script>

  {{-- Tambahan Script dari halaman --}}
  @stack('scripts')
</body>
</html>
