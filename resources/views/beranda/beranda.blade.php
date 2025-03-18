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

    <div class="container-fluid mt-3" style="display: flex; align-items: center; justify-content: flex-end;">

        <img src="{{asset('/image/logo.png')}}" class="img-thumbnail img-fluid img-right" alt="Logo" width="50" height="50">

        <div style="text-align: left;">
            <h1 style="margin: 0;">Apotek</h1>
            <h5 style="margin: 0;">Cinta Sehat</h5>
        </div>
    </div>
        <div class="container" style="margin-top: 50px; display: flex; align-items: center; justify-content: flex-start;">
            <div style="text-start">
                <h1 style="margin: 0;">Apotek Cinta Sehat</h1>
                <h5 style="margin: 0;">Melayani Kesehatan Pada Masyarakat</h5>
                <br>
                <div class="container bg-primary-subtle" style="margin-top: 5px; display: flex; align-items: center; justify-content: flex-start; width: 1200px; height: 350px;">
                <!-- Gambar pertama -->
                <img src="{{asset('/image/gambar1.jpg')}}" class="img-thumbnail" alt="image" style="width: 380px; height: 300px; margin-top: 20px;">

                <!-- Gambar kedua -->
                <img src="{{asset('/image/gambar2.png')}}" class="img-thumbnail" alt="image" style="width: 380px; height: 300px; margin-top: 20px;">

                <!-- Gambar ketiga -->
                <img src="{{asset('/image/gambar3.jpeg')}}" class="img-thumbnail" alt="image" style="width: 380px; height: 300px; margin-top: 20px;">
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <h1 style="margin-bottom: 80px;"> Lorem ipsum dolor sit amet </h1>














    @yield('konten')

    <footer class="fixed-bottom bg-danger-subtle text-black py-2 mt-4 text-center">
        Copyright &copy; Putri Chantika - 2025
    </footer>


    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
