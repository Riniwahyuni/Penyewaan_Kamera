@extends('kamera.layout')

@section('title')
Ubah Data
@endsection

@section('content')
<a href="{{ url('kamera') }}" class="btn btn-success btn-sm">
	Daftar penyewa kamera
</a>
<form method="post" action="{{ url('kamera/'.$kmr->id) }}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>NIK</label>
		<input type="text" name="nik" value="{{ $kmr->nik}}" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" value="{{ $kmr->nama}}" class="form-control">
	</div>
	<div class="form-group">
		<label>alamat</label>
		<input type="text" name="alamat" value = "{{ $kmr->alamat}}" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Kamera</label>
		<input type="text" name="nama_kamera" value ="{{ $kmr->nama_kamera}}" class="form-control">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number"  name="harga" value="{{$kmr->harga}}" class="form-control">
	</div>
	<button type="submit" class="btn btn-warning btn-block">
		Ubah Data
	</button>
</form>
@endsection