<!DOCTYPE html>
<html lang="en">
@include('dashboard/head')
@include('dashboard/header_user')

<title>Daftarkan Perlombaan</title>
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
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <form class="row g-3">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="NPM" class="form-label">NPM</label>
                    <input type="text" name="npm" class="form-control" id="NPM">
                </div>

                <div class="input-group col-12 mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Jurusan</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Pilih Jurusan</option>
                            <option>Informatika</option>
                            <option>Teknik Sipil</option>
                            <option>Teknik Elektro</option>
                            <option>Teknik Mesin</option>
                            <option>Arsitektur</option>
                            <option>Sistem Informasi</option>
                        </select>
                        </div>

                <div class="col-12 mb-3">
                    <label for="namelomba" class="form-label">Nama Lomba</label>
                    <input type="text" name="lomba" class="form-control" id="namelomba">
                </div>
                <div class="col-12 mb-3">
                    <label for="jenislomba" class="form-label">Jenis Lomba</label>
                    <input type="text" name="jenis" class="form-control" id="jenislomba">
                </div>
                <div class="col-12 mb-3">
                    <label for="penyelenggara" class="form-label">Penyelenggara</label>
                    <input type="text" name="penyelenggara" class="form-control" id="penyelenggara">
                </div>

                    <div class="input-group col-12 mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Tingkatan</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Pilih Tingkatan</option>
                            <option>Desa/Lurah</option>
                            <option>Kecamatan</option>
                            <option>Kota</option>
                            <option>Provinsi</option>
                            <option>Nasional</option>
                        </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                    <button type="submit" class="btn btn-primary">Daftarkan</button>
                </div>                
                </div>
                
            </div>
            </div>
        </div>
    </div>
    <!-- End Form Daftar Lomba -->

        </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

@include('dashboard/script')
</body>

</html>