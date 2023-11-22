@extends('layouts.layout')

@section('content')
<section id="profile" class="d-flex align-items-center justify-content-center">
    <div class="container  text-center bg-white rounded-3 bg-opacity-75">
        <div class="hero-text text-black ">Sekolah Dasar Negeri Rejomulyo</div>
    </div>
</section>

<section id="sejarah" class="py-5">
    <div class="container bg-white text-center rounded-3">
        <div class="container py-3">
            @foreach ($profile as $p)
            <h2 class="py-3 fw-bold">{{ $p->judul }}</h2>
            <p>{{ $p->deskripsi }}</p>
            @endforeach

        </div>
    </div>
</section>


<section id="kepsek" class="py-5">
    <div class="container bg-white rounded-3">
        <div class="row d-flex align-items-center py-5">
            @foreach ($profile as $p)

            <div class="col-lg-6 text-center">
                <img src="{{ asset('storage/'.$p->foto) }}" class="" width="250" height="250" alt="">
                <div class="card-title fw-bold mt-3">
                    {{ $p->nama }}
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="card-title fw-bold mb-3">Sambutan Kepala Sekolah</h2>
                <div class="card-text">{{ $p->sambutan }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
