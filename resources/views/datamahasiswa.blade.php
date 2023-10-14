@extends('master')

@section('konten')
<h3>Ubah Data Mahasiswa</h3>
  @foreach($mahasiswa as $m)
    <form method="post" action="{{route('updateMahasiswa')}}">
      @csrf
      <input type="hidden" name="id" value="{{$m->id}}">
      <div class="form-group">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_mahasiswa" value="{{$m->nama_mahasiswa}}" class="form-control" placeholder="Nama Mahasiswa" required="">
      </div>
      <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" value="{{$m->tempat_lahir}}" class="form-control" placeholder="Tempat Lahir" required="">
      </div>
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="{{$m->tanggal_lahir}}" class="form-control" placeholder="Tanggal Lahir" required="">
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" rows="3" class="form-control" placeholder="Alamat" required="">{{$m->alamat}}</textarea>
      </div>
      <div class="form-group">
        <label>No. Hp</label>
        <input type="text" name="no_hp" value="{{$m->no_hp}}" class="form-control" placeholder="No. Hp" required="">
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
      </div>
    </form>
  @endforeach
@endsection