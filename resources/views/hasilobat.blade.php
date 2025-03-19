@extends('karyawan.master')
@section('form')

<div class="card mt-4">
    <div class="card-header">
       <h2 class="float-start"> Daftar Data Obat </h2>
       <button type="button" class="btn btn-warning float-end" style="float: right;">
        <a class="nav-link" href="/formpas"><i class="fa-solid fa-user-plus"></i>  </a>
      </button>
    </div>
        <div class="card-body">
            <table class="table" >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Obat</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Tanggal EPX</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>OB-001</td>
                    <td>Paracetamol</td>
                    <td>16-04-2027</td>
                    <td>Tablet</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>
                </tbody>
              </table>
        </div>

</div>

@endsection
