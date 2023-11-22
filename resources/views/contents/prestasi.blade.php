@extends('layouts.layout')

@section('content')
<section id="prestasi" class="py-5 ">
    <div class="container bg-white text-center rounded-3 py-3 mb-3">
        <h1 class="fw-bold">Prestasi</h1>
    </div>

    @foreach ($prestasi as $p)

    <div class="container my-3 py-5 bg-white rounded-3">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 px-5">
                <img src="{{ asset('storage/'.$p->foto) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 px-5">
                <h2 class="fw-bold py-2">{{ $p->judul }}</h2>
                <p>Diraih Oleh: {{ $p->nama }}</p>
                <p>Kelas: {{ $p->kelas }}</p>
                <p>{{ $p->deskripsi }}</p>
                <div class="text-secondary">{{ $p->tgl_juara }}</div>
            </div>
        </div>
    </div>
    @endforeach


</section>
@endsection
