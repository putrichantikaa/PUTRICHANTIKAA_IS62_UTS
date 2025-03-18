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
    <nav class="navbar" style="background-color:#FFB6C1;">

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <div class="collapse navbar-collapse justify-content-end ">
                    <a class="navbar-brand mb-2 mb-lg-0 " href="#">Beranda</a>
                </div>
                <li class="nav-item">
                    <a class="nav-link @yield('MenuMhs')" aria-current="page" href="/mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('MenuDos')" href="/dosen">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('MenuGal')" href="/galeri">Galeri</a>
                </li>
            </ul>
        </div>
    </nav>






    @yield('konten')

    <footer class="fixed-bottom bg-dark text-white py-2 mt-4 text-center">
        Copyright &copy; Maulian Saputra - 2025
    </footer>


    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
