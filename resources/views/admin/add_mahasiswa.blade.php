@extends('layouts_admin')
@section('title', 'Tambah Mahasiswa')

  @section('content')


        <div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Mahasiswa</h1>
          </div>

          <!-- Card Tambah Mahasiswa --> 
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
                      <form action="{{ route('daftarkan_mahasiswa') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <div class="div"> 
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
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="div"> 
                                <select class="custom-select" name="gender">
                                  <option selected>Pilih</option>
                                  <option value="Laki-Laki">Laki-Laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>                             
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" name="username" class="form-control" placeholder="Username(NPM)">
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="submit" class="btn btn-primary">Tambah</button>
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
        <!-- End Card Tambah Mahasiswa --> 

  @endsection