<?php

namespace App\Http\Controllers;

use App\Models\Kandang;

use Illuminate\Http\Request;

class KandangController extends Controller
{
    public function index(){
        $daftar_kandang = Kandang::all();
        return view('kandang.index', compact('daftar_kandang'));
    }

    public function admin_kandang(){
        $daftar_kandang = Kandang::all();
        return view('kandang.admin', compact('daftar_kandang'));
    }

    public function create(){
        return view('kandang.create');
    }

    public function store(Request $request){
        Kandang::create($request->all());
        return redirect()->route('browse-kandang');
    }

    public function edit( $id){
        $kandang = Kandang::find($id);
        return view('kandang.edit', compact('kandang'));
    }

    public function update( Request $request, $id){
        $kandang = Kandang::find($id);
        $kandang->update($request->all());
        return redirect()->route('browse-kandang');
    }

    public function delete( $id){
        $kandang = Kandang::find($id);
        $kandang->delete();
        return redirect()->route('browse-kandang');
    }
}
