@extends('kamera.layout')

@section('title')
Tambah Data kamera
@endsection

@section('content')
<a href="{{ url('kamera') }}" class="btn btn-success btn-sm">
	Daftar kamera
</a>
<form method="post" action="{{ url('kamera') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>NIK</label>
		<input type="text" name="nik" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Kamera</label>
		<input type="text" name="nama_kamera" class="form-control">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" class="form-control">
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
@endsection