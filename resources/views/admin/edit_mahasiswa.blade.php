@extends('layouts_admin')
@section('title', 'Edit Mahasiswa')

  @section('content')

        <div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Mahasiswa</h1>
          </div>

          <!-- Card Edit Mahasiswa -->
          <div class="row justify-content-center">
            <div class=" col-xl-8 col-lg-8 col-md-9">
              <div class="card mb-4">
                <div class="table-responsive p-3">
                    <div class="card-body">
                      @if (session('sukses'))
                      <div class="alert alert-success">
                          {{ session('sukses') }}
                      </div>
                      @endif
                      <form action="{{ route('update_mahasiswa', ['id' => $mahasiswa->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                          value="{{ old('name', $mahasiswa->name) }}" placeholder="Nama Lengkap">
                            @error('name')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                          <label>Jurusan</label>
                            <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                              <option value="{{ old('jurusan', $mahasiswa->jurusan) }}">{{ old('jurusan', $mahasiswa->jurusan) }}</option>
                              <option value="Informatika" @if(old('jurusan') == 'Informatika') selected @endif>Informatika</option>
                              <option value="Teknik Sipil" @if(old('jurusan') == 'Teknik Sipil') selected @endif>Teknik Sipil</option>
                              <option value="Teknik Elektro" @if(old('jurusan') == 'Teknik Elektro') selected @endif>Teknik Elektro</option>
                              <option value="Teknik Mesin" @if(old('jurusan') == 'Teknik Mesin') selected @endif>Teknik Mesin</option>
                              <option value="Arsiterktur" @if(old('jurusan') == 'Arsitektur') selected @endif>Arsitektur</option>
                              <option value="Sistem Informasi" @if(old('jurusan') == 'Sistem Informasi') selected @endif>Sistem Informasi</option>
                            </select>
                                @error('jurusan')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror                             
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                                <select name="gender" class="form-control  @error('gender') is-invalid @enderror">
                                  <option value="{{ old('gender', $mahasiswa->gender) }}">{{ old('gender', $mahasiswa->gender) }}</option>
                                  <option value="Laki-Laki" @if(old('gender') == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                  <option value="Perempuan" @if(old('gender') == 'Perempuan') selected @endif>Perempuan</option>
                                </select>
                                @error('gender')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror                              
                        </div>

                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                          value="{{ old('email', $mahasiswa->email) }}" placeholder="Email">
                          @error('email')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" 
                          value="{{ old('username', $mahasiswa->username) }}" placeholder="Username(NPM)">
                          @error('username')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                          value="{{ old('password', $mahasiswa->password) }}" placeholder="Password">
                          @error('password')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                      </form>
                    </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- End Card Edit Mahasiswa -->
    
  @endsection