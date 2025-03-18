@extends('layout.master')
@section('title','Cari Obat')
@section('MenuCarObat','active')

@section('konten')
<div class="container-fluid mt-3" style="display: flex; align-items: center; justify-content: flex-end;">

    <img src="{{asset('/image/logo.png')}}" class="img-thumbnail img-fluid img-right" alt="Logo" width="50" height="50">

    <div style="text-align: left;">
        <h1 style="margin: 0;">Apotek</h1>
        <h5 style="margin: 0;">Cinta Sehat</h5>
    </div>
</div>
    <div class="container" style="margin-top: 50px; display: flex; align-items: center; justify-content: flex-start;">
        <div style="text-start">
            <h1 style="margin: 0;">Apotek Cinta Sehat</h1>
            <h5 style="margin: 0;">Melayani Kesehatan Pada Masyarakat</h5>
            <br>
            <div class="container bg-primary-subtle" style="margin-top: 5px; display: flex; align-items: center; justify-content: flex-start; width: 1200px; height: 350px;">
            <!-- Gambar pertama -->
            <img src="{{asset('/image/gambar1.jpg')}}" class="img-thumbnail" alt="image" style="width: 380px; height: 300px; margin-top: 20px;">

            <!-- Gambar kedua -->
            <img src="{{asset('/image/gambar2.png')}}" class="img-thumbnail" alt="image" style="width: 380px; height: 300px; margin-top: 20px;">

            <!-- Gambar ketiga -->
            <img src="{{asset('/image/gambar3.jpeg')}}" class="img-thumbnail" alt="image" style="width: 380px; height: 300px; margin-top: 20px;">
            </div>
        </div>
    </div>
</div>


<div class="container">
    <h1 style="margin-bottom: 80px;"> Lorem ipsum dolor sit amet </h1>


    {{-- konten --}}
</div>
@endsection
