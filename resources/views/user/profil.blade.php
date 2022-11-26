<!DOCTYPE html>
<html lang="en">
@include('dashboard/head')
@include('dashboard/header_user')

<title>Manajemen Perlombaan</title>
<div class="container-fluid">
          <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profil Mahasiswa</h1>
          </div>
          <div class="row mb-3">
            <div class="col-lg-6 mb-4 ">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <table width="100%" class="table-list">
                    <tbody>
                      <tr width="150"> 
                        <th>NPM</th>
                        <td>{{ Auth::user()->username }}</td>
                      </tr> 
                    <tr> 
                        <th>Nama</th>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr> 
                        <th>Jurusan</th>
                        <td></td>
                    </tr>      
                  </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
</div>

@include('dashboard/script')
</body>

</html>