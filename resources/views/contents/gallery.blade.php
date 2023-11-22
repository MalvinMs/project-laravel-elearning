@extends('layouts.layout')

@section('content')
<section id="gallery-bg" class="py-5">
    <div class="container text-center text-white">
        <div class="hero-title">
            <div class="hero-text py-5 bg-dark bg-opacity-50 rounded-3">Gallery</div>

        </div>
    </div>
</section>

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

        </div>

        <div class="row">
            @foreach ($foto as $f)
            <div class="col-lg-3 col-md-6 col-6">
                <div class="card">
                    <img src="{{ asset('storage/'.$f->foto) }}" alt="" class="img-fluid img-thumbnail">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $f->judul }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- EndGallery --}}
@endsection
