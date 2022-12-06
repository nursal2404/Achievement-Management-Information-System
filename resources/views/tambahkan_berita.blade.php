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
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                <input type="email" name="judul" class="form-control" id="exampleFormControlInput1" placeholder="Tuliskan Judul">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Mahasiswa Peraih</label>
                                <input type="email" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Tuliskan Nama Mahasiswa Peraih">
                            </div>

                            <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            
                            <p>
                              <label for="date">Tanggal</label>
                              <input type="date" name="date" id="date">
                            </p>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
               

@endsection

</html>