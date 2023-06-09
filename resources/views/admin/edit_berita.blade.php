@extends('layouts_admin')
@section('title', 'Edit Berita')

  @section('content')

        <div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Berita</h1>
          </div>

          <!-- Form Data Lomba ke Data Prestasi -->
          <div class="row justify-content-center">
            <div class=" col-xl-8 col-lg-8 col-md-9">
              <div class="card mb-4">
                <div class="table-responsive p-3">
                    <div class="card-body">
                        <form class="row g-3" action="/update_berita/{{ $posts->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class="col-12 mb-3">
                              <label class="form-label">Judul</label>
                              <input type="text" name="title" value="{{ $posts->title }}" class="form-control" placeholder="Tulis judul">
                          </div>
                          <div class="col-12 mb-3">
                              <label class="form-label">Isi Berita</label>
                              <input type="text" name="body" value="{{ $posts->body }}" class="form-control" placeholder="Tulis isi berita">
                          </div>
                          <div class="col-12 mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" value="{{ $posts->deskripsi }}" class="form-control" rows="3" placeholder="Tulis deskripsi"></textarea>
                          </div>

                          <div class="col-lg-12">
                              <label for="formFile" class="form-label">Upload File Gambar</label>
                          </div>
                          
                          <div class="d-flex justify-content-center mb-4" style="margin-left: 13px;">
                              <input class="form" name="photo" type="file" id="formFile">
                          </div>
                          
                          </div>
                          <div class="d-flex justify-content-center mb-4">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>     
                    </div>
                </div>
            </div>
          </div>  
          <!-- End Form Data Lomba ke Data Prestasi -->
        </div>

  @endsection

</html>