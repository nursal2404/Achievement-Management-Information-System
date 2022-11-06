<!DOCTYPE html>
<html lang="en">
<title>Tambahkan User</title>
@include('dashboard/head')
@include('dashboard/script')
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
      <li class="nav-item active">
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
        <a class="nav-link collapsed" href="#" 
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fa-solid fa-newspaper"></i>
          <span>Manajemen Berita</span>
        </a>
      </li>

    </ul>

@include('dashboard/header_admin')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data User</h1>
          </div>

          <div class="row mb-3">


          <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-12 mb-4">
        <div class="card">
          <div class="card-body">
              <form action="/proses_tambah" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="text" name="name" class="form-control" >
                </div>
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                  <label for="exampleInputLevel" class="form-label">Role</label>
                  <select class="form-select" name="level" ria-label="Default select example">
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
    </div>
  </div>


  </body>
</html>