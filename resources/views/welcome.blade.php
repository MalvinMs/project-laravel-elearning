@extends('layouts.layout')

@section('content')
<section id="hero" class="py-5">
    <div class="container text-center text-white">
        <div class="hero-title">
            <div class="hero-text">Selamat Datang <br> Di SD Negeri Rejomulyo</div>
            <p>Eksplorasi Ilmu, Tumbuh Kreativitas Bercerita Keceriaan di Setiap Hari di Sekolah Kita.</p>
        </div>
    </div>
</section>

<section id="program" style="margin-top: -50px">
    <div class="container">
        <div class="row row-cols-lg-7 g-2 g-lg-3">
            <div class="col-lg-2">
                <a href="{{ url('prestasi') }}" class="text-decoration-none text-reset">
                    <div class="bg-white rounded-3 shadow p-3 text-center">
                        <img src="{{ asset('image/icon/ico-1.png') }}" alt="icon1" style="max-width: 100%; height: auto;">
                        <h6 class="mt-2" style="font-size: 0.8rem;">Prestasi</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="{{ url('ekstrakurikuler') }}" class="text-decoration-none text-reset">
                    <div class="bg-white rounded-3 shadow p-3 text-center">
                        <img src="{{ asset('image/icon/ico-2.png') }}" alt="icon2" style="max-width: 100%; height: auto;">
                        <h6 class="mt-2" style="font-size: 0.8rem;">Ekstrakurikuler</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="{{ url('berita') }}" class="text-decoration-none text-reset">
                    <div class="bg-white rounded-3 shadow p-3 text-center">
                        <img src="{{ asset('image/icon/ico-3.png') }}" alt="icon3" style="max-width: 100%; height: auto;">
                        <h6 class="mt-2" style="font-size: 0.8rem;">Berita</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="{{ url('agenda') }}" class="text-decoration-none text-reset">
                    <div class="bg-white rounded-3 shadow p-3 text-center">
                        <img src="{{ asset('image/icon/ico-4.png') }}" alt="icon4" style="max-width: 100%; height: auto;">
                        <h6 class="mt-2" style="font-size: 0.8rem;">Agenda</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="{{ url('fasilitas') }}" class="text-decoration-none text-reset">
                    <div class="bg-white rounded-3 shadow p-3 text-center">
                        <img src="{{ asset('image/icon/ico-5.png') }}" alt="icon5" style="max-width: 100%; height: auto;">
                        <h6 class="mt-2" style="font-size: 0.8rem;">Fasilitas</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="{{ url('struktur') }}" class="text-decoration-none text-reset">
                    <div class="bg-white rounded-3 shadow p-3 text-center">
                        <img src="{{ asset('image/icon/ico-6.png') }}" alt="icon7" style="max-width: 100%; height: auto;">
                        <h6 class="mt-2" style="font-size: 0.8rem;">Struktur Organisasi</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>


</section>


{{-- Berita --}}
<section id="berita">
    <div class="container mt-5 py-5 bg-white rounded-3">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Berita Kegiatan Sekolah</h2>
        </div>

        <div class="row py-5 ">
            @foreach ($beritaTerbaru as $berita)
            <div class="col-lg-4">
                <div class="card border-0 px-2">
                    <img src="{{ asset('storage/'. $berita->foto) }}" class="img-fluid mb-3 rounded" alt="">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">{{ $berita->tgl_berita }}</p>
                        <h4 class="fw-bold mb-3">{{ $berita->judul }}</h4>
                        <p class="text-secondary">{{ $berita->deksripsi_1 }}</p>
                        <a href="" class="text-decoration-none text-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="footer-berita text-center">
            <a href="{{ url('/berita') }}" class="btn btn-outline-success">Berita Lainnya</a>
        </div>
    </div>
</section>
{{-- EndBerita --}}

