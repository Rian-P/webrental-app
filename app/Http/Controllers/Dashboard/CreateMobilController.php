<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\mobil;


class CreateMobilController extends Controller
{
    
    public $image;
    public $dimensions;

    public function createmobil()
    {
     
       return view('dashboard.createmobil');
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
        $mobil->harga = $request->input('harga');
        $mobil->deskripsi = $request->input('deskripsi');
       

        

        if($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $thumb = Image::make($file->getRealPath())->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
           

            $destinationPath = 'images/blog/';
            $file->storeAs($destinationPath, $extension);
            $thumb->save($destinationPath.'/thumb_'.$extension);
            $mobil['image'] = $extension;
            $mobil['thumbnail'] = 'thumb_' . $extension;


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
$mobil =  mobil:: find($id);

return view('landing.datakendaraan', [
    'method'=> "PUT",
    'action'=> "/viewblog/edit/{id}'",
    'mobil'=> $mobil
]);
}
// }
// update data pegawai
public function update(Request $request)
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
    $mobil = new mobil;
    $mobil->nama_kendaraan = $request->input('nama_kendaraan');
    $mobil->type = $request->input('type');
    $mobil->nopol = $request->input('nopol');
    $mobil->tahun = $request->input('tahun');
    $mobil->harga = $request->input('harga');
    $mobil->deskripsi = $request->input('deskripsi');

    if($file = $request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalName();
        $thumb = Image::make($file->getRealPath())->resize(500, 500, function ($constraint) {
            $constraint->aspectRatio(); //maintain image ratio
        });
       

        $destinationPath = 'images/blog/';
        $file->storeAs($destinationPath, $extension);
        $thumb->save($destinationPath.'/thumb_'.$extension);
        $mobil['image'] = $extension;
        $mobil['thumbnail'] = 'thumb_' . $extension;
    }
    $mobil->save();
        
        
        
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

    $mobil = mobil::find($id);
        $image = 'storage/image/blog/'.$mobil->image;
        if(File::exists($image)){
            File::delete($image);
        }
        $mobil->delete();
        
        return back() -> with('toast_info', "Data berhasil dihapus!");
}
public function show($id){

    return $id;
}

}
