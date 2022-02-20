<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $breadcumb['main']  = 'Buku';
        $breadcumb['sub']   = 'Index';
        
        return view('buku.index', compact('breadcumb'));
    }

    public function tambah()
    {
        $breadcumb['main']  = 'Buku';
        $breadcumb['sub']   = 'Tambah';
        
        return view('buku.tambah', compact('breadcumb'));
    }

    public function cari()
    {
        $breadcumb['main']  = 'Buku';
        $breadcumb['sub']   = 'Cari';
        
        return view('buku.cari', compact('breadcumb'));
    }

    public function edit()
    {
        $breadcumb['main']  = 'Buku';
        $breadcumb['sub']   = 'edit';
        
        return view('buku.edit', compact('breadcumb'));
    }
}
