@extends('master')
@section('form')

<div class="card mt-4 bg-light">
    <div class="card-header">
       <h4 class="float-start"> Daftar Data Karyawan </h4>
       <button type="button" class="btn btn-warning float-end" style="float: right;">
        <a class="nav-link" href="/formkar"><i class="fa-solid fa-user-plus"></i>  </a>
      </button>
    </div>
        <div class="card-body">
            <table class="table table-light" >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Karyawan</th>
                    <th scope="col">Nama Karyawan</th>
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

                  <tr>
                    <th scope="row">2</th>
                    <td>1235</td>
                    <td>Dini Aula</td>
                    <td>Batoh</td>
                    <td>087902469</td>
                    <td>Petugas</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>

                  <tr>
                    <th scope="row">3</th>
                    <td>1236</td>
                    <td>Efina Maharani</td>
                    <td>Lampaseh</td>
                    <td>08245678</td>
                    <td>Apoteker</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>

                  <tr>
                    <th scope="row">4</th>
                    <td>1237</td>
                    <td>M Iqbal</td>
                    <td>Laksana</td>
                    <td>08278346</td>
                    <td>Petugas</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>

                  <tr>
                    <th scope="row">5</th>
                    <td>1238</td>
                    <td>Vely Cia</td>
                    <td>Punge</td>
                    <td>087856437</td>
                    <td>Petugas</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>
                </tbody>
              </table>
        </div>

</div>

@endsection
