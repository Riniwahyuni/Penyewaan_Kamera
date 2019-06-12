<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kamera;
class kameraController extends Controller
{
    public function index(){
		
		// file mahasiswa terdapat pada folder resource
		$var = 'Rini wahyuni';
		$data = kamera::all();
//		dd($data);
		return view('kamera.index', compact('var', 'data'));
	}

	public function create(){
		return view('kamera.tambah');
	}

	public function store(Request $kamera){
		kamera::create($kamera->all());
		return redirect('kamera');
	}

	public function edit($id){
				
		$kmr = kamera::find($id);
		return view('kamera.ubah', compact('kmr'));
	}

	public function update(Request $kamera, $id){
		$kmr = $kamera->all();
		kamera::find($id)->update($kmr);
		return redirect('kamera');
	}

	public function destroy($id){
		kamera::find($id)->delete();
		return redirect('kamera');
	}
}
