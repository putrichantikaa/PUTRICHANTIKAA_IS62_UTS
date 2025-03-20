@extends('master')
@section('form')

<div class="card mt-4 bg-light">
    <div class="card-header">
       <h4 class="float-start"> Daftar Data Pasien </h4>
       <button type="button" class="btn btn-warning float-end" style="float: right;">
        <a class="nav-link" href="/formpas"><i class="fa-solid fa-user-plus"></i>  </a>
      </button>
    </div>
        <div class="card-body">
            <table class="table table-light" >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Pasien</th>
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
                    <td>Raihan Rara</td>
                    <td>19 Tahun</td>
                    <td>Demam</td>
                    <td>08564567</td>
                    <td>Mibo</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>

                  <tr>
                    <th scope="row">2</th>
                    <td>111656633</td>
                    <td>Sri Ramadhani</td>
                    <td>23 Tahun</td>
                    <td>Lambung</td>
                    <td>086346437</td>
                    <td>Setui</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>

                  <tr>
                    <th scope="row">3</th>
                    <td>111902538</td>
                    <td>Chantika Safda</td>
                    <td>13 Tahun</td>
                    <td>Gigi</td>
                    <td>083456256</td>
                    <td>Lampenerut</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>

                  <tr>
                    <th scope="row">4</th>
                    <td>1117893463</td>
                    <td>Suhaila</td>
                    <td>25 Tahun</td>
                    <td>Jantung</td>
                    <td>086732562</td>
                    <td>Peunayong</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>

                  <tr>
                    <th scope="row">5</th>
                    <td>111576464</td>
                    <td>Indah Sari</td>
                    <td>23 Tahun</td>
                    <td>Batuk</td>
                    <td>0852836795</td>
                    <td>Keutapang</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>

                  <tr>
                    <th scope="row">6</th>
                    <td>111453456</td>
                    <td>Iqbal</td>
                    <td>18 Tahun</td>
                    <td>Paru-Paru</td>
                    <td>0887275</td>
                    <td>Peuniti</td>
                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                  </tr>
                </tbody>
              </table>
        </div>

</div>

@endsection

