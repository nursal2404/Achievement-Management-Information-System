@extends('layouts_admin')
@section('title', 'Tambahkan Ke Prestasi')

  @section('content')

        <div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambahkan Ke Prestasi</h1>
          </div>

          <!-- Form Data Lomba ke Data Prestasi -->
          <div class="row justify-content-center">
            <div class=" col-xl-8 col-lg-8 col-md-9">
              <div class="card mb-4">
                <div class="table-responsive p-3">
                    <div class="card-body">
                        <form class="row g-3"  action="{{ route('konfirmasi_lomba', ['id' => $lomba->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class="col-12 mb-3">
                              <label for="namelomba" class="form-label">Perolehan Prestasi</label>
                              <input type="text" name="juara"  class="form-control" placeholder="Masukkan Perolehan Prestasi">
                          </div>                           
                          </div>
                          <div class="d-flex justify-content-center mb-4">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>     
                    </div>
                </div>
            </div>
          </div>  
          <!-- End Form Data Lomba ke Data Prestasi -->
        </div>

  @endsection

</html>