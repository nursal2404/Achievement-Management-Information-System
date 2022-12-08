<!DOCTYPE html>
<html lang="en">

  <title>@yield('title')</title>

<head>
      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">      

      <!-- Libraries Stylesheet -->
      <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

      <!-- Customized Bootstrap Stylesheet -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

      <!-- Template Stylesheet -->
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">

      <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
</head>

  <body>
      <!-- Navbar Start -->
      <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h3 class="m-0 text-primary">SI Manajemen Prestasi</h3>
            </a>

            <div class="collapse navbar-collapse" id="Menu">
              <div class="navbar-nav ms-auto py-0">
                  <li clas="nav-item"><a href="/" class=" nav-link {{ ($title == "Beranda") ? 'active' : ''}}">Beranda</a></li>
                  <li clas="nav-item"><a href="/visi_misi" class="nav-link {{ ($title == "Visi Misi") ? 'active' : ''}}">Visi Misi</a></li>
                  <li clas="nav-item"><a href="/postingan" class=" nav-link {{ ($title == "Berita") ? 'active' : ''}}">Berita</a></li>
                  <li clas="nav-item"><a href="data_prestasi" class=" nav-link {{ ($title == "Prestasi") ? 'active' : ''}}">Prestasi</a></li>
              </div>
              <a href="login" class="border border-primary py-2 px-4 ms-3">Login</a>
            </div>
        </nav>

  @yield('content')


  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="js/main.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
    });
  </script>

  </body>
</html>