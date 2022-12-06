@extends('layouts_mahasiswa')
@section('title', 'Manajemen Lomba')

  @section('content')
    <div class="container-fluid">
      <div class="text-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profil</h1>
      </div>

      <div class="row justify-content-center">
        <div class=" col-xl-8 col-lg-8 col-md-9">
          <div class="card mb-4">
            <div class="card-body">
                      <table>
                        <tbody>
                          <tr> 
                            <th>NPM</th>
                            <td>{{ Auth::user()->username }}</td>
                          </tr> 
                        <tr> 
                            <th>Nama</th>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr> 
                            <th>Jurusan</th>
                            <td>{{ Auth::user()->jurusan }}</td>
                        </tr>      
                      </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
    </div>

@endsection