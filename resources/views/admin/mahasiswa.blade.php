<!DOCTYPE html>
<html lang="en">
@include('dashboard/head')
<title>Manajemen Mahasiswa</title>

<body>
  
<!-- Main Page -->
<div id="wrapper"> 
  @include('dashboard/sidebar_admin')

  <!-- Main Content -->
  @include('dashboard/header_admin')

        <div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manajemen Mahasiswa</h1>
          </div>

          <div class="row mb-3">
            <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="/add_mahasiswa"button type="button" class="btn btn-success">Tambah</button>
                    <i class="fa-solid fa-user-plus"></i>
                  </a>
                  
                  <div class="d-flex bg-white align-items-center">
                    <a href="{{ route('mahasiswa'); }}"><Button class="btn btn-danger">Reset</Button></a>
                    <form action="search_user" method="GET" class="form-inline">
                      <div class="col-sm"> </div>
                        <div class="input-group">
                          <input type="text" name="search" class="form-control bg-light border-1 small" 
                            placeholder="Pencarian" style="border-color: #3f51b5;">
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                              <i class="fas fa-search fa-sm"></i>
                            </button>
                          </div>
                        </div>
                    </form>
                  </div>

                </div>
                @if (session('sukses'))
                    <div class="alert alert-success">
                        {{ session('sukses') }}
                    </div>
                @endif

              <!-- Tabel User -->
                @include('master.tabel_mahasiswa')
              <!-- End Tabel User-->

      </div>
    </div>
  <!-- End Main Content -->

</div>
<!-- End Main Page -->

@include('dashboard/script')
</body>
</html>