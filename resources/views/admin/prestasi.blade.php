@extends('layouts_admin')
@section('title', 'Manajemen Prestasi')

  @section('content')
      <!-- Card Manajamen Prestasi -->
      <div class="container-fluid">
          <div class="text-center mb-4">
            <h3 class="text-dark">Manajemen Prestasi</h3>
          </div>
          <!-- Tabel Prestasi -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="table-responsive p-3">
                  <a href="/add_prestasi" type="button" class="btn btn-success mb-3">Tambah
                    <i class="fa-solid fa-trophy"></i>
                  </a>
                  @if ($kejuaraan->count())
                  <a href="{{ route('download') }}" type="button" class="btn btn-outline-success mb-3" target="blank">Download
                    <i class="bi bi-download"></i>
                  </a>
                  @else

                  @endif
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
                        <td>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</td>
                        <td>
                          <div class="btn-group">
                            
                            <a href="/edit_prestasi/{{ $item->id }}"><button type="button" class="btn btn-warning mr-2">Edit</button></a>
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
          <!-- End Tabel Prestasi-->                     
      </div>
      <!-- End Card Manajamen Prestasi -->

  @endsection

</body>
</html>