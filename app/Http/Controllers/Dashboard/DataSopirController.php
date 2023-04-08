<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\sopir;
use Illuminate\Http\Request;


class DataSopirController extends Controller
{
    public function index()
    {
     $sopir=sopir::all();
       return view('dashboard.datasopir',compact('sopir'));
    }

    public function store(Request $request)
    {
        $sopir = new sopir;
        $sopir->nama_sopir = $request->input('nama_sopir');
        $sopir->nomor_hp_sopir = $request->input('nomor_hp_sopir');
        $sopir->alamat_sopir = $request->input('alamat_sopir');
        $sopir->status = $request->input('status');
        $sopir->gender = $request->input('gender');
        $sopir->password = bcrypt($request->input('password'));
       
        $sopir->save();
        return redirect('/datasopir') -> with('success', "Data berhasil ditambahkan!");
        
        
    
     
    }
    public function edit($id)
    {
    
    $sopir = sopir::where('id_sopir', $id);
    
    return view('dashboard.datasopir', [
        'method'=> "PUT",
        'action'=> "/datasopir/edit/'",
        'sopir'=> $sopir
    ]);
    }
 
    public function update(Request $request, $id)
    {
        
        $sopir = sopir::where('id_sopir', $id)
                ->update([
                    'nama_sopir' => $request->input('nama_sopir'),
                    'status' => $request->input('status'),
                    'alamat_sopir' => $request->input('alamat_sopir'),
                    'gender' => $request->input('gender'),
                    'nomor_hp_sopir' => $request->input('nomor_hp_sopir'),
                   
    
                ]);
                return redirect('/datasopir')->with('toast_success','Data Telah Diupdate');;
       
}
public function hapus($id)
{
   

    $sopir = sopir::where('id_sopir', $id);
       
        $sopir->delete();
        
        return back() -> with('toast_info', "Data berhasil dihapus!");
}
public function show($id){

    return $id;
}

}