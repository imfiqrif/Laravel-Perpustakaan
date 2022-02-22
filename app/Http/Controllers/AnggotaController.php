<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Anggota;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class AnggotaController extends Controller
{
    public function index()
    {
        $breadcumb['main']  = 'Anggota';
        $breadcumb['sub']   = 'Index';
        
        $dataanggota = Anggota::get();
        return view('anggota.index', compact('breadcumb', 'dataanggota'));
    }

    public function create()
    {
        $breadcumb['main']  = 'Anggota';
        $breadcumb['sub']   = 'Create';

        return view('anggota.create', compact('breadcumb'));
    }

    public function store(Request $request)
    {
        $count = Anggota::where('npm',$request->input('npm'))->count();

        if($count>0){
            return redirect()->to('anggota');
        }

        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20|unique:anggota'
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggota.index');

    }

    public function show($id)
    {
        $dataanggota = Anggota::findOrFail($id);

        return view('anggota.show', compact('dataanggota'));
    }

    public function cari()
    {
        $breadcumb['main']  = 'Anggota';    
        $breadcumb['sub']   = 'Cari';
        
        return view('anggota.cari', compact('breadcumb'));
    }

    public function edit($id)
    {
        $breadcumb['main']  = 'Anggota';    
        $breadcumb['sub']   = 'Edit';

        $dataanggota = Anggota::findOrFail($id);
        
        return view('anggota.edit', compact('breadcumb', 'dataanggota'));
    }

    public function update(Request $request, $id)
    {
        Anggota::find($id)->update($request->all());
        return redirect()->to('anggota');
    }

    public function destroy($id)
    {
        Anggota::find($id)->delete();
        return redirect()->route('anggota.index');
    }
}
