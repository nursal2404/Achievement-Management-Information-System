@extends('layouts_admin')
@section('title', 'Manajemen Mahasiswa')

  @section('content')
        <div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manajemen Mahasiswa</h1>
          </div>

          <!-- Tabel Mahasiswa -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="table-responsive p-3">
                  <a href="/add_mahasiswa"button type="button" class="btn btn-success mb-3">Tambah</button>
                    <i class="fa-solid fa-user-plus"></i>
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
                      <th scope="col">Jurusan</th>
                      <th scope="col">Email</th>
                      <th scope="col">Username</th>
                      <th scope="col">Jenis Kelamin</th>  
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($items as $index =>$item)
                    <tr>
                      <th scope="row">{{ $index + 1 }}</th>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->jurusan }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->username }}</td>
                      <td>{{ $item->gender }}</td>
                      <td>
                        <div class="d-flex justify-content-center">
                          <div class="btn-group">
                            <a href="/edit_mahasiswa/{{ $item->id }}" class="btn btn-warning mr-2">Edit</a>
                            <button type="button" class="btn btn-danger" 
                              data-toggle="modal" data-target="#deleteMahasiswa">
                              Hapus
                            </button>
                          </div>
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
          <!-- End Tabel Mahasiswa -->
          
           <!-- Modal Hapus Mahasiswa -->
           <div class="modal fade" id="deleteMahasiswa">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Anda yakin ingin menghapus?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Are you sure you want to delete?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
                  <a href="mahasiswa/delete/{{ $item->id }}"><button type="button" class="btn btn-primary">Hapus</button></a>
                </div>
              </div>
            </div>
           </div>
           <!-- End Modal Hapus Mahasiswa -->          
          
  @endsection

  

         