{{-- CSS Includes - URUTAN PENTING! --}}

{{-- 1. Bootstrap CSS (Harus Pertama) --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

{{-- 2. Bootstrap Icons --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

{{-- 3. AOS Animation Library --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

{{-- 4. Custom Main CSS (Harus Terakhir untuk override Bootstrap) --}}
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
