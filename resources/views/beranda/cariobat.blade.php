@extends('layout.master')
@section('title','Cari Obat')
@section('MenuCarObat','active')

@section('konten')
<div class="container text-center mt-3 bg-white">
    <h2 class="mb-3">Data Cari Obat</h2>
    <div class="row">
        <div class="m-auto col-6">
            <ol class="list-group">
                @forelse ($data_cariobat as $cariobat)
                    <li class="list-group-item">{{$cariobat}}</li>
                @empty
                <div class="alert alert-secondary" role="alert">
                    Maaf, Obat Tidak Tersedia
                </div>
                @endforelse
            </ol>
        </div>
    </div>

    {{-- konten --}}
</div>
@endsection
