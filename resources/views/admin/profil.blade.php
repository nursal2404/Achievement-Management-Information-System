@extends('layouts_admin')
@section('title', 'Profil')

  @section('content')
        <div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profil</h1>
          </div>

          <div class="row justify-content-center">
            <div class=" col-xl-8 col-lg-8 col-md-9">
              <div class="card mb-4">
                  @if (session('sukses'))
                    <div class="alert alert-success">
                        {{ session('sukses') }}
                    </div>
                  @endif
                    @if( Auth::user()->profil != 0)
                    <div class="d-flex justify-content-center">
                      <image x="0" y="0" height="100%" preserveAspectRatio="xMidYMid slice" width="100%" src="{{ asset($data->profil) }}" style="height: 168px; width: 168px;"></image>
                    </div>
                    @else
                    <div class="d-flex justify-content-center">
                      <image x="0" y="0" height="100%" preserveAspectRatio="xMidYMid slice" width="100%" src="{{ asset('img/icon_user.png') }}" style="height: 168px; width: 168px;"></image>
                    </div>
                    @endif
                    
                  <form action="{{route('admin_update_profil' , ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="text-center">
                      <label for="formFile" class="form-label">Ganti Foto Profil</label>
                    </div>
                  
                    <div class="d-flex justify-content-center mb-4" style="margin-left: 215px;">
                      <input class="form" name="profil" type="file" id="formFile">
                    </div>
                    

                    <div class="container">
                      <div class="row g-3">
                        <div class="col-md-12 mb-3">
                            <label  class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control mb-3" value="{{ $data->name}}">

                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                              value="{{ $data->email }}">
                                @error('email')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror    
                            </div>

                            <div class="form-group">
                              <label>Jenis Kelamin</label>
                                  <select name="gender" class="form-control">
                                    <option>{{ $data->gender }}</option>
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
                              <label>Username</label>
                              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" 
                              value="{{ $data->username }}">
                                @error('email')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                              <label>Password</label>
                              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                              value="{{ $data->password }}">
                                @error('email')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="d-flex justify-content-center mb-4">
                              <button class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                      </div>  
                    </div>
                </form>

              </div>
            </div>
          </div>                                
                                                 
  @endsection