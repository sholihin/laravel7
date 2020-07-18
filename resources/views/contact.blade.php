@extends('layout.front')
@section('content')
<form action="{{ route('user.siswa') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama">
    </div>
    <div class="form-group">
      <label for="usia">Usia</label>
      <input type="text" class="form-control" id="usia" name="usia" placeholder="Masukan usia">
    </div>
    <div class="form-group">
      <label for="kelas">Kelas</label>
      <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukan kelas">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection