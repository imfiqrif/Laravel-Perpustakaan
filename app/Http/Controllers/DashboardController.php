<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $breadcumb['main']  = 'Dashboard';
        $breadcumb['sub']   = 'Index';
        
        return view('dashboard.index', compact('breadcumb'));
    }
}
