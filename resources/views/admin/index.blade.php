<!DOCTYPE html>
<html lang="en">
@include('dashboard/head')

<title>Dashboard Admin</title>
<body> 

<!-- Main Page -->
<div id="wrapper"> 
  @include('dashboard/sidebar_admin')
  
  <!-- Main Content -->
  @include('dashboard/header_admin')

        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Selamat Datang , {{ Auth::user()->name }}</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <!-- Manajemen Card -->
          <div class="row mb-3">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold"> 
                      <a href="mahasiswa" class="text-dark" style="text-decoration: none"> Manajemen Mahasiswa</div></a>
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
                      <a href="lomba" class="text-dark" style="text-decoration: none">Manajemen Lomba</div></a>
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

          </div>
          <!-- End Manajemen Card -->

      </div>
    </div>
  <!-- End Main Content -->

</div>
<!-- End Main Page -->

  @include('dashboard/script')
</body>
</html>