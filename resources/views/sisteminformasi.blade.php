<!DOCTYPE html>
<html lang="en">
<title>Prestasi Prodi Sistem Informasi</title>
@include('landingpage/head')
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link">Beranda</a>
                    <a href="/visi_misi" class="nav-item nav-link">Visi Misi</a>
                    <a href="/berita" class="nav-item nav-link">Berita</a>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown">Prestasi</a>
                        <div class="dropdown-menu m-0">
                            <a href="/informatika" class="dropdown-item">Informatika</a>
                            <a href="/teknik_sipil" class="dropdown-item">Teknik Sipil</a>
                            <a href="/teknik_elektro" class="dropdown-item">Teknik Elektro</a>
                            <a href="teknik_mesin" class="dropdown-item">Teknik Mesin</a>
                            <a href="/arsitektur" class="dropdown-item">Arsitektur</a>
                            <a href="/sisteminformasi" class="dropdown-item active">Sistem Informasi</a>
                        </div>
                    </div>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="login" class="btn btn-primary py-2 px-4 ms-3">Login</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Prestasi</h1>
                    <h2 class="display-4 text-white animated zoomIn">Prodi Sistem Informasi</h2>
                    <a href="" class="h5 text-white">Fakultas Teknik</a>
                    <a href="" class="h5 text-white">Universitas Bengkulu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


     <!-- Service Start -->
     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Juara</h4>
                        <h5 class="mb-3">Nama Lomba</h5>
                        <p class="m-0">Nama Orang</p>
                        <p class="m-0">NPM</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Juara</h4>
                        <h5 class="mb-3">Nama Lomba</h5>
                        <p class="m-0">Nama Orang</p>
                        <p class="m-0">NPM</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Juara</h4>
                        <h5 class="mb-3">Nama Lomba</h5>
                        <p class="m-0">Nama Orang</p>
                        <p class="m-0">NPM</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Juara</h4>
                        <h5 class="mb-3">Nama Lomba</h5>
                        <p class="m-0">Nama Orang</p>
                        <p class="m-0">NPM</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Juara</h4>
                        <h5 class="mb-3">Nama Lomba</h5>
                        <p class="m-0">Nama Orang</p>
                        <p class="m-0">NPM</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Juara</h4>
                        <h5 class="mb-3">Nama Lomba</h5>
                        <p class="m-0">Nama Orang</p>
                        <p class="m-0">NPM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    
    

                </div>
    
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


@include('landingpage/script')
</body>

</html>