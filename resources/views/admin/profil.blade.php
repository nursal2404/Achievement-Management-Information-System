@extends('layouts_admin')
@section('title', 'Profil')

  @section('content')

        <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="card-header">
                  <div class="mb-3">
                    <div class="d-flex justify-content-center">
                      <image x="0" y="0" height="100%" preserveAspectRatio="xMidYMid slice" width="100%" src="img/icon_user.png" style="height: 168px; width: 168px;"></image>
                    </div>
                  
                    <div class="text-center">
                    <label for="formFile" class="form-label">Ganti Foto Profil</label>
                    </div>
                  
                    <div class="d-flex justify-content-center mb-4" style="margin-left: 215px;">
                    <input class="form" name="file" type="file" id="formFile">
                    </div>
                    
                    
                    <div class="card" >
                      <div class="card-header">
                        <form class="row g-3">
                          <div class="col-md-12 mb-3">
                              <label for="name" class="form-label">Nama</label>
                              <input type="text" name="name" class="form-control mb-3" id="name">
                              <label for="NPM" class="form-label">Password</label>
                              <input type="text" name="password" class="form-control mb-3" id="NPM">
                              <button type="button" class="btn btn-success">Simpan</button>
                          </div>
                          
                    </div>
                  </div>
                </div>
              </div>
          </div> 
     
  @endsection

</html>