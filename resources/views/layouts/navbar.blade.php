    {{-- Start Nav --}}
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 border-bottom">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('image/logo.png') }}" width="55" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">
                            <img src="{{ asset('image/icon/ico-home.png') }}" alt="" height="20">
                            Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="profile">
                            <img src="{{ asset('image/icon/ico-profile.png') }}" alt="" height="20">
                            Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="visimisi">
                            <img src="{{ asset('image/icon/ico-visi.png') }}" alt="" height="20">
                            Visi Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pendaftaran">
                            <img src="{{ asset('image/icon/ico-add.png') }}" alt="" height="20">
                            Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="kontak">
                            <img src="{{ asset('image/icon/ico-contact.png') }}" alt="" height="20">
                            Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="gallery">
                            <img src="{{ asset('image/icon/ico-7.png') }}" alt="" height="20">
                            Gallery</a>
                    </li>

                </ul>
                <a href="/admin" class="btn btn-success">
                    Login
                </a>

            </div>
        </div>
    </nav>
    {{-- End Nav --}}
