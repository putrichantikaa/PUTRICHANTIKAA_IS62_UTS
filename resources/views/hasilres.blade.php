@extends('master')
@section('form')

<div class="container-fluid mt-4 ">
    <h2 class="text-center">Daftar Data Resep Pasien</h2>
    <div class="d-flex flex-wrap gap-3 justify-content-center">

        <div class="card text-center p-3 shadow-sm mt-3" style="width: 18rem;" v-for="i in 20">
            <div class="card-img-top bg-secondary" style="height: 100px;"></div>
            <div class="card-body text-start">
                <p><strong>No Resep :</strong> R-025</p>
                <p><strong>NIK:</strong> 1115657</p>
                <p><strong>Nama :</strong> Cinta Berlian</p>
                <p><strong>No Kartu :</strong> 123</p>
            </div>
            <button type="button" class="btn btn-primary float-end" style="float: right;">
                <a class="nav-link" href="/resep">Lihat </a>
              </button>
        </div>

        <!-- Kartu tambahan -->
        <div class="card text-center p-3 shadow-sm mt-3" style="width: 18rem;">
            <div class="card-img-top bg-secondary" style="height: 100px;"></div>
            <div class="card-body text-start">
                <p><strong>No Resep :</strong> R-026</p>
                <p><strong>NIK:</strong> 1115658</p>
                <p><strong>Nama :</strong> Berlian Cinta</p>
                <p><strong>No Kartu :</strong> 124</p>
            </div>
            <button type="button" class="btn btn-primary float-end" style="float: right;">
                <a class="nav-link" href="/resep">Lihat </a>
              </button>
        </div>

        <!-- Kartu tambahan -->
        <div class="card text-center p-3 shadow-sm mt-3" style="width: 18rem;">
            <div class="card-img-top bg-secondary" style="height: 100px;"></div>
            <div class="card-body text-start">
                <p><strong>No Resep :</strong> R-026</p>
                <p><strong>NIK:</strong> 1115658</p>
                <p><strong>Nama :</strong> Berlian Cinta</p>
                <p><strong>No Kartu :</strong> 124</p>
            </div>
            <button type="button" class="btn btn-primary float-end" style="float: right;">
                <a class="nav-link" href="/resep">Lihat </a>
              </button>
        </div>
    </div>

</div>

@endsection
