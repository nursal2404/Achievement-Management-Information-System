<!DOCTYPE html>
<html lang="en">
<title>Beranda</title>
@include('landingpage/head')
<div class="collapse navbar-collapse" id="Menu">
                <div class="navbar-nav ms-auto py-0">
                    <li clas="nav-item"><a href="/" class="nav-link active">Beranda</a></li>
                    <li clas="nav-item"><a href="/visi_misi" class="nav-link">Visi Misi</a></li>
                    <li clas="nav-item"><a href="/berita" class="nav-link">Berita</a></li>
                    <li clas="nav-item"><a href="data_prestasi" class="nav-link">Prestasi</a></li>
                </div>
                <a href="login" class="border border-primary py-2 px-4 ms-3">Login</a>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Perolehan Juara</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Nama Perlombaan</h1>
                            <a href="/berita" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Baca Selanjutnya</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Perolehan Juara</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Nama Perlombaan</h1>
                            <a href="/berita" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Baca Selanjutnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


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

<!-- JavaScript Libraries -->
@include('landingpage/script')
<!-- End JavaScript Libraries -->
</body>

</html>