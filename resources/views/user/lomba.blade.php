@extends('layouts_mahasiswa')
@section('title', 'Manajemen Lomba')

  @section('content')
        <div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manajemen Perlombaan</h1>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="table-responsive p-3">
                  <a href="daftarkan_lomba"button type="button" class="btn btn-success mb-3">Tambah</button>
                    <i class="fa-solid fa-medal"></i>
                  </a>

                  @if (session('sukses'))
                    <div class="alert alert-success">
                        {{ session('sukses') }}
                    </div>
                  @endif
      
                  <!-- Tabel Lomba -->
                  <table class="table table-bordered" id="dataTable">
                    <thead class="table-primary">
                      <tr>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Nama Lomba</th>
                        <th scope="col">Penyelenggara</th>
                        <th scope="col">Tingkat</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col" class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                      @foreach ($lomba as $item)
                      <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->npm }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>{{ $item->lomba }}</td>
                        <td>{{ $item->penyelenggara }}</td>
                        <td>{{ $item->tingkat }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</td>
                    
                        <td>
                          <div class="btn-group">
                            <a href="/user_edit_lomba/{{ $item->id }}"><button type="button" class="btn btn-warning mr-2">Edit</button></a>
                            <a href="user_lomba/delete/{{ $item->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                   <!-- End Tabel Lomba -->
                </div>
             

              </div>
            </div>
          </div>
        </div>

    @endsection

</html>