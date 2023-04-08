<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\mobil;

class DataKendaraanController extends Controller
{
    public function index()
    {
        $mobil = DB::table('mobils')->get();
     // mengirim data pegawai ke view index
     return view('Dashboard.datakendaraan',['mobils' => $mobil]);
    }
    public $image;
    public $dimensions;

    public function createmobil()
    {
     
       return view('dashboard.datakendaraan');
    }
    
    
    public function __construct()
  {
      //DEFINISIKAN PATH
      $this->image = 'images/mobil/';
      //DEFINISIKAN DIMENSI
      $this->dimensions = [ '500'];
  }
    public function store(Request $request)
    {
        
        $mobil = new mobil;

        $mobil->nama_kendaraan = $request->input('nama_kendaraan');
        $mobil->type = $request->input('type');
        $mobil->nopol = $request->input('nopol');
        $mobil->tahun = $request->input('tahun');
        $mobil->harga_12_jam = $request->input('harga_12_jam');
        $mobil->harga_24_jam = $request->input('harga_24_jam');
        $mobil->deskripsi_mobil = $request->input('deskripsi_mobil');
       

        

        if($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $thumb = Image::make($file->getRealPath())->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
           

            $destinationPath = 'images/mobil/';
            $file->storeAs($destinationPath, $extension);
            $thumb->save($destinationPath.'/thumb_'.$extension);
            // $mobil['image'] = $extension;
            $mobil['image'] = 'thumb_' . $extension;


            // $file->storeAs('images/blog/', $extension);
            // $thumb->save('images/blog/'.'/thumb_',$extension);
            // $blog['image'] = $extension;
            // $blog['thumbnail'] = '/images/blog' . '/thumb_' . $extension;
           
            
        }
        
        $mobil->save();
        return redirect('/datakendaraan') -> with('success', "Data berhasil ditambahkan!");
        
        
        
        // alihkan halaman ke halaman pegawai
        // return redirect('/updateblog');
     
    }
    
    public function edit($id)
{
// 	// mengambil data pegawai berdasarkan id yang dipilih
// 	$blog = DB::table('blog')->where('id',$id)->get();
// 	// passing data pegawai yang didapat ke view edit.blade.php
// 	return view('landing.editblog',['blog' => $blog]);
$mobil = mobil::where('id_mobil', $id);

return view('dashboard.datakendaraan', [
    'method'=> "PUT",
    'action'=> "/datakendaraan/edit/'",
    'mobil'=> $mobil
]);
}
// }
// update data pegawai
public function update(Request $request, $id)
{
    // update data pegawai
    // DB::table('blog')->where('id',$request->id)->update([
    // 	'image' => $request->image,
    // 	'jobs' => $request->jobs,
    // 	'title' => $request->title,
    //     'description' => $request->description,
    //     'reading' => $request->reading,
    //     'date' =>  Carbon::now()
    // ]);
  
    // $mobil = mobil::where('id_mobil', $id)->first();
    $mobil = mobil::where('id_mobil', $id)
            ->update([
                'nama_kendaraan' => $request->input('nama_kendaraan'),
                'type' => $request->input('type'),
                'nopol' => $request->input('nopol'),
                'tahun' => $request->input('tahun'),
                'harga_12_jam' => $request->input('harga_12_jam'),
                'harga_24_jam' => $request->input('harga_24_jam'),

                'deskripsi_mobil' => $request->input('deskripsi_mobil'),

            ]);
    // $mobil = new mobil;
    // $mobil->nama_kendaraan = $request->input('nama_kendaraan');
    // $mobil->type = $request->input('type');
    // $mobil->nopol = $request->input('nopol');
    // $mobil->tahun = $request->input('tahun');
    // $mobil->harga = $request->input('harga');
    // $mobil->deskripsi_mobil = $request->input('deskripsi_mobil');
    // $mobil->image = $request->input('tmp_kendaraan');
    // if($file = $request->hasFile('image')) {
    //     $file = $request->file('image');
    //     $extension = $file->getClientOriginalName();
    //     $thumb = Image::make($file->getRealPath())->resize(500, 500, function ($constraint) {
    //         $constraint->aspectRatio(); //maintain image ratio
    //     });
        

    //     $destinationPath = 'images/mobil/';
    //     $file->storeAs($destinationPath, $extension);
    //     $thumb->save($destinationPath.'/thumb_'.$extension);
    //     // $mobil['image'] = $extension;
    //     $mobil['image'] = 'thumb_' . $extension;
    // }
   
    
    // $mobil->save();
        
        
        
    // alihkan halaman ke halaman pegawai
    return redirect('/datakendaraan')->with('toast_success','Data Telah Diupdate');;
}
// method untuk hapus data pegawai
public function hapus($id)
{
    // // menghapus data pegawai berdasarkan id yang dipilih
    // DB::table('blog')->where('id',$id)->delete();
    // $image = 'public/images/blog';
    //     if(File::exists($image)){
    //         File::delete($image);
    //     }
    // // alihkan halaman ke halaman pegawai
    // return redirect('/viewblog')-> with('toast_info', "Data berhasil dihapus!");;

    $mobil = mobil::where('id_mobil', $id);
        // $image = '/image/mobil/'.$mobil->image;
        // if(File::exists($image)){
        //     File::delete($image);
        // }
        $mobil->delete();
        
        return back() -> with('toast_info', "Data berhasil dihapus!");
}
public function show($id){

    return $id;
}

}
