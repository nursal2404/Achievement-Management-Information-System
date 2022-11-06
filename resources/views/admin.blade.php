<!DOCTYPE html>
<html lang="en">
@include('dashboard/head')

<title>Dashboard Admin</title>
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
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fa-solid fa-users"></i>
          <span>Manajemen Data User</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="prestasi" 
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Selamat Datang , {{ Auth::user()->name }}</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Mahasiswa Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">

                      <div class="h5 mb-0 font-weight-bold"> 
                      <a href="data_user" class="text-dark" style="text-decoration: none"> Manajemen Data User</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
     
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <a href="prestasi" class="text-dark" style="text-decoration: none"> Manajemen Prestasi</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa-solid fa-trophy fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
     
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Manajemen Lomba</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa-solid fa-medal fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
     
                    <div class="h5 mb-0 font-weight-bold"> 
                      <a href="/tambahkan_berita" class="text-dark" style="text-decoration: none"> Manajemen Berita</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa-solid fa-newspaper fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          <!-- Tabel -->
            <!-- <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <a href="/tambah_user"button type="button" class="btn btn-success">Tambah</button>
                  <i class="fa-solid fa-user-plus"></i>
                </a>
                </div>
                @if($message = Session :: get('sukses'))
                <div class="container">
                  <div class="alert alert-success" role="alert">
                        {{$message}}
                  </div>
                </div>  
                  @endif
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scopre="col">Level</th>
                        <th scope="cool">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
            @foreach ($items as $item)
            <tr>
              <th scope="row">{{ $loop->index + 1 }}</th>
              <td>{{ $item->name }}</td>
              <td>{{ $item->username }}</td>
              <td>{{ $item->password }}</td>
              <td>{{ $item->level }}</td>
              <td>
              <a href="/admin/edit/{{ $item->id }}"><button type="button" class="btn btn-warning">Edit</button></a>
              <a href="/admin/delete/{{ $item->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
              </td>
              @endforeach
            </tr>
        
          </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div> -->

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