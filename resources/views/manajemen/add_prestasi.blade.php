<!DOCTYPE html>
<html lang="en">
@include('dashboard/head')


<title>Tambah Prestasi</title>
<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-text mx-3">SI Manajemen Prestasi</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu
      </div>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="/data_user" 
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fa-solid fa-users"></i>
          <span>Manajemen Data User</span>
        </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" 
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fa-solid fa-trophy"></i>
          <span>Manajemen Prestasi</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" 
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fa-solid fa-medal"></i>
          <span>Manajemen Lomba</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/tambahkan_berita" 
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fa-solid fa-newspaper"></i>
          <span>Manajemen Berita</span>
        </a>
      </li>
        
    </ul>
            
@include('dashboard/header_admin')
    <div class="container-fluid" id="container-wrapper">
        <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Prestasi</h1>
        </div>
    <div class="row mb-3">

    <!-- Form Daftarkan Lomba -->
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <form class="row g-3" action="/prestasi" method="POST">
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
                        <label class="form-label">Perolehan Prestasi</label>
                        <input type="text" name="juara" class="form-control">
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
                            </select>
                    </div>
                            <p class="col-lg-12 mb-4">
                              <label for="date">Tanggal</label>
                              <input type="date" name="date" value="YYYY-MM-DD" id="date">
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
    <!-- End Form Daftar Lomba -->

       





  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

@include('dashboard/script')
</body>

</html>