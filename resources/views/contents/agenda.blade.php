@extends('layouts.layout')

@section('content')
<section id="agenda" class="py-5">
    <div class="container  py-5">
        @foreach ($agendas as $agenda)
        <div class="row">
            <div class=" col-md-3 mx-3 bg-white rounded-3 mb-4">
                <h4>Tanggal</h4>
                <p>{{ $agenda->tgl_agenda }}</p>
                <!-- Tambahkan tanggal atau elemen lainnya di sini -->
            </div>
            <div class="col-md-8 mx-3 bg-white rounded-3 mb-4">
                <h4>{{ $agenda->judul }}</h4>
                <p>{{ $agenda->deskripsi }}</p>
                <!-- Tambahkan deskripsi atau elemen lainnya di sini -->
            </div>
        </div>

        @endforeach
    </div>
</section>
@endsection
