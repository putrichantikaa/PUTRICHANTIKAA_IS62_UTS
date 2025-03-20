@extends('master')
@section('form')

<div class="card mt-4 bg-primary-subtle">
    <div class="card-header">
       <h2 class="float-start"> Daftar Data Pengambilan Obat </h2>
       <button type="button" class="btn btn-warning float-end" style="float: right;">
        <a class="nav-link" href="/formpengobt"><i class="fa-solid fa-user-plus"></i>  </a>
      </button>
    </div>
        <div class="card-body">
            <table class="table table-primary" >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal Ambil</th>
                    <th scope="col">ID Karyawan</th>
                    <th scope="col">No Resep</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>15-04-2025</td>
                    <td>12345</td>
                    <td>K025</td>
                    <td>Sudah Diambil</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>
                </tbody>
              </table>
        </div>

</div>

@endsection
