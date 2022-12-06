@extends('layouts_admin')
@section('title', 'Tambah Lomba')

  @section('content')

        <div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Lomba</h1>
          </div>

          <!-- Form Daftarkan Lomba -->
          <div class="row justify-content-center">
            <div class=" col-xl-8 col-lg-8 col-md-9">
              <div class="card mb-4">
                <div class="table-responsive p-3">
                    <div class="card-body">
                      @if (session('sukses'))
                      <div class="alert alert-success">
                          {{ session('sukses') }}
                      </div>
                      @endif
                      <form class="row g-3" action="/lomba" method="POST">
                        @csrf
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" >
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">NPM</label>
                            <input type="text" name="npm" class="form-control" >
                        </div>

                        <div class="input-group col-12 mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" >Jurusan</label>
                            </div>
                            <select class="custom-select" name="jurusan">
                                <option selected>Pilih Jurusan</option>
                                <option value="Informatika">Informatika</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Arsiterktur">Arsitektur</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                            </select>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Nama Lomba</label>
                            <input type="text" name="lomba" class="form-control">
                        </div>

                        <div class="col-12 mb-4">
                            <label class="form-label">Penyelenggara</label>
                            <input type="text" name="penyelenggara" class="form-control">
                        </div>

                        <div class="input-group col-12 mb-4">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Tingkatan</label>
                            </div>
                                <select class="custom-select" name="tingkat">
                                    <option selected>Pilih Tingkatan</option>
                                    <option value="Desa">Desa/Lurah</option>
                                    <option value="Kecamatan">Kecamatan</option>
                                    <option value="Kota/Kabupaten">Kota/Kabupaten</option>
                                    <option value="Provinsi">Provinsi</option>
                                    <option value="Nasional">Nasional</option>
                                    <option value="Internasional">Internasional</option>
                                </select>
                        </div>
                                <p class="col-lg-12 mb-4">
                                  <label for="date">Tanggal</label>
                                  <input type="date" name="date" value="DD-MM-YY" id="date">
                                </p>

                                <div >
                            <button type="submit" class="ml-2 btn btn-primary">Daftarkan</button>
                        </div> 
                      </form>      
                    </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
          <!-- End Card Tambah Lomba -->
      
  @endsection

</html>