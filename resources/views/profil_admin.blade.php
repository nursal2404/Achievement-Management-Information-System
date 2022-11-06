<!DOCTYPE html>
<html lang="en">
@include('dashboard/head')
<title>Profil Admin</title>
<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-text mx-3">SI Manajemen Prestasi</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
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
          >
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

      <li class="nav-item">
        <a class="nav-link collapsed" href="/tambahkan_berita" 
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fa-solid fa-newspaper"></i>
          <span>Manajemen Berita</span>
        </a>
      </li>
    </ul>

@include('dashboard/header_admin')

        <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="card-header">
                  <div class="mb-3">
                    <div class="d-flex justify-content-center">
                      <image x="0" y="0" height="100%" preserveAspectRatio="xMidYMid slice" width="100%" src="img/icon_user.png" style="height: 168px; width: 168px;"></image>
                    </div>
                  
                    <div class="text-center">
                    <label for="formFile" class="form-label">Ganti Foto Profil</label>
                    </div>
                  
                    <div class="d-flex justify-content-center mb-4" style="margin-left: 215px;">
                    <input class="form" name="file" type="file" id="formFile">
                    </div>
                    
                    
                    <div class="card" >
                      <div class="card-header">
                        <form class="row g-3">
                          <div class="col-md-12 mb-3">
                              <label for="name" class="form-label">Nama</label>
                              <input type="text" name="name" class="form-control mb-3" id="name">
                              <label for="NPM" class="form-label">Password</label>
                              <input type="text" name="password" class="form-control mb-3" id="NPM">
                              <button type="button" class="btn btn-success">Simpan</button>
                          </div>
                          
                    </div>
                  </div>
                </div>
              </div>
          </div> 
     
@include('dashboard/script')   
</body>

</html>