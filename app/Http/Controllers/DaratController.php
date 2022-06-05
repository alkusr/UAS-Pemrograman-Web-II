<?php

namespace App\Http\Controllers;

use App\Models\Darat;

use Illuminate\Http\Request;

class DaratController extends Controller
{
    public function index(){
        $daftar_darat = Darat::all();
        return view('darat.index', compact('daftar_darat'));
    }

    public function admin_darat(){
        $daftar_darat = Darat::all();
        return view('darat.admin', compact('daftar_darat'));
    }

    public function create(){
        return view('darat.create');
    }

    public function store(Request $request){
        Darat::create($request->all());
        return redirect()->route('browse-darat');
    }

    public function edit( $id){
        $darat = Darat::find($id);
        return view('darat.edit', compact('darat'));
    }

    public function update( Request $request, $id){
        $darat = Darat::find($id);
        $darat->update($request->all());
        return redirect()->route('browse-darat');
    }

    public function delete( $id){
        $darat = Darat::find($id);
        $darat->delete();
        return redirect()->route('browse-darat');
    }
}
