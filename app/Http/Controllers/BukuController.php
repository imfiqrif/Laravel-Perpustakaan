<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Buku;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use Excel;
use RealRashid\SweetAlert\Facades\Alert;

class BukuController extends Controller
{
    public function index()
    {
        $breadcumb['main']  = 'Buku';
        $breadcumb['sub']   = 'Index';

        $databuku = Buku::get();
        return view('buku.index', compact('breadcumb', 'databuku'));
    }

    public function create()
    {
        $breadcumb['main']  = 'Buku';
        $breadcumb['sub']   = 'Create';
        
        return view('buku.create', compact('breadcumb'));
    }

    public function cari()
    {
        $breadcumb['main']  = 'Buku';
        $breadcumb['sub']   = 'Cari';
        
        return view('buku.cari', compact('breadcumb'));
    }

    public function edit($id)
    {
        $breadcumb['main']  = 'Buku';
        $breadcumb['sub']   = 'edit';

        $databuku = Buku::findOrFail($id);
        return view('buku.edit', compact('breadcumb', 'databuku'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|string|max:255',
            'isbn' => 'required|string'
        ]);

        if($request->file('cover')) {
            $file = $request->file('cover');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('cover')->move("images/buku", $fileName);
            $cover = $fileName;
        } else {
            $cover = NULL;
        }

        Buku::create([
                'judul' => $request->get('judul'),
                'isbn' => $request->get('isbn'),
                'pengarang' => $request->get('pengarang'),
                'penerbit' => $request->get('penerbit'),
                'tahun_terbit' => $request->get('tahun_terbit'),
                'jumlah_buku' => $request->get('jumlah_buku'),
                'deskripsi' => $request->get('deskripsi'),
                'lokasi' => $request->get('lokasi'),
            ]);

        return redirect()->route('buku.index');

    }

    public function update(Request $request, $id)
    {
        if($request->file('cover')) {
            $file = $request->file('cover');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('cover')->move("images/buku", $fileName);
            $cover = $fileName;
        } else {
            $cover = NULL;
        }

        Buku::find($id)->update([
             'judul' => $request->get('judul'),
                'isbn' => $request->get('isbn'),
                'pengarang' => $request->get('pengarang'),
                'penerbit' => $request->get('penerbit'),
                'tahun_terbit' => $request->get('tahun_terbit'),
                
                'jumlah_buku' => $request->get('jumlah_buku'),
                'deskripsi' => $request->get('deskripsi'),
                'lokasi' => $request->get('lokasi'),
                ]);

        return redirect()->route('buku.index');
    }

    public function show($id)
    {
        $databuku = Buku::findOrFail($id);

        return view('buku.show', compact('databuku'));
    }

    public function destroy($id)
    {
        Buku::find($id)->delete();
        return redirect()->route('buku.index');
    }
}
