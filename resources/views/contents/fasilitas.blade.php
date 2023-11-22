@extends('layouts.layout')

@section('content')
<section id="bg-fasilitas" class="py-5">
    <div class="container-fluid d-flex">
        <img src="{{ asset('image/bg-fasilitas.png') }}" class="img-fluid" alt="">
    </div>
    <div class="mt-3 container-fluid py-3 bg-dark text-white bg-opacity-75 text-center">
        <h4>Ruang ini berisikan mengenai fasilitas yang disediakan untuk menunjang proses pembelajaran di SDN Rejomulyo.</h4>
    </div>
    <div class="container-fluid py-5 mb-5 bg-blue text-center">
        <h2 class="fw-bold ">Fasilitas Sekolah</h2>
    </div>

    <div class="container bg-white text-center rounded-3 ">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($fasilitas as $f)

            <div class="col">
                <div class="card my-2">
                    <img src="{{ asset('storage/'.$f->foto) }}" class="img-fluid image-thumbnail" alt="...">
                    <div class="card-body">
                        <a href="#" class="btn btn-outline-success">{{ $f->judul }}</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection
