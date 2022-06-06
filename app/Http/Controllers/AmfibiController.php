<?php

namespace App\Http\Controllers;

use App\Models\Amfibi;

use Illuminate\Http\Request;

class AmfibiController extends Controller
{
    public function index(){
        $daftar_amfibi = Amfibi::all();
        return view('amfibi.index', compact('daftar_amfibi'));
    }

    public function admin_amfibi(){
        $daftar_amfibi = Amfibi::all();
        return view('amfibi.admin', compact('daftar_amfibi'));
    }

    public function create(){
        return view('amfibi.create');
    }

    public function store(Request $request){
        Amfibi::create($request->all());
        return redirect()->route('browse-amfibi');
    }

    public function edit( $id){
        $amfibi = Amfibi::find($id);
        return view('amfibi.edit', compact('amfibi'));
    }

    public function update( Request $request, $id){
        $amfibi = Amfibi::find($id);
        $amfibi->update($request->all());
        return redirect()->route('browse-amfibi');
    }

    public function delete( $id){
        $amfibi = Amfibi::find($id);
        $amfibi->delete();
        return redirect()->route('browse-amfibi');
    }
}
