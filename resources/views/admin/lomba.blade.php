@extends('layouts_admin')
@section('title', 'Manajemen Lomba')

  @section('content')

      <!-- Card Manajemen Lomba -->
        <div class="container-fluid">
          <div class="text-center mb-4">
            <h3 class="text-dark">Manajemen Lomba</h3>
          </div>
          <!-- Tabel Lomba -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="table-responsive p-3">
                  <a href="/add_lomba"button type="button" class="btn btn-success mb-3">Tambah</button>
                    <i class="fa-solid fa-medal"></i>
                  </a>
                  @if (session('sukses'))
                    <div class="alert alert-success">
                        {{ session('sukses') }}
                    </div>
                  @endif
                  <table class="table table-bordered" id="dataTable">
                    <thead class="table-primary">
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
                          <a href="perolehan_prestasi/{{ $item->id }}" class="btn btn-success mr-2"><i class="fas fa-check"></i></a>
                          <a href="{{ $item->sertifikat_file }}"><button type="button" class="btn btn-info mr-2">Lihat</button></a>
                          <a href="/edit_lomba/{{ $item->id }}"><button type="button" class="btn btn-warning mr-2">Edit</button></a>
                          <a href="lomba/delete/{{ $item->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
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
          <!-- End Tabel Lomba -->            
        </div>
      <!-- End Card Manajemen Lomba -->

  @endsection

</body>
</html>