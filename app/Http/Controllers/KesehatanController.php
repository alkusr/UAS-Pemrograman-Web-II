<?php

namespace App\Http\Controllers;

use App\Models\Kesehatan;

use Illuminate\Http\Request;

class KesehatanController extends Controller
{
    public function index(){
        $daftar_kesehatan = Kesehatan::all();
        return view('kesehatan.index', compact('daftar_kesehatan'));
    }

    public function admin_kesehatan(){
        $daftar_kesehatan = Kesehatan::all();
        return view('kesehatan.admin', compact('daftar_kesehatan'));
    }

    public function create(){
        return view('kesehatan.create');
    }

    public function store(Request $request){
        Kesehatan::create($request->all());
        return redirect()->route('browse-kesehatan');
    }

    public function edit( $id){
        $kesehatan = Kesehatan::find($id);
        return view('kesehatan.edit', compact('kesehatan'));
    }

    public function update( Request $request, $id){
        $kesehatan = Kesehatan::find($id);
        $kesehatan->update($request->all());
        return redirect()->route('browse-kesehatan');
    }

    public function delete( $id){
        $kesehatan = Kesehatan::find($id);
        $kesehatan->delete();
        return redirect()->route('browse-kesehatan');
    }
}
