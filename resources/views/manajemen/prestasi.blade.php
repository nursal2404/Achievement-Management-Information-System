<!DOCTYPE html>
<html lang="en">
@include('dashboard/head')


<title>Manajemen Prestasi</title>
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
<div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manajemen Prestasi</h1>
          </div>

          <div class="row mb-3">
            <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="/add_prestasi"button type="button" class="btn btn-success">Tambah</button>
                    <i class="fa-solid fa-user-plus"></i>
                  </a>
                    @if($message = Session :: get('sukses'))
                      <div class="alert alert-success" role="alert">
                        {{$message}}
                      </div>
                    @endif
                </div>
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead class="table-primary">
                      <tr>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Prestasi</th>
                        <th scope="col">Nama Lomba</th>
                        <th scope="col">Penyelenggara</th>
                        <th scope="col">Tingkat</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col" class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($kejuaraan as $item)
                      <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->npm }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>{{ $item->juara }}</td>
                        <td>{{ $item->lomba }}</td>
                        <td>{{ $item->penyelenggara }}</td>
                        <td>{{ $item->tingkat }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>
                          <div class="btn-group">
                            <a href="edit_prestasi/{{ $item->id }}"><button type="button" class="btn btn-warning mr-2">Edit</button></a>
                            <a href="prestasi/delete/{{ $item->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
                          </div>
                        </td>
                        @endforeach
                      </tr>
                    </tbody>
                  </table>
                  
              </div>
            </div>
          </div>
        </div>


        </form>
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