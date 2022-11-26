<!DOCTYPE html>
<html lang="en">
@include('dashboard/head')

<title>Tambahkan Mahasiswa</title>
<body>
<!-- Main Page -->
<div id="wrapper"> 
  @include('dashboard/sidebar_admin')
  
  <!-- Main Content -->
  @include('dashboard/header_admin')

        <!-- Card Tambah Mahasiswa-->
        <div class="container-fluid" id="container-wrapper">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambahkan Mahasiswa</h1>
          </div>

          <div class="row mb-3">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-12 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <form action="proses_tambah" method="POST">
                      @csrf
                      <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                      </div>
                
                      <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" value="{{ old('username') }}" required>
                      </div>

                      <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}" required>
                      </div>

                      <div class="input-group mb-3">
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

                      <div class="mb-3">
                        <label  class="form-label">Role</label>
                        <select class="form-select" name="level">
                          <option selected>Pilih role</option>
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                        </select>
                      </div>

                      <button type="submit" class="btn btn-success">Simpan</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- End Card Tambah Mahasiswa -->
    
        </div>
    </div>
  <!-- End Main Content -->

</div>
<!-- End Main Page -->        

 @include('dashboard/script')

</html>