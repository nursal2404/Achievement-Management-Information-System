<!DOCTYPE html>
<html lang="en">
@include('dashboard/head')

<title>Manajemen Lomba</title>
<body>

<!-- Main Page --> 
<div id="wrapper">

@include('dashboard/sidebar_admin')    
@include('dashboard/header_admin')

      <!-- Card Content -->
        <div class="container-fluid">
          <div class="text-center mb-4">
            <h3 class="text-dark">Manajemen Lomba</h3>
          </div>
            <div class="row mb-3">
              <div class="col-lg-12 mb-4">
                <div class="card">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <a href="/add_prestasi"button type="button" class="btn btn-success">Tambah</button>
                      <i class="fa-solid fa-user-plus"></i>
                    </a>

                    <div class="card">
                      <form action="search" method="get" class="form-inline">
                        <div class="input-group">
                          <input type="search" name="search" class="form-control bg-light border-1 small" 
                            placeholder="Pencarian" style="border-color: #3f51b5;"/>
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
        
                  <!-- Tabel Prestasi -->
                    @include('master/tabel_lomba')
                  <!-- End Tabel Prestasi -->

                </div>
              </div>
            </div>
        </div>
      <!-- End Card Content -->

      </div>
    </div>
  <!-- End Main Content -->

</div>
<!-- End Main Page -->

@include('dashboard/script')
</body>
</html>