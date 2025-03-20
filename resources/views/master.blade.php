<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 p-3 bg-light">
        <h4 class="mb-4">Apotek Cinta Sehat</h4>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="/dashboard">
                <i class="fa-solid fa-gauge-simple-high"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/hasilkar">
                <i class="fa-solid fa-users"></i>
              Data Karyawan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/hasilpas">
                <i class="fa-solid fa-hospital-user"></i>
              Data Pasien
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hasilobat">
                <i class="fa-solid fa-tablets"></i>
              Data Obat
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hasilres">
                <i class="fa-regular fa-clipboard"></i>
              Data Resep
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hasilpengobt">
                <i class="fa-solid fa-bag-shopping"></i>
              Data Pengambilan Obat
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="#">
                <i class="fa-solid fa-right-from-bracket"></i>
              Logout
            </a>
          </li>
        </ul>
      </div>

      <!-- Konten utama -->
      <div class="col-md-9 col-lg-10 p-4">
        <h2>Apotek Cinta Sehat</h2>
        @yield('form')
      </div>
    </div>
  </div>

  <!-- Menyertakan Bootstrap JS dan dependensinya (Popper.js dan Bootstrap JS) -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/all.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>


</body>
</html>

