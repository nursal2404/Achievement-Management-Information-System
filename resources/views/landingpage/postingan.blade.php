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
            <div class="row g-5 col-md-6-center">

            @if ($posts->count())
                <div class="mb-3 text-center">
                    <img src="{{ asset ($posts[0]->photo) }}" class="card-img-top" style="width: 50%" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $posts[0]->title }}</h5>
                        <p class="card-text">{{ $posts[0]->body }}</p>
                        <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
                        <a href="postingan/{{ $posts[0]->id }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            @else
            <div class="text-center">
                <p>Tidak Ada Berita Ditemukan</p>
            </div>
            @endif


                <div class="container">
                    <div class="row">
                    @foreach ($posts->skip(1) as $post)
                        <div class="col-md-4 text-center">
                            <div class="card">   
                                <img src="{{ asset ($post->photo) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                        <p class="card-text">{{ $post->body }}</p>
                                        <p class="card-text text-end"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
                                    <a href="postingan/{{ $post->id }}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>  
                        </div>
                    @endforeach                                
                    </div>                   
                </div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>  
    
  @endsection