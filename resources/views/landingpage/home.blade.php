@extends('layouts_landingpage')
@section('title', 'Beranda')


@section('content')

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    @if ($posts->count())
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ $posts[0]->title }}</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ $posts[0]->body }}</h1>
                            <a href="postingan/{{ $posts[0]->id }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Baca Selanjutnya</a>
                        </div>
                    </div>
                    @else
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Tidak Ada Berita Ditemukan</h5>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Carousel End -->
    
@endsection

