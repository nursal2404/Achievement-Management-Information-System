@extends('layouts_landingpage')
@section('title', 'Beranda')


@section('content')

        <div >
            <div>
                <div>
                    
                    @if ($posts->count())
                    <div class="d-flex justify-content-center">
                    <img class="w-50 my-4" src="{{ asset ($posts[0]->photo) }}" alt="Image">
                    </div>
                    
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ $posts[0]->title }}</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ $posts[0]->body }}</h1>
                            <a href="postingan/{{ $posts[0]->id }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Baca Selanjutnya</a>
                        </div>
                    </div>
                    @else
                    <img class="w-100" src="img/ft-unib.jpg" alt="Image" style="height: 100vh;">
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

    
@endsection

