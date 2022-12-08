@extends('layouts_admin')
@section('title', 'Tambahkan Berita')

  @section('content')

            <div class="container-fluid" id="container-wrapper">
                <div class="text-center mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tambahkan Berita</h1>
                </div>
            <div class="row mb-3">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="card-header"> 
                        <form class="row g-3" action="/berita" method="POST">
                        @csrf  
                            <div class="mb-3">
                                <label class="form-label">Isi Berita</label>
                                <input type="text" name="body" class="form-control" placeholder="Tulis isi berita">
                            </div>

                            <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi"></textarea>
                            </div>
                            
                            <p>
                              <label for="date">Tanggal</label>
                              <input type="date" name="date" id="date">
                            </p>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
               

@endsection

</html>