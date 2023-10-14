@extends('master')

@section('konten')
<h3>Tampil Data Mahasiswa</h3>
<a class="btn btn-success" href="{{route('addMahasiswa')}}">
    <i class="fa fa-plus"></i> 
    Tambah Mahasiswa
</a>
<br>
<br>
<table class="table table-bordered table-hover"> 
    <tr> 
        <th>ID</th> 
        <th>Nama Mahasiswa</th> 
        <th>Tempat Lahir</th> 
        <th>Tanggal Lahir</th> 
        <th>Alamat</th> 
        <th>No. Hp</th> 
        <th>Aksi</th> 
    </tr>
    @foreach($mahasiswa as $m)
    <tr>
        <td>{{$m->id}}</td> 
        <td>{{$m->nama_mahasiswa}}</td> 
        <td>{{$m->tempat_lahir}}</td> 
        <td>{{$m->tanggal_lahir}}</td> 
        <td>{{$m->alamat}}</td> 
        <td>{{$m->no_hp}}</td>
        <td>
            <a href="/mahasiswa/get/{{$m->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
            <a href="/mahasiswa/delete/{{$m->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
        </td>
        <td>
    </tr>
    @endforeach
</table>

@endsection