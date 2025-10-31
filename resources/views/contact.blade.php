@extends('layouts.guest.app')

@section('title', 'Pengaduan Masyarakat Desa Rumbai')

@push('layouts.guest.css')



@endpush

@section('content')
<section id="pengaduan" class="py-5">
  <div class="container" data-aos="fade-up">

    <div class="text-center mb-5">
      <h2 class="section-title">Pengaduan Masyarakat Desa Rumbai</h2>
      <p class="text-muted">Laporkan permasalahan, saran, atau keluhan Anda untuk meningkatkan pelayanan masyarakat.</p>
    </div>

    {{-- Tampilkan pesan sukses --}}
    @if (session('success'))
      <div class="alert alert-success text-center">
        {{ session('success') }}
      </div>
    @endif

    {{-- Tampilkan error validasi --}}
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="contact-section shadow-sm">

          <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Alamat Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
              <label for="kategori" class="form-label">Kategori Pengaduan</label>
              <select class="form-select" id="kategori" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Pelayanan Publik" {{ old('kategori') == 'Pelayanan Publik' ? 'selected' : '' }}>Pelayanan Publik</option>
                <option value="Fasilitas Umum" {{ old('kategori') == 'Fasilitas Umum' ? 'selected' : '' }}>Fasilitas Umum</option>
                <option value="Keamanan" {{ old('kategori') == 'Keamanan' ? 'selected' : '' }}>Keamanan</option>
                <option value="Kesehatan" {{ old('kategori') == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                <option value="Lainnya" {{ old('kategori') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="pesan" class="form-label">Isi Pengaduan</label>
              <textarea class="form-control" id="pesan" name="pesan" rows="5" required>{{ old('pesan') }}</textarea>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary px-4 py-2">Kirim Pengaduan</button>
            </div>
          </form>

        </div>
      </div>
    </div>

  </div>
</section>
@endsection
