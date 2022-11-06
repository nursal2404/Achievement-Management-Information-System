<!DOCTYPE html>
<html lang="en">
@include('dashboard/head')

<title>Tambahkan Berita</title>
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

      <li class="nav-item">
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

      <li class="nav-item active">
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
               

        </div>

      </div>

    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  @include('dashboard/script')
</body>

</html>