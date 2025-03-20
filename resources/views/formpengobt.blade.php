@extends('master')
@section('form')

<form action="" method="POST" class="mt-5">
    <fieldset>
        <legend>Form Data Pengambilan Obat</legend>
        <table class="table" style="width: 1000px">

            <div class="form-group" style="margin-bottom: 25px;">
                <label for="id">Tanggal Ambil</label>
                <input type="date" class="form-control" id="id" name="id" required style="margin-top: 10px;">
            </div>

            <div class="form-group" style="margin-bottom: 25px;">
                <label for="name">ID Karyawan</label>
                <input type="id" class="form-control" id="id" name="id" required style="margin-top: 10px;">
            </div>

            <div class="form-group" style="margin-bottom: 25px;">
                <label for="address">No Resep</label>
                <input type="text" class="form-control" id="address" name="address" required style="margin-top: 10px;">
            </div>

            <div class="mb-3">
                <label for="status1" class="form-label">Keterangan</label>
                <br>
                <input type="radio" name="status1" value="sd" id="status1" checked> Sudah diambil
                <input type="radio" name="status1" value="bd" id="status2"> Belum diambil
            </div>
            </div>

        </table>

        <div class="text-end">
            <button type="button" class="btn btn-secondary" onclick="window.history.back();">Batal</button>
            <button type="submit" class="btn btn-primary"> <a class="nav-link" href="/hasilpengobt">Simpan</a></button>
        </div>
    </fieldset>
</form>



@endsection
