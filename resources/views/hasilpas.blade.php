@extends('karyawan.master')
@section('form')

{{-- <button type="button" class="btn btn-warning" style="float: right;">
    <a href="form"><i class="fa-solid fa-user-plus"></i></a>
  </button> --}}

<div class="card mt-4">
    <div class="card-header">
       <h2 class="float-start"> Daftar Data Pasien </h2>
       <button type="button" class="btn btn-warning float-end" style="float: right;">
        <a class="nav-link" href="/formpas"><i class="fa-solid fa-user-plus"></i>  </a>
      </button>
    </div>
        <div class="card-body">
            <table class="table" >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Diagnosa</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>11186352</td>
                    <td>Raihan Ramadhani</td>
                    <td>19 Tahun</td>
                    <td>Demam</td>
                    <td>08564567</td>
                    <td>Mibo</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>
                </tbody>
              </table>
        </div>

</div>

@endsection