{{-- Pendaftaran --}}
<section id="join" class="wave-bg py-5">

    <div class="container py-5 bg-white rounded-3">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 px-5">
                <h1 class="fw-bold py-2">Selamat Datang di Pendaftaran Online</h1>
                <p class="mb-3">"Masa depan cerah dimulai dari pendidikan yang baik. Gabung dengan kami dan jadilah siswa yang cerdas"</p>
                <a href="{{ url('/pendaftaran') }}" class="btn btn-outline-success">Daftar Sekarang</a>
            </div>
            <div class="col-lg-6 px-5">
                <img src="{{ asset('image/daftar-2.png') }}" class="img-fluid" alt="">

            </div>
        </div>
    </div>
</section>
{{-- EndPendaftaran --}}

{{-- Pengumuman --}}
<section id="pengumuman" class="bg-pengumuman py-5">
    <div class="container py-5">
        <div class="header-pengumuman text-center">
            <h2 class="text-white fw-bold">Informasi PPDB</h2>
        </div>

        <div class="row row-cols-lg-3 g-2 g-lg-3 py-5">
            <div class="col-lg-4">
                <div class="card text-center h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Informasi Penting</h5>
                        <p class="card-text">Pengumuman PPDB terbaru 2023</p>
                        <a href="{{ url('/pendaftaran') }}" class="bi bi-tag btn btn-outline-success mt-auto"> Lihat Selengkapnya</a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Hasil Seleksi</h5>
                        <p class="card-text">Hasil Seleksi Daftar hasil seleksi PPDB tahun 2023 SDN Rejomulyo</p>
                        <a href="{{ url('/pendaftaran') }}" class="bi bi-calendar btn btn-outline-success mt-auto"> Lihat Hasil</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Tata Cara Daftar Ulang</h5>
                        <p class="card-text">Panduan daftar ulang SDN Rejomulyo</p>
                        <a href="{{ url('/pendaftaran') }}" class="bi bi-card-checklist btn btn-outline-success mt-auto"> Lihat Detail</a>
                    </div>
                </div>
            </div>

        </div>

</section>
{{-- EndPengumuman --}}



{{-- Video --}}
<section id="video-youtube" class="py-5">
    <div class="container py-5 bg-white rounded-3">
        <div class="header-video text-center">
            <h2 class="fw-bold">Video Kegiatan Sekolah</h2>
        </div>

        <div class="row py-5">
            @foreach ($video as $v)

            <div class="col-lg-4 px-3">
                <iframe width="100%" height="215" src="{{ $v->link_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            @endforeach

        </div>
        <div class="footer-video text-center">
            <a href="{{ url('/video') }}" class="btn btn-outline-success">Video Lainnya</a>
        </div>
    </div>
</section>

{{-- Gallery --}}
<section id="foto" class="section-foto parallax">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                <div class="white-line ms-0 rounded-2"></div>
            </div>
            <div>
                <a href="{{ url('/gallery') }}" class="btn btn-outline-light">Foto Lainnya</a>
            </div>
        </div>

        <div class="row">
            @foreach ($foto as $f)

            <div class="col-lg-3 col-md-6 col-6">
                <img src="{{ asset('storage/'.$f->foto) }}" alt="" class="img-fluid img-thumbnail">
            </div>
            @endforeach

        </div>
    </div>
</section>
{{-- EndGallery --}}

{{-- Fasilitas --}}
<section id="fasilitas" class="py-5">
    <div class="container py-5 bg-white rounded-3">
        <div class="text-center py-5">
            <h3 class="fw-bold">Fasilitas Sekolah</h3>
            @foreach ($fasilitas as $f)
            <img src="{{ asset('storage/'.$f->foto) }}" alt="Fasilitas" class="" style="height: 427px; width:640px;">

            @endforeach
        </div>
        <div class="text-center">
            <a href="{{ url('/fasilitas') }}" class="btn btn-outline-success">Fasilitas Lainnya</a>
        </div>
    </div>
</section>
{{-- EndFasilitas --}}

@endsection
