@extends('layouts.layout')

@section('content')
<section id="hero" class="py-5">
    <div class="container-fluid text-center text-white">
        <div class="hero-title">
            <div class="hero-text py-5 bg-dark bg-opacity-50 rounded-3">Kumpulan Berita Sekolah</div>
        </div>
    </div>
</section>

<section id="berita" class="py-5">
    <div class="container bg-white rounded-3 py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($beritas as $b)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $b->foto) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $b->judul }}</h5>
                        <p class="card-text">{{ $b->deskripsi_1 }}</p>
                        <p class="card-text">{{ $b->deskripsi_2 }}</p>
                        <p class="card-text"><small class="text-muted">{{ $b->tgl_berita }}</small></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    </div>
</section>
@endsection
