@extends('layouts_admin')
@section('title', 'Edit Prestasi')

  @section('content')

    <div class="container-fluid" id="container-wrapper">
        <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">EditPrestasi</h1>
        </div>
    <div class="row mb-3">

    <!-- Form Edit Prestasi -->
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <form class="row g-3" action="/update_prestasi/{{ $kejuaraan->id }}" method="POST">
                    @csrf
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name"  value="{{ $kejuaraan->name }}" class="form-control" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">NPM</label>
                        <input type="text" name="npm" value="{{ $kejuaraan->npm }}" class="form-control" >
                    </div>

                    <div class="input-group col-12 mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" >Jurusan</label>
                        </div>
                        <select class="custom-select" name="jurusan">
                            <option selected>{{ $kejuaraan->jurusan }}</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Arsiterktur">Arsitektur</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Perolehan Prestasi</label>
                        <input type="text" name="juara" value="{{ $kejuaraan->juara }}" class="form-control">
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Nama Lomba</label>
                        <input type="text" name="lomba" value="{{ $kejuaraan->lomba }}" class="form-control">
                    </div>

                    <div class="col-12 mb-4">
                        <label class="form-label">Penyelenggara</label>
                        <input type="text" name="penyelenggara" value="{{ $kejuaraan->penyelenggara }}" class="form-control">
                    </div>

                    <div class="input-group col-12 mb-4">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Tingkatan</label>
                        </div>
                            <select class="custom-select" name="tingkat">
                                <option selected>{{ $kejuaraan->tingkat }}</option>
                                <option value="Desa">Desa/Lurah</option>
                                <option value="Kecamatan">Kecamatan</option>
                                <option value="Kota/Kabupaten">Kota/Kabupaten</option>
                                <option value="Provinsi">Provinsi</option>
                                <option value="Nasional">Nasional</option>
                                <option value="Internasional">Internasional</option>
                            </select>
                    </div>
                            <p class="col-lg-12 mb-4">
                              <label for="date">Tanggal</label>
                              <input type="date" name="date" value="DD-MM-YY" id="date">
                            </p>

                            <div >
                        <button type="submit" class="ml-2 btn btn-primary">Simpan</button>
                    </div> 
                            </form>              
                </div>
                                     
            </div>             
          </div>
        </div>
    </div>
    <!-- End Edit Prestasi -->

  @endsection