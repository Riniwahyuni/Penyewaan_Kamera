@extends('kamera.layout')

@section('title')
kamera
@endsection

@section('content')
<a href="{{ url('kamera/create') }}" class="btn btn-success btn-sm">
    Tambah kamera
</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>alamat</th>
            <th>nama kamera</th>
            <th>harga</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $value)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $value->nik }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->alamat }}</td>
             <td>{{ $value->nama_kamera }}</td>
             <td>{{ $value->harga }}</td>
            <td>
                <a href="{{ url('kamera/'.$value->id.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a> 

               <form action="{{ url ('kamera/'.$value->id)}}" method="POST"> {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus?')">
                    HAPUS
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection