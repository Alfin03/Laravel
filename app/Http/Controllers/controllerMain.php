<?php
 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\data;

class controllerMain extends Controller
{
    function simpan(Request $req){

    	$pegawai = new data;
        $pegawai->nama=$req->nama;
        $pegawai->ttl=$req->ttl;
        $pegawai->email=$req->email;
        $pegawai->pendidikan=$req->pendidikan;
        $pegawai->komentar=$req->text;
        $pegawai->save();
        return redirect('hubungi');
        
    }
}