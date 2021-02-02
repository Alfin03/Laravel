<?php
 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\tabel_pegawai;

class controllerMain extends Controller
{
    function simpan(Request $req){

    	$pegawai = new tabel_pegawai;
        $pegawai->nama=$req->name;
        $pegawai->tempat_tanggal_lahir=$req->Ttl;
        $pegawai->alamat=$req->Alamat;
        $pegawai->kota=$req->Kota;
        $pegawai->jenis_kelamin=$req->Radio;
        $pegawai->kewarganegaraan=$req->Radio1;
        $pegawai->pendidikan=$req->cb;
        $pegawai->golongan_darah=$req->cb1;
        $pegawai->skill=$req->Skill;
        $pegawai->hobby=$req->Skill1;
        $pegawai->pengalaman=$req->text;
        $pegawai->save();
        return redirect('berhasil');
        
    }
}