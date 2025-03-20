@extends('master')
@section('form')

<div class="card mt-4 bg-light">
    <div class="card-header">
       <h4 class="float-start"> Daftar Data Pengambilan Obat </h4>
       <button type="button" class="btn btn-warning float-end" style="float: right;">
        <a class="nav-link" href="/formpengobt"><i class="fa-solid fa-user-plus"></i>  </a>
      </button>
    </div>
        <div class="card-body">
            <table class="table table-light" >
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
                    <td>15-06-2025</td>
                    <td>1234</td>
                    <td>K025</td>
                    <td><span class="badge bg-success text-white">Sudah Diambil</span></td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>

                  <tr>
                    <th scope="row">2</th>
                    <td>13-03-2025</td>
                    <td>1235</td>
                    <td>K026</td>
                    <td><span class="badge bg-danger text-white">Belum Diambil</span></td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>

                  <tr>
                    <th scope="row">3</th>
                    <td>17-04-2025</td>
                    <td>1234</td>
                    <td>K027</td>
                    <td><span class="badge bg-success text-white">Sudah Diambil</span></td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>19-04-2025</td>
                    <td>1237</td>
                    <td>K028</td>
                    <td><span class="badge bg-danger text-white">Belum Diambil</span></td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>20-04-2025</td>
                    <td>1236</td>
                    <td>K029</td>
                    <td><span class="badge bg-success text-white">Sudah Diambil</span></td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>
                </tbody>
              </table>
        </div>

</div>

@endsection
