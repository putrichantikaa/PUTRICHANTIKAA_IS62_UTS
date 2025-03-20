@extends('master')
@section('form')



    <div class="container mt-4">
        <h3><strong>Dashboard <i class="fa-solid fa-house-user"></i></strong></h3>
        <div class="alert alert-warning" role="alert">
            <strong>Hello Admin,</strong> Selamat datang di aplikasi <strong> Apotek Cinta Sehat </strong>
        </div>
        <div class="row g-3">
            <button type="button" class="col-md-4 btn btn-bg-warning"> <a class="nav-link" href="/dashboard">
                <div class="card bg-warning text-dark text-center p-3">
                    <h4>13</h4>
                    <p> Dashboard</p>
                </div>
                </a>
            </button>
            <button type="button" class="col-md-4 btn btn-bg-success"> <a class="nav-link" href="/hasilkar">
                <div class="card bg-success text-white text-center p-3">
                    <h4>5</h4>
                    <p> Data Karyawan</p>
                </div>
                </a>
            </button>
            <button type="button" class="col-md-4 btn btn-bg-primary"> <a class="nav-link" href="/hasilpas">
                <div class="card bg-primary text-white text-center p-3">
                    <h4>6</h4>
                    <p> Data Pasien</p>
                </div>
                </a>
            </button>
            <button type="button" class="col-md-4 btn btn-bg-info"> <a class="nav-link" href="/hasilobat">
                <div class="card bg-info text-white text-center p-3">
                    <h4>5</h4>
                    <p> Data Obat</p>
                </div>
                </a>
            </button>
            <button type="button" class="col-md-4 btn btn-bg-danger"> <a class="nav-link" href="/hasilres">
                <div class="card bg-danger text-white text-center p-3">
                    <h4>0</h4>
                    <p> Data Resep</p>
                </div>
                </a>
            </button>
            <button type="button" class="col-md-4 btn btn-bg-dark"> <a class="nav-link" href="/hasilpengobt">
                <div class="card bg-dark text-white text-center p-3">
                    <h4>5</h4>
                    <p> Data Pengambilan Obat</p>
                </div>
                </a>
            </button>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    @endsection

