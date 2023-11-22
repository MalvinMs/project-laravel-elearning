@extends('layouts.layout')

@section('content')
<section id="organisasi" class="py-5">
    <div class="container text-center text-white">
        <div class="hero-title">
            <div class="hero-text bg-dark bg-opacity-50 py-3 rounded-3">Struktur Organisasi</div>
        </div>
    </div>
</section>

<section id="img-organisasi" class="py-5">
    <div class="container text-center bg-white rounded-3 py-5">
        <h1 class="fw-bold">Struktur Organisasi <br> SDN Rejomulyo</h1>
        <img src="{{ asset('storage/'.$struktur->value) }}" alt="" class="img-fluid">
    </div>
</section>
@endsection
