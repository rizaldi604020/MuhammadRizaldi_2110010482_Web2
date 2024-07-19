@extends('layout.master')

@section('content')
<div class="row" style="padding-left: 25px; padding-right: 25px">
    <div class="col-xl-6 col-md-6" style="padding-left: 0px;">
        <a class="btn btn-success" href="/mahasiswa/tambah"><i class="fas fa-plus" style="padding-right: 5px"></i>Tambah Data</a>
        <a class="btn btn-primary" href="/mahasiswa/cetak-pdf" target="_blank"><i class="fas fa-print" style="padding-right: 5px"></i>Cetak PDF</a>
    </div>

<div class="row" style="padding-top: 10px; padding-left: 0px;">
    <div class="col-xl-6 col-md-6">
        <a class="btn btn-primary" href="/"><i class="fas fa-backward" style="padding-right: 5px"></i>Ke Beranda</a>
    </div>


<br/><br/>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Mahasiswa
    </div>
        <div class="card-body">
        <table id="datatablesSimple">
            <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Aksi/Button</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($mahasiswa as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->npm}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->jurusan}}</td>
                <td>
                    <a href="/mahasiswa/edit/{{$item->id}}">Edit</a> |
                    <a href="/mahasiswa/delete/{{$item->id}}">Hapus</a>
                </td>
            </tr>
            
            @endforeach
            </tbody>
        </table>
        </div>    
</div>
</div>



@endsection
