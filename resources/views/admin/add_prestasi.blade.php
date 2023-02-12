@extends('layouts_admin')
@section('title', 'Tambah Prestasi')

  @section('content')

    <div class="container-fluid" id="container-wrapper">
        <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Prestasi</h1>
        </div>
    <div class="row mb-3">

    <!-- Form Daftarkan Prestasi -->
    <div class="row justify-content-center">
        <div class=" col-xl-8 col-lg-8 col-md-9">
            <div class="card mb-4">
                <div class="p-3">
                  <div class="card-body">
                    <form class="row g-3" action="/prestasi" method="POST">
                    @csrf

                    <div class="row col-lg-12" id="dynamicAddRemove">
                      <div class="col-md-6 mb-3">
                          <label class="form-label">Nama</label>
                          <input type="text" name="addMoreInputFields[0][name]" class="form-control @error('addMoreInputFields.*.name') is-invalid @enderror" 
                          value="{{ old('name') }}">
                          @error('addMoreInputFields.*.name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror 
                      </div>

                      <div class="col-md-6 mb-3">
                          <label class="form-label">NPM</label>
                          <input type="text" name="addMoreInputFields[0][npm]" class="form-control @error('addMoreInputFields.*.npm') is-invalid @enderror" 
                          value="{{ old('npm') }}">
                          @error('addMoreInputFields.*.npm')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                      </div>

                      <div class="input-group col-12 mb-3">
                          <div class="input-group-prepend">
                              <label class="input-group-text" >Jurusan</label>
                          </div>
                          <select name="addMoreInputFields[0][jurusan]" class="form-control @error('addMoreInputFields.*.jurusan') is-invalid @enderror">
                            <option value="">Pilih Jurusan</option>
                            <option value="Informatika" @if(old('jurusan') == 'Informatika') selected @endif>Informatika</option>
                            <option value="Teknik Sipil" @if(old('jurusan') == 'Teknik Sipil') selected @endif>Teknik Sipil</option>
                            <option value="Teknik Elektro" @if(old('jurusan') == 'Teknik Elektro') selected @endif>Teknik Elektro</option>
                            <option value="Teknik Mesin" @if(old('jurusan') == 'Teknik Mesin') selected @endif>Teknik Mesin</option>
                            <option value="Arsiterktur" @if(old('jurusan') == 'Arsitektur') selected @endif>Arsitektur</option>
                            <option value="Sistem Informasi" @if(old('jurusan') == 'Sistem Informasi') selected @endif>Sistem Informasi</option>
                          </select>
                              @error('addMoreInputFields.*.jurusan')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror    
                      </div>
                    </div>
                    
                    <div class="mb-3">
                        <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary ml-2 mr-2"><i class="fas fa-plus"></i></button>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Perolehan Prestasi</label>
                        <input type="text" name="juara" class="form-control @error('juara') is-invalid @enderror"
                        value="{{ old('juara') }}">
                        @error('juara')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Nama Lomba</label>
                        <input type="text" name="lomba" class="form-control  @error('lomba') is-invalid @enderror"
                        value="{{ old('lomba') }}">
                        @error('lomba')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror  
                    </div>

                    <div class="col-12 mb-4">
                        <label class="form-label">Penyelenggara</label>
                        <input type="text" name="penyelenggara" class="form-control @error('penyelenggara') is-invalid @enderror"
                        value="{{ old('penyelenggara') }}">
                          @error('penyelenggara')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                    </div>

                    <div class="input-group col-12 mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Tingkatan</label>
                        </div>
                            <select class="form-control @error('tingkat') is-invalid @enderror" name="tingkat">
                                <option value="">Pilih Tingkatan</option>
                                <option value="Desa/Lurah" @if(old('tingkat') == 'Desa/Lurah') selected @endif>Desa/Lurah</option>
                                <option value="Kecamatan" @if(old('tingkat') == 'Kecamatan') selected @endif>Kecamatan</option>
                                <option value="Kota/Kabupaten" @if(old('tingkat') == 'Kota/Kabupaten') selected @endif>Kota/Kabupaten</option>
                                <option value="Universitas" @if(old('tingkat') == 'Universitas') selected @endif>Universitas</option>
                                <option value="Provinsi" @if(old('tingkat') == 'Provinsi') selected @endif>Provinsi</option>
                                <option value="Nasional" @if(old('tingkat') == 'Nasional') selected @endif>Nasional</option>
                                <option value="Internasional" @if(old('tingkat') == 'Internasional') selected @endif>Internasional</option>
                            </select>
                            @error('tingkat')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                    </div>

                            <p class="col-lg-4 mb-4">
                              <label for="date">Tanggal</label>
                              <input class="form-control @error('date') is-invalid @enderror"
                              type="date" name="date" value="{{ old('date') }}" id="date">
                              @error('date')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </p>

                                              
                  </div>

                        <div class="d-flex justify-content-center mb-4">
                            <button type="submit" class="ml-2 btn btn-primary">Daftarkan</button>
                        </div>

                    </form>

                </div>             
            </div>
        </div>
    </div>
    <!-- End Form Daftar Prestasi -->
       
    <!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var x = 0;
    var i = 0;
    $("#dynamic-ar").click(function() {
        ++i;
        x = 1 + i;
        testing = `
        
        `;

        $("#dynamicAddRemove").append(`
                      <div class="col-md-6 mb-3">
                          <label class="form-label">Nama</label>
                          <input type="text" name="addMoreInputFields[`+ i +`][name]" class="form-control @error('addMoreInputFields.*.name') is-invalid @enderror" 
                          value="{{ old('name') }}">
                          @error('addMoreInputFields.*.name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror 
                      </div>

                      <div class="col-md-6 mb-3">
                          <label class="form-label">NPM</label>
                          <input type="text" name="addMoreInputFields[` + i + `][npm]" class="form-control @error('addMoreInputFields.*.npm') is-invalid @enderror" 
                          value="{{ old('npm') }}">
                          @error('addMoreInputFields.*.npm')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                      </div>
                      
                      <div class="input-group col-12 mb-3">
                          <div class="input-group-prepend">
                              <label class="input-group-text" >Jurusan</label>
                          </div>
                          <select name="addMoreInputFields[`+ i +`][jurusan]" class="form-control @error('addMoreInputFields.*.jurusan') is-invalid @enderror">
                            <option value="">Pilih Jurusan</option>
                            <option value="Informatika" @if(old('jurusan') == 'Informatika') selected @endif>Informatika</option>
                            <option value="Teknik Sipil" @if(old('jurusan') == 'Teknik Sipil') selected @endif>Teknik Sipil</option>
                            <option value="Teknik Elektro" @if(old('jurusan') == 'Teknik Elektro') selected @endif>Teknik Elektro</option>
                            <option value="Teknik Mesin" @if(old('jurusan') == 'Teknik Mesin') selected @endif>Teknik Mesin</option>
                            <option value="Arsiterktur" @if(old('jurusan') == 'Arsitektur') selected @endif>Arsitektur</option>
                            <option value="Sistem Informasi" @if(old('jurusan') == 'Sistem Informasi') selected @endif>Sistem Informasi</option>
                          </select>
                              @error('addMoreInputFields.*.jurusan')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror    
                      </div>
                      `);
    });
</script>
  @endsection
  
</body>

</html>