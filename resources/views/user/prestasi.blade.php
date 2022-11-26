<!DOCTYPE html>
<html lang="en">
@include('dashboard/head')
@include('dashboard/header_user')

<title>Manajemen Perlombaan</title>
<div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manajemen Prestasi</h1>
          </div>
          <div class="row mb-3">
            <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="daftarkan_lomba"button type="button" class="btn btn-success">Tambah</button>
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
              <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead class="table-primary">
                      <tr>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">@sortablelink('name')</th>
                        <th scope="col">@sortablelink('npm')</th>
                        <th scope="col">@sortablelink('jurusan')</th>
                        <th scope="col">Nama Lomba</th>
                        <th scope="col">Penyelenggara</th>
                        <th scope="col">@sortablelink('tingkat')</th>
                        <th scope="col">@sortablelink('tanggal')</th>
                        <th scope="col" class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                      <tr>
                        <th scope="row">1</th>
                        <td>{{ Auth::user()->name }}</td>
                        <td>{{ Auth::user()->username }}</td>
                        <td>{{ Auth::user()->jurusan }}</td>
                        <td>{{ Auth::user()->lomba }}</td>
                        <td>{{ Auth::user()->penyelenggara }}</td>
                        <td>{{ Auth::user()->tingkat }}</td>
                        <td>{{ Auth::user()->tanggal }}</td>
                        <td>
                          <div class="btn-group">
                            <a href=""><button type="button" class="btn btn-warning mr-2">Edit</button></a>
                            <a href="user_lomba/delete/{{ Auth::user()->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
                          </div>
                        </td>
                     
                      </tr>
                    </tbody>
                  </table>
                  
              </div>
              <!-- End -->

            </div>
          </div>
</div>

@include('dashboard/script')
</body>

</html>