@extends('layouts.guest.app')

@section('title', 'Beranda - Desa Rumbai')

@include('layouts.guest.app')


@push('layouts.css')


@endpush

@section('content')

{{-- === HERO SECTION === --}}
<section class="hero d-flex align-items-center justify-content-center" data-aos="zoom-in">
  <div>
    <h1>Selamat Datang di Desa Rumbai</h1>
    <p>Membangun Desa yang Maju, Transparan, dan Sejahtera</p>
    <a href="{{ url('/about') }}" class="btn btn-light text-primary fw-bold shadow-sm">Lihat Data Warga</a>
  </div>
</section>

{{-- === TENTANG DESA === --}}
<section id="tentang" class="py-5">
  <div class="container" data-aos="fade-up">
    <div class="text-center mb-5">
      <h2 class="section-title">Sekilas Tentang Desa Rumbai</h2>
      <p class="text-muted mt-2">Desa Rumbai terletak di Kecamatan Rumbai, Kota Pekanbaru — dikenal dengan semangat gotong royong dan potensi UMKM yang berkembang pesat.</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="info-card shadow-sm">
          <img src="https://bangkatengahkab.go.id/asset/foto_berita/1_Jalan_Sehat_HGN.jpg" alt="Desa Rumbai" class="img-fluid">
          <p class="mt-3">Pemerintah Desa Rumbai berkomitmen meningkatkan pelayanan publik berbasis digital, memperkuat lembaga kemasyarakatan, dan menjaga kelestarian lingkungan sekitar Sungai Siak.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- === PERANGKAT DESA === --}}
<section id="perangkat" class="py-5 bg-light">
  <div class="container" data-aos="fade-up">
    <div class="text-center mb-5">
      <h2 class="section-title">Perangkat Desa</h2>
      <p class="text-muted mt-2">Mereka yang berdedikasi untuk melayani masyarakat Desa Rumbai.</p>
    </div>
    <div class="row g-4 justify-content-center">
      @foreach([
        ['name' => 'H. Budi Santoso', 'role' => 'Kepala Desa', 'img' => 'https://randomuser.me/api/portraits/men/11.jpg'],
        ['name' => 'Anisa Rahmawati', 'role' => 'Sekretaris Desa', 'img' => 'https://randomuser.me/api/portraits/women/11.jpg'],
        ['name' => 'Rahmat Hidayat', 'role' => 'Kaur Pelayanan', 'img' => 'https://randomuser.me/api/portraits/men/14.jpg']
      ] as $perangkat)
      <div class="col-md-3">
        <div class="info-card text-center shadow-sm">
          <img src="{{ $perangkat['img'] }}" class="img-fluid" alt="{{ $perangkat['role'] }}">
          <h5 class="mt-2 mb-1 text-primary">{{ $perangkat['name'] }}</h5>
          <small>{{ $perangkat['role'] }}</small>
        </div>
      </div>
      @endforeach
    </div>
    <div class="text-center mt-4">
      <a href="{{ url('/perangkat-desa') }}" class="btn btn-primary px-4">Lihat Semua Perangkat</a>
    </div>
  </div>
</section>

{{-- === LEMBAGA DESA === --}}
<section id="lembaga" class="py-5">
  <div class="container" data-aos="fade-up">
    <div class="text-center mb-5">
      <h2 class="section-title">Lembaga Desa</h2>
      <p class="text-muted mt-2">Beberapa lembaga aktif yang berperan dalam pembangunan masyarakat.</p>
    </div>
    <div class="row g-4">
      @foreach([
        ['title' => 'LPM (Lembaga Pemberdayaan Masyarakat)', 'desc' => 'Membantu pemerintah desa dalam perencanaan dan pelaksanaan pembangunan desa.'],
        ['title' => 'PKK (Pemberdayaan Kesejahteraan Keluarga)', 'desc' => 'Berfokus pada peningkatan peran perempuan dan kesejahteraan keluarga di Desa Rumbai.'],
        ['title' => 'Karang Taruna', 'desc' => 'Organisasi kepemudaan yang aktif dalam kegiatan sosial dan pemberdayaan remaja desa.']
      ] as $lembaga)
      <div class="col-md-4">
        <div class="info-card shadow-sm text-center">
          <h5>{{ $lembaga['title'] }}</h5>
          <p>{{ $lembaga['desc'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
    <div class="text-center mt-4">
      <a href="{{ url('/lembaga-desa') }}" class="btn btn-outline-primary px-4">Lihat Lembaga Lainnya</a>
    </div>
  </div>
</section>

{{-- === INFORMASI UMUM === --}}
<section id="informasi" class="py-5 bg-light">
  <div class="container" data-aos="fade-up">
    <div class="text-center mb-5">
      <h2 class="section-title">Informasi Umum Desa</h2>
      <p class="text-muted mt-2">Sekilas tentang profil wilayah dan potensi desa.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="info-card shadow-sm">
          <h5>Profil Wilayah</h5>
          <p>Desa Rumbai memiliki luas wilayah 350 hektar dan terdiri dari 10 RW, 30 RT, dengan populasi lebih dari 7.500 jiwa.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-card shadow-sm">
          <h5>Potensi Ekonomi</h5>
          <p>Potensi utama: UMKM, pertanian perkotaan, serta pariwisata Sungai Siak yang terus dikembangkan.</p>
        </div>
      </div>
    </div>
    <div class="text-center mt-4">
      <a href="{{ url('/informasi-umum') }}" class="btn btn-primary px-4">Selengkapnya</a>
    </div>
  </div>
</section>

{{-- === FORM PENGADUAN === --}}
<section id="pengaduan" class="py-5">
  <div class="container" data-aos="fade-up">
    <div class="text-center mb-5">
      <h2 class="section-title">Sampaikan Pengaduan Anda</h2>
      <p class="text-muted mt-2">Kami siap mendengar dan menindaklanjuti aspirasi masyarakat Desa Rumbai.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="pengaduan-form">
          <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="Alamat Email" required>
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="pesan" rows="4" placeholder="Tulis pengaduan Anda..." required></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary px-4 py-2">Kirim Sekarang</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
