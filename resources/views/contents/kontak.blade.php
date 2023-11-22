@extends('layouts.layout')

@section('content')
<section id="contact" class="py-5">
    <div class="container bg-white rounded-3  py-5">
        <div class="row d-flex">
            <!-- Column Kiri - Form Saran -->
            <div class="col-md-6 text-center">
                <h4 class="fw-bold">Saran & Masukkan</h4>
                @csrf
                <form class="mx-auto">
                    <div class="mb-3 text-start">
                        <label for="nama" class="form-label fw-bold">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="email" class="form-label fw-bold">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="saran" class="form-label fw-bold">Saran:</label>
                        <textarea class="form-control" id="saran" name="saran" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-success">Kirim</button>
                </form>
            </div>

            <!-- Column Kanan - Peta Lokasi -->
            <div class="col-md-6 text-center">
                <h4 class="fw-bold">Lokasi </h4>
                <div class=" embed-responsive embed-responsive-16by9"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.607812212047!2d111.5350162745066!3d-7.617581775311192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bee374911f05%3A0xbbe379541caca93c!2sSDN%20REJOMULYO!5e0!3m2!1sid!2sid!4v1700150302326!5m2!1sid!2sid" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
        </div>
    </div>

</section>
@endsection
