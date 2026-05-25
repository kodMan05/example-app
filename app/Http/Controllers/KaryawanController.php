<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class KaryawanController extends Controller
{

    public function index()
    { 
        $karyawan = DB::table('karyawan')->get();
        return view('index', ['karyawan' => $karyawan]);
    }

    
}
