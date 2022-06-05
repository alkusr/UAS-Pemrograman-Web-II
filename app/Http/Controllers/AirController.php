<?php

namespace App\Http\Controllers;

use App\Models\Air;

use Illuminate\Http\Request;

class AirController extends Controller
{
    public function index(){
        $daftar_air = Air::all();
        return view('air.index', compact('daftar_air'));
    }

    public function admin_air(){
        $daftar_air = Air::all();
        return view('air.admin', compact('daftar_air'));
    }

    public function create(){
        return view('air.create');
    }

    public function store(Request $request){
        Air::create($request->all());
        return redirect()->route('browse-air');
    }

    public function edit( $id){
        $air = Air::find($id);
        return view('air.edit', compact('air'));
    }

    public function update( Request $request, $id){
        $air = Air::find($id);
        $air->update($request->all());
        return redirect()->route('browse-air');
    }

    public function delete( $id){
        $air = Air::find($id);
        $air->delete();
        return redirect()->route('browse-air');
    }
}
