<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Anggota;
use DB;

class AnggotaController extends Controller
{
    public function index()
    {
        $breadcumb['main']  = 'Anggota';
        $breadcumb['sub']   = 'Index';
        
        $breadcumb = Anggota::get();
        return view('anggota.index', compact('breadcumb'));
    }

    public function tambah()
    {
        $breadcumb['main']  = 'Anggota';
        $breadcumb['sub']   = 'Tambah';

        return view('anggota.tambah', compact('breadcumb'));
    }

    public function cari()
    {
        $breadcumb['main']  = 'Anggota';    
        $breadcumb['sub']   = 'Cari';
        
        return view('anggota.cari', compact('breadcumb'));
    }

    public function edit()
    {
        $breadcumb['main']  = 'Anggota';    
        $breadcumb['sub']   = 'Edit';
        
        return view('anggota.edit', compact('breadcumb'));
    }
}
