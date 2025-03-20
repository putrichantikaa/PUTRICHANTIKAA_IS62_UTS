@extends('master')
@section('form')

<div class="container mt-4">
    <h2 class="text-center">Daftar Data Resep Pasien</h2>
    <div class="d-flex flex-nowrap overflow-auto">
        <!-- Duplikasi Kartu dalam Grid -->
        <div class="col-md-3 col-sm-6 mb-3" v-for="i in 20">
            <div class="card text-center p-3 shadow-sm">
                <div class="card-img-top bg-secondary" style="height: 100px;"></div>
                <div class="card-body text-start">
                    <p><strong>No Resep :</strong> R-025</p>
                    <p><strong>NIK:</strong> 1115657</p>
                    <p><strong>Nama :</strong> Cinta Berlian</p>
                    <p><strong>No Kartu :</strong> 123</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="d-flex flex-nowrap overflow-auto">
        <!-- Duplikasi Kartu dalam Grid -->
        <div class="col-md-3 col-sm-6 mb-3" v-for="i in 20">
            <div class="card text-center p-3 shadow-sm">
                <div class="card-img-top bg-secondary" style="height: 100px;"></div>
                <div class="card-body text-start">
                    <p><strong>No Resep :</strong> R-025</p>
                    <p><strong>NIK:</strong> 1115657</p>
                    <p><strong>Nama :</strong> Cinta Berlian</p>
                    <p><strong>No Kartu :</strong> 123</p>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
