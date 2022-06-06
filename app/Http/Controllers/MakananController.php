<?php

namespace App\Http\Controllers;

use App\Models\Makanan;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index(){
        $daftar_makanan = Makanan::all();
        return view('makanan.index', compact('daftar_makanan'));
    }

    public function admin_makanan(){
        $daftar_makanan = Makanan::all();
        return view('makanan.admin', compact('daftar_makanan'));
    }

    public function create(){
        return view('makanan.create');
    }

    public function store(Request $request){
        Makanan::create($request->all());
        return redirect()->route('browse-makanan');
    }

    public function edit( $id){
        $makanan = Makanan::find($id);
        return view('makanan.edit', compact('makanan'));
    }

    public function update( Request $request, $id){
        $makanan = Makanan::find($id);
        $makanan->update($request->all());
        return redirect()->route('browse-makanan');
    }

    public function delete( $id){
        $makanan = Makanan::find($id);
        $makanan->delete();
        return redirect()->route('browse-makanan');
    }
}
