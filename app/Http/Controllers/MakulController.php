<?php

namespace App\Http\Controllers;

use App\Makul;

use Illuminate\Http\Request;

Use Alert;

class MakulController extends Controller
{
 public function index()
 {
     $makul = Makul::all();
     return view('makul.makul', compact('makul'));
 }
 public function create()
    {
        return view('makul.create');
    }
 public function store(Request $request)
    {
        Makul::create($request->all());
        alert()->success('Success','Berhasil Menyimpan Data');
        return redirect()->route('makul');
    }

 public function edit($id)
 {
     $makul = Makul::find($id);
    return view('makul.edit',compact('makul'));
 }
 public function update(Request $request, $id)
 {
    $makul = Makul::find($id);
    $makul->update($request->all());
    toast('Oke Data Berhasil Di Edit','success');
    return redirect()->route('makul');
 }
public function destroy($id)
{
    $makul = Makul::find($id);
    $makul->delete();
    toast('Data Telah Berhasil Dihapus','success');
    return redirect()->route('makul');
}
}