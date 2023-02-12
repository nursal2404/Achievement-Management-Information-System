@extends('layouts_admin')
@section('title', 'Tambahkan Berita')

  @section('content')

        <div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambahkan Berita</h1>
          </div>

          <!-- Form Tambahkan Berita -->
          <div class="row justify-content-center">
            <div class=" col-xl-8 col-lg-8 col-md-9">
              <div class="card mb-4">
                <div class="table-responsive p-3">
                    <div class="card-body">
                        <form class="row g-3"  action="{{ route('create_post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class="col-12 mb-3">
                              <label class="form-label">Judul</label>
                              <input type="text" name="title"  class="form-control @error('title') is-invalid @enderror" 
                              value="{{ old('title') }}" placeholder="Tulis judul">
                              @error('title')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                          </div>
                          <div class="col-12 mb-3">
                              <label class="form-label">Isi Berita</label>
                              <input type="text" name="body"  class="form-control @error('body') is-invalid @enderror" 
                              value="{{ old('body') }}" placeholder="Tulis isi berita">
                              @error('body')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                          </div>
                          <div class="col-12 mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="3" 
                            value="{{ old('deskripsi') }}" placeholder="Tulis deskripsi"></textarea>
                            @error('deskripsi')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                          </div>

                          <div class="col-lg-12">
                              <label for="formFile" class="form-label">Upload File Gambar</label>
                          </div>
                          
                          <div class="d-flex justify-content-center mb-4" style="margin-left: 13px;">
                              <input class="form-control @error('photo') is-invalid @enderror" 
                              name="photo" type="file" id="formFile">
                              @error('photo')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                          </div>
                          
                          </div>
                          <div class="d-flex justify-content-center mb-4">
                              <button type="submit" class="btn btn-primary">Buat</button>
                          </div>
                        </form>     
                    </div>
                </div>
            </div>
          </div>  
          <!-- End Form Tambahkan Berita -->
        </div>

  @endsection

</html>