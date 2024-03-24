<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index(){
        $data["nama"]="Nicholas";
        $data["asal"]="Bekasi";
        return view('latihan1', $data);
    }

    public function method2(){
        $data['title'] = 'Daftar Mahasiswa';
        $data['daf_mhs'] = array(
            array("nama" => "Nicholas", "asal" => "Bekasi"),
            array("nama" => "Rizki", "asal" => "Cilegon"),
            array("nama" => "Fauzan", "asal" => "Jakarta")
        );
        return view('latihan2', $data);
    }
}
