<!DOCTYPE html>
<html lang="en">
<title>Prestasi Mahasiswa</title>
@include('landingpage/head')
<div class="collapse navbar-collapse" id="Menu">
                <div class="navbar-nav ms-auto py-0">
                    <li clas="nav-item"><a href="/" class=" nav-link">Beranda</a></li>
                    <li clas="nav-item"><a href="/visi_misi" class="nav-link">Visi Misi</a></li>
                    <li clas="nav-item"><a href="/berita" class=" nav-link">Berita</a></li>
                    <li clas="nav-item"><a href="data_prestasi" class=" nav-link active">Prestasi</a></li>
                </div>
                <a href="login" class="border border-primary py-2 px-4 ms-3">Login</a>
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

     <!-- Service Start -->
     <div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Prestasi Mahasiswa Fakultas Teknik</h1>
          </div>

          <div class="row mb-3">
            <div class="col-lg-12 mb-4">


            <div class="container">
              <div class="row">
                <div class="col-sm-11">
                  <div class="card">
                      <form action="pencarian_prestasi" method="GET" class="form-inline">
                        <div class="input-group">
                          <input type="text" name="search" class="form-control bg-light border-1 small" placeholder="Pencarian" style="border-color: #3f51b5;" />
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                              <i class="fas fa-search fa-sm"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                  </div>
                </div>
                <div class="col-sm">
                  <a href="{{ route('data_prestasi.index'); }}"><Button class="btn btn-danger">Reset</Button></a>
                </div>
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
                        <td>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</td>
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