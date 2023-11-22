<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" href="{{ asset('icon/favicon.ico') }}">
    <title> SDN Rejomulyo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://unpkg.com/feather-icons"></script>

</head>
<body>

    {{-- TopBar --}}
    @include('layouts.topbar')

    {{-- Navbar --}}
    @include('layouts.navbar')
    {{-- Content --}}
    @yield('content')

    <section id="footer" class="bg-footer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#F3F3F3" fill-opacity="1" d="M0,96L80,80C160,64,320,32,480,42.7C640,53,800,107,960,117.3C1120,128,1280,96,1360,80L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
        </svg>
        <div class="container py-3">
            <footer>
                <div class="row row-cols-lg-3 g-2 g-lg-3 py-5">
                    <div class="col-lg-4">
                        <div class="card text-center h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title bi bi-chat-left-dots-fill"> Tentang</h5>
                                <div class="green-line mb-3"></div>
                                <a href="" class="bi bi-person-fill btn btn-success  mb-3"> Kepala Sekolah</a>
                                <a href="" class="bi bi-trophy-fill btn btn-success  mb-3"> Visi Misi</a>
                                <a href="" class="bi bi-stopwatch-fill btn btn-success "> Sejarah</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-center h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="bi bi-link-45deg card-title">Website Lainnya</h5>
                                <div class="green-line mb-3"></div>
                                <a href="" class="bi bi-building-fill btn btn-success mb-3"> Perpustakaan</a>
                                <a href="" class="btn bi-book-fill btn-success mb-3"> E-Learning</a>
                                <a href="" class="btn bi-person-fill-add btn-success"> PPDB</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-center h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title mb-3">
                                    <img src="{{ asset('image/logo.png') }}" alt="logo" height="50" width="45">
                                    SDN Rejomulyo
                                </h5>
                                <a href="https://maps.app.goo.gl/UTWetax4C8CMzV2v8" class=" bi bi-geo-alt-fill btn btn-success mb-3"> Jl.Sasana Sari No. 12, Rejomulyo, Kec. Kartoharjo, Kota Madiun</a>
                                <a href="" class="btn btn-success bi bi-telephone-fill mb-3"> (0351) 457126</a>
                                <a href="mailto:sdnrejomulyo.kotamadiun@gmail.com" target="__blank" class="btn btn-success bi bi-envelope-fill mb-3"> Email</a>
                                <div class="green-line mb-3"></div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="card m-2 rounded  shadow">
                                        <a href="#" class="twitter">
                                            <div class="card-body">
                                                <i class="bi bi-youtube"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="card m-2 rounded shadow">
                                        <a href="#" class="facebook">
                                            <div class="card-body">
                                                <i class="bi bi-facebook"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="card m-2 rounded shadow">
                                        <a href="#" class="instagram">
                                            <div class="card-body">
                                                <i class="bi bi-instagram"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="container text-center text-white">
                    <p>&copy; <span class="currentYear"></span> SimpleScriptSquad</p>
                </div>
            </footer>
        </div>
    </section>

    <script>
        feather.replace();

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        var currentYearElements = document.getElementsByClassName('currentYear');
        var currentYear = new Date().getFullYear();

        for (var i = 0; i < currentYearElements.length; i++) {
            currentYearElements[i].textContent = currentYear;
        }

    </script>
</body>
</html>
