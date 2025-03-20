@extends('master')
@section('form')

<div class="card mt-4 bg-light">
    <div class="card-header">
       <h4 class="float-start"> Daftar Data Obat </h4>
       <button type="button" class="btn btn-warning float-end" style="float: right;">
        <a class="nav-link" href="/formobat"><i class="fa-solid fa-user-plus"></i>  </a>
      </button>
    </div>
        <div class="card-body">
            <table class="table table-light">
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
                    <td>
                      <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">2</th>
                    <td>OB-002</td>
                    <td>Komix</td>
                    <td>26-07-2028</td>
                    <td>Botol</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">3</th>
                    <td>OB-003</td>
                    <td>Bodrex</td>
                    <td>23-05-2025</td>
                    <td>Tablet</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">4</th>
                    <td>OB-004</td>
                    <td>Ambroxol</td>
                    <td>13-09-2026</td>
                    <td>Tablet</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">5</th>
                    <td>OB-005</td>
                    <td>Combi</td>
                    <td>08-03-2025</td>
                    <td>Botol</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>

        </div>

</div>

@endsection
