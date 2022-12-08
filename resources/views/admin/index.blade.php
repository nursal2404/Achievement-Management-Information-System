@extends('layouts_admin')
@section('title', 'Dasboard')

  @section('content')

        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Selamat Datang , {{ Auth::user()->name }}</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <!-- Manajemen Card -->
          <div class="row mb-3">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold"> 
                      <a href="mahasiswa" class="text-dark" style="text-decoration: none"> Manajemen Mahasiswa</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">     
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <a href="lomba" class="text-dark" style="text-decoration: none">Manajemen Lomba</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa-solid fa-medal fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">    
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <a href="prestasi" class="text-dark" style="text-decoration: none"> Manajemen Prestasi</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa-solid fa-trophy fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">     
                    <div class="h5 mb-0 font-weight-bold"> 
                      <a href="/berita" class="text-dark" style="text-decoration: none"> Manajemen Berita</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa-solid fa-newspaper fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- End Manajemen Card -->

          <!-- Row Grafik -->
          <div class="row">
            <div class="col-md-6">
              <div class="card ">
                <div class="card-header">
                  <h6 class="m-0 font-weight-bold text-primary">Jumlah Data Lomba dan Prestasi</h6>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="myBarChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card ">
                <div class="card-header">
                  <h6 class="m-0 font-weight-bold text-primary">Data Lomba dan Prestasi</h6>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="LineChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Row Grafik -->  

<!-- Script Grafik -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myBarChart');
  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Lomba','Prestasi'],
      datasets: [{
        data: [{{ $data_lomba }}, {{ $data_prestasi }}],
        backgroundColor: [
          'rgba(75, 192, 192, 0.2)',
          'rgba(54, 162, 235, 0.2)'
        ],
        borderColor: [
          'rgb(75, 192, 192)',
          'rgb(54, 162, 235)',
        ],
      },]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<script>
  const ctl = document.getElementById('LineChart');
  new Chart(ctl, {
    type: 'line',
    data: {
      labels: ['Januari','Februari','Maret','April','Mei','Juni',
      'Juli','Agustus','September','Oktober','November','Desember'],
      datasets: [{
        label: 'Lomba',
        data: [{{ $lomba_jan }}, {{ $lomba_feb }}, {{ $lomba_maret }}, {{ $lomba_april }}, {{ $lomba_mei }},
        {{ $lomba_juni }}, {{ $lomba_juli }}, {{ $lomba_agust }}, {{ $lomba_sep }}, {{ $lomba_okt }},
        {{ $lomba_nov }}, {{ $lomba_des }}],
        backgroundColor: [
          'rgba(75, 192, 192, 0.2)',
        ],
        borderColor: [
          'rgb(75, 192, 192)',
        ],
      },
      {
        label: 'Prestasi',
        data: [{{ $prestasi_jan }}, {{ $prestasi_feb }}, {{ $prestasi_maret }}, {{ $prestasi_april }}, {{ $prestasi_mei }},
        {{ $prestasi_juni }}, {{ $prestasi_juli }}, {{ $prestasi_agust }}, {{ $prestasi_sep }}, {{ $prestasi_okt }},
        {{ $prestasi_nov }}, {{ $prestasi_des }}],
        backgroundColor: [
          'rgba(54, 162, 235, 0.2)'
        ],
        borderColor: [
          'rgb(54, 162, 235)',
        ],
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<!-- End Script Grafik -->


  @endsection
