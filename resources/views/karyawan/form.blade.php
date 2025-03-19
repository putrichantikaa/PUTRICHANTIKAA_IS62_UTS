@extends('karyawan.master')
@section('form')


<form action="" method="POST" class="mt-5">
    <fieldset>
        <legend>Form Data Karyawan</legend>
        <table class="table" style="width: 1000px">

            <div class="form-group" style="margin-bottom: 25px;">
                <label for="id">ID karyawan</label>
                <input type="text" class="form-control" id="id" name="id" required style="margin-top: 10px;">
            </div>

            <div class="form-group" style="margin-bottom: 25px;">
                <label for="name">Nama Karyawan</label>
                <input type="text" class="form-control" id="name" name="name" required style="margin-top: 10px;">
            </div>

            <div class="form-group" style="margin-bottom: 25px;">
                <label for="address">Alamat</label>
                <input type="text" class="form-control" id="address" name="address" required style="margin-top: 10px;">
            </div>

            <div class="form-group" style="margin-bottom: 25px;">
                <label for="phone">No HP</label>
                <input type="text" class="form-control" id="phone" name="phone" required style="margin-top: 10px;">
            </div>

            <div class="form-group" style="margin-bottom: 25px;">
                <label for="position">Posisi</label>
                <select id="position" class="form-select" name="position" required style="margin-top: 10px;">
                    <option>Pilih Posisi</option>
                    <option>Petugas</option>
                    <option>Apoteker</option>
                </select>
            </div>

        </table>
        <div class="text-end">
            <button type="button" class="btn btn-secondary" onclick="window.history.back();">Batal</button>
            <button type="submit" class="btn btn-primary"> <a class="nav-link" href="/hasil">Simpan</a></button>
        </div>
    </fieldset>
</form>



@endsection
