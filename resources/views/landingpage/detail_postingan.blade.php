@extends('layouts_landingpage')
@section('title', 'Berita')


@section('content')
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Berita Prestasi</h1>
                    <a href="" class="h5 text-white">Fakultas Teknik</a>
                    <a href="" class="h5 text-white">Universitas Bengkulu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
            <h2 class="card-title text-center">{{ $posts->title }}</h2>


                    <img src="{{ asset ($posts->photo) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div>                        
                            <h3 class="card-text">{{ $posts->body }}</3>                            
                        </div>
                        <p class="card-text text-end"><small class="text-muted">
                                {{ $posts->created_at->diffForHumans() }}
                            </small></p>

                        <h4>{{ $posts->deskripsi }}</h4>
                        
                        
                    </div>

  
          </div>
        </div>
    </div>  
    
  @endsection