<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-danger-subtle">
        <nav class="navbar bg-danger-subtle">
            <div class="container-fluid bg-danger-subtle">
              <a class="navbar-brand" href="#">
                <img src="{{asset('/image/logo.png')}}" class="img-thumbnail img-fluid bg-danger-subtle" alt="Logo" width="50" height="50" class="d-inline-block bg-danger-subtle">
            </a>
            <div>
                <h3>
                    Apotek Cinta Sehat
                </h3>
            </div>
            </div>
          </nav>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-lg-0">
                <div class="collapse navbar-collapse justify-content-end ">
                    <a class="navbar-brand mb-lg-0 " href="#">Beranda</a>
                </div>
                <li class="nav-item">
                    <a class="nav-link @yield('MenuMhs')" aria-current="page" href="/mahasiswa">Cari Obat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('MenuDos')" href="/dosen">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('MenuGal')" href="/galeri">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('konten')

    <footer class="fixed-bottom bg-dark text-white py-2 mt-4 text-center">
        Copyright &copy; Putri Chantika - 2025
    </footer>


    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
