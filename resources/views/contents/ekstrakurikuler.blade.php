@extends('layouts.layout')

@section('content')
<section id="ekstra" class="py-5">
    <div class="container bg-white py-3 rounded-3 py-5 text-center">
        <div class="container bg-white py-3 shadow rounded-3 mb-3">
            <h1 class="fw-bold">Ekstrakurikuler</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($ekstra as $e)

            <div class="col">
                <div class="card shadow">
                    <img src="{{ asset('storage/'.$e->foto) }}" class="img-fluid image-thumbnail" alt="...">
                    <div class="card-body">
                        <a href="#" class="btn btn-outline-success">{{ $e->judul }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
