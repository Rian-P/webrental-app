<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\pemesanan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataPemesananController extends Controller
{
    // public function index()
    // {

    //     return view('dashboard.datapemesanan');
    // }
    public function index()
    {
        $pemesanan = pemesanan::all();
        return view('dashboard.datapemesanan', compact('pemesanan'));
    }

    public function store(Request $request)
    {
        $pemesanan = new pemesanan;
        $pemesanan->nama_pelanggan = $request->input('nama_pelanggan');
        $pemesanan->nama_kendaraan = $request->input('nama_kendaraan');
        $pemesanan->kota_tujuan = $request->input('kota_tujuan');
        $pemesanan->tanggal_pengambilan = $request->input('tanggal_pengambilan');
        $pemesanan->tanggal_pengembalian = $request->input('tanggal_pengembalian');
        $pemesanan->waktu_pengambilan = $request->input('waktu_pengambilan');
        $pemesanan->waktu_pengembalian = $request->input('waktu_pengembalian');
        $pemesanan->sopir = $request->input('sopir');
        if($request->hasFile('foto_ktp')){
            $file = $request->file('foto_ktp');
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/images/', $nama_file);
            $pemesanan->foto_ktp = $nama_file;
        }
        
        $pemesanan->bukti_tf = $request->input('bukti_tf');
        $pemesanan->status = $request->input('status');

        $pemesanan->save();
        return redirect('/datapemesanan')->with('success', "Data berhasil ditambahkan!");
    }
    public function edit($id)
    {

        $pemesanan = pemesanan::where('id_pemesanan', $id);

        return view('dashboard.pemesanan', [
            'method' => "PUT",
            'action' => "/datapemesanan/edit/'",
            'pemesanan' => $pemesanan
        ]);
    }

    public function update(Request $request, $id)
    {

        $pemesanan = pemesanan::where('id_sopir', $id)
            ->update([
                'nama_pelanggan' => $request->input('ama_pelanggan'),
                'nama_kendaraan' => $request->input('nama_kendaraan'),
                'kota_tujuan' => $request->input('kota_tujuan'),
                'tanggal_pengambilan' => $request->input('tanggal_pengambilan'),
                'tanggal_pengembalian' => $request->input('tanggal_pengembalian'),
                'sopir' => $request->input('sopir'),
                'waktu_pengambilan' => $request->input('waktu_pengambilan'),
                'waktu_pengembalian' => $request->input('waktu_pengembalian'),
                'foto_ktp' => $request->input('foto_ktp'),
                'bukti_tf' => $request->input('bukti_tf'),
                'status' => $request->input('status'),



            ]);
        return redirect('/datapemesananr')->with('toast_success', 'Data Telah Diupdate');;
    }
    public function hapus($id)
    {


        $pemesanan= pemesanan::where('id_pemesanan', $id);

        $pemesanan->delete();

        return back()->with('toast_info', "Data berhasil dihapus!");
    }
    public function show($id)
    {

        return $id;
    }
}
