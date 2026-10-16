<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function form()
    {
        return view('laporan.form');
    }

    public function konfirmasi(Request $request)
    {
        $data = [
            "nama" => $request->nama,
            "lokasi" => $request->lokasi,
            "tinggi" => $request->tinggi
        ];

        return view('laporan.konfirmasi', [
    'data' => $data
]);
    }

    public function daftar()
    {
        $laporan = [
            [
                "nama" => "jasmine",
                "lokasi" => "Dayeuhkolot",
                "tinggi" => 20
            ],
            [
                "nama" => "mersiha",
                "lokasi" => "Baleendah",
                "tinggi" => 50
            ],
            [
                "nama" => "laurelyn",
                "lokasi" => "Bojongsoang",
                "tinggi" => 90
            ]
        ];

        return view('laporan.daftar', [
    'laporan' => $laporan
]);
    }
}