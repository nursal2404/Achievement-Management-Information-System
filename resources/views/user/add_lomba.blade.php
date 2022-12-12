@extends('layouts_mahasiswa')
@section('title', 'Daftarkan Perlombaan')

  @section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftarkan Perlombaan</h1>
        </div>
    <div class="row mb-3">

    <!-- Form Daftarkan Lomba -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <form class="row g-3"  action="{{ route('add_proses_user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12 mb-3">
                            <label for="namelomba" class="form-label">Nama Lomba</label>
                            <input type="text" name="lomba" class="form-control @error('lomba') is-invalid @enderror" 
                            value="{{ old('lomba') }}">
                                @error('lomba')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label for="penyelenggara" class="form-label">Penyelenggara</label>
                            <input type="text" name="penyelenggara" class="form-control @error('penyelenggara') is-invalid @enderror" 
                            value="{{ old('penyelenggara') }}">
                                @error('penyelenggara')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                        </div>

                        <div class="input-group col-12 mb-4">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Tingkatan</label>
                            </div>
                                <select class="custom-select" name="tingkat">
                                    <option selected>Pilih Tingkatan</option>
                                    <option value="Desa">Desa/Lurah</option>
                                    <option value="Kecamatan">Kecamatan</option>
                                    <option value="Kota/Kabupaten">Kota/Kabupaten</option>
                                    <option value="Provinsi">Provinsi</option>
                                    <option value="Nasional">Nasional</option>
                                    <option value="Internasional">Internasional</option>
                                </select>
                        </div>

                        <p class="col-lg-12 mb-3">
                            <label for="date">Tanggal</label>
                            <input type="date" name="date" value="DD-MM-YY" id="date">
                        </p>

                        <div class="col-lg-12">
                            <label for="formFile" class="form-label">Upload Sertifikat</label>
                        </div>
                        
                        <div class="d-flex justify-content-center mb-4" style="margin-left: 13px;">
                            <input class="form" name="sertifikat" type="file" id="formFile">
                        </div>

                    </div>
                 
                        <div class="d-flex justify-content-center mb-4">
                            <button type="submit" class="btn btn-primary">Daftarkan</button>
                        </div> 

                        </form>                
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Form Daftar Lomba -->
      
  @endsection