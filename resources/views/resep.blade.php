@extends('master')
@section('form')

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        width: 900px;
    }
    .header {
        text-align: center;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .info {
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #e0e0e0;
    }
    .button-container {
        text-align: right;
        margin-top: 20px;
    }
    .button {
        padding: 10px 20px;
        background-color: #ddd;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="header">RESEP OBAT</div>
    <div class="info">
        <div>
            <p>No Resep : K-025</p>
            <p>No Kartu : 123</p>
            <p>Tanggal : 15-01-2025</p>
        </div>
        <div>
            <p>NIK : 118922</p>
            <p>Nama : Cinta Berlian</p>
            <p>No HP : 0834598522</p>
            <p>Alamat : Garut</p>
        </div>
    </div>
    <table>
        <tr>
            <th>No</th>
            <th>Kode Obat</th>
            <th>Nama Obat</th>
            <th>Jumlah</th>
        </tr>
        <tr>
            <td>1</td>
            <td>OB-002</td>
            <td>Enkasari</td>
            <td>1</td>
        </tr>
        <tr>
            <td>2</td>
            <td>OB-003</td>
            <td>Promag</td>
            <td>4</td>
        </tr>
        <tr>
            <td>3</td>
            <td>OB-001</td>
            <td>Paracetamol</td>
            <td>3</td>
        </tr>
    </table>
    <div class="button-container">
        <button class="back-button btn btn-primary" onclick="window.history.back();">Kembali</button>
    </div>
</div>

@endsection
