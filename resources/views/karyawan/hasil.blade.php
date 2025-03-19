@extends('karyawan.master')
@section('form')

{{-- <button type="button" class="btn btn-warning" style="float: right;">
    <a href="form"><i class="fa-solid fa-user-plus"></i></a>
  </button> --}}

<div class="card mt-4">
    <div class="card-header">
       <h2 class="float-start"> Daftar Data Pengguna </h2>
       <button type="button" class="btn btn-warning float-end" style="float: right;">
        <a class="nav-link" href="/form"><i class="fa-solid fa-user-plus"></i>  </a>
      </button>
    </div>
        <div class="card-body">
            <table class="table" >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>1234</td>
                    <td>Putri Chantika</td>
                    <td>Keutapang</td>
                    <td>081234567</td>
                    <td>Apoteker</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>
                </tbody>
              </table>
        </div>

</div>

@endsection
