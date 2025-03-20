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
          <div class="col-md-3 col-lg-2 p-4 bg-secondary-subtle vh-100">
            <h4 class="mb-4 d-flex align-items-center">
                <img src="{{asset('image/logo.png')}}" alt="Logo" style="width: 40px; height: 40px; margin-right: 10px;">
                Apotek Cinta Sehat
            </h4>

            <ul class="nav flex-column">
            <li class="nav-item mb-3">
                <a class="nav-link text-black" href="/dashboard">
                    <i class="fa-solid fa-gauge-simple-high" style="margin-right: 8px;"></i>
                  Dashboard
                </a>
              </li>

              <li class="nav-item mb-3">
                <a class="nav-link text-black" href="/hasilkar">
                    <i class="fa-solid fa-users" style="margin-right: 5px;"></i>
                  Data Karyawan
                </a>
              </li>

              <li class="nav-item mb-3">
                <a class="nav-link text-black" href="/hasilpas">
                    <i class="fa-solid fa-hospital-user" style="margin-right: 7px;"></i>
                  Data Pasien
                </a>
              </li>

              <li class="nav-item mb-3">
                <a class="nav-link text-black" href="hasilobat">
                    <i class="fa-solid fa-tablets" style="margin-right: 5px;"></i>
                    Data Obat
                </a>
              </li>

              <li class="nav-item mb-3">
                <a class="nav-link text-black" href="hasilres">
                    <i class="fa-regular fa-clipboard" style="margin-right: 12px;"></i>
                  Data Resep
                </a>
              </li>

              <li class="nav-item mb-3">
                <a class="nav-link text-black" href="hasilpengobt">
                    <i class="fa-solid fa-bag-shopping" style="margin-right: 10px;"></i>
                  Data Pengambilan Obat
                </a>
              </li>

              <li class="nav-item mb-3">
                <a class="nav-link text-danger" href="/login">
                    <i class="fa-solid fa-right-from-bracket" style="margin-right: 8px;"></i>
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

