@extends('layouts.layout')
@section('content')
<section id="visi-misi" class="py-5">
    <div class="container text-center bg-white rounded-3">
        <img src="{{ asset('storage/' . $fotoVisi->value)  }}" class="img-fluid" alt="visi-misi">
    </div>
</section>
@endsection
