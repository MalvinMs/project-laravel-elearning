@extends('layouts.layout')

@section('content')
<section id="join" class="py-5">
    <div class="wave-bg container py-5 bg-white rounded-3">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 px-5">
                <h1 class="fw-bold py-2">Selamat Datang di Pendaftaran Online</h1>
                <p class="mb-3">"Masa depan cerah dimulai dari pendidikan yang baik. Gabung dengan kami dan jadilah siswa yang cerdas"</p>
                <a href="{{ $daftarLink->value }}" class="btn btn-outline-success">Daftar Sekarang</a>
            </div>
            <div class="col-lg-6 px-5">
                <img src="{{ asset('image/daftar-2.png') }}" class="img-fluid" alt="">

            </div>
        </div>
    </div>
</section>
<section id="detail-reg" class="py-5">
    <div class="container py-5 bg-white rounded-3 text-center ">
        <h1 class="fw-bold">Informasi PPDB Tahun <span class="currentYear"></span></h1>
        <h6 class="">Terimakasih atas partisipasi anda pada <br> PPDB Tahun <span class="currentYear"></span></h6>
    </div>
</section>

<section id="pengumuman" class="py-5">
    <div class="container bg-white rounded-3 bg-pengumuman  py-5">
        <div class="header-pengumuman text-center">
            <h2 class="text-white fw-bold">Informasi PPDB</h2>
        </div>

        <div class="row row-cols-lg-3 g-2 g-lg-3 py-5">
            <div class="col-lg-4">
                <div class="card text-center h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Informasi Penting</h5>
                        <p class="card-text">Pengumuman PPDB terbaru 2023</p>
                        <a href="{{ $daftarLink->value }}" class="bi bi-tag btn btn-outline-success mt-auto"> Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Hasil Seleksi</h5>
                        <p class="card-text">Hasil Seleksi Daftar hasil seleksi PPDB tahun 2023 SDN Rejomulyo</p>
                        <a href="{{ $hasilLink->value }}" class="bi bi-calendar btn btn-outline-success mt-auto"> Lihat Hasil</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Tata Cara Daftar Ulang</h5>
                        <p class="card-text">Panduan daftar ulang SDN Rejomulyo</p>
                        <a href="" class="bi bi-card-checklist btn btn-outline-success mt-auto"> Lihat Detail</a>
                    </div>
                </div>
            </div>

        </div>

</section>
@endsection
