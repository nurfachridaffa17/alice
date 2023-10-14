@extends('master')

@section('konten')
<h3>Form Input Mahasiswa</h3>
<form method="post" action="{{route('saveMahasiswa')}}">
  @csrf
  <div class="form-group">
    <label>Nama Mahasiswa</label>
    <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Nama Mahasiswa" required="">
  </div>
  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required="">
  </div>
  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required="">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" rows="3" class="form-control" placeholder="Alamat" required=""></textarea>
  </div>
  <div class="form-group">
    <label>No. Hp</label>
    <input type="text" name="no_hp" class="form-control" placeholder="No. Hp" required="">
  </div>
  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
@endsection