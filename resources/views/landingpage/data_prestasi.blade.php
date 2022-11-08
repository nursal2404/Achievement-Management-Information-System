<!DOCTYPE html>
<html lang="en">
<title>Prestasi Mahasiswa</title>
@include('landingpage/head')
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link">Beranda</a>
                    <a href="/visi_misi" class="nav-item nav-link">Visi Misi</a>
                    <a href="/berita" class="nav-item nav-link">Berita</a>
                    <a href="data_prestasi" class="nav-item nav-link">Prestasi</a>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="login" class="btn btn-primary py-2 px-4 ms-3">Login</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Prestasi Mahasiswa</h1>
                    <a href="" class="h5 text-white">Fakultas Teknik</a>
                    <a href="" class="h5 text-white">Universitas Bengkulu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


     <!-- Service Start -->
     <div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Prestasi Mahasiswa Fakultas Teknik</h1>
          </div>

          <div class="row mb-3">
            <div class="col-lg-12 mb-4">


              <div class="card">
                    <form action="pencarian_prestasi" method="GET" class="form-inline">
                      <div class="input-group">
                        <input type="text" name="search" class="form-control bg-light border-1 small" 
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
          </div>

          <div class="row mb-3">
            <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead class="table-primary">
                      <tr>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">@sortablelink('name' , 'Nama')</th>
                        <th scope="col">@sortablelink('npm' , 'NPM')</th>
                        <th scope="col">@sortablelink('jurusan')</th>
                        <th scope="col" class="text-center">Prestasi</th>
                        <th scope="col" class="text-center">Nama Lomba</th>
                        <th scope="col" class="text-center">Penyelenggara</th>
                        <th scope="col">@sortablelink('tingkat')</th>
                        <th scope="col">@sortablelink('tanggal')</th>
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




@include('landingpage/script')
</body>

</html>