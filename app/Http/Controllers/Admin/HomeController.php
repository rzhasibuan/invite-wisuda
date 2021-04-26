<?php

namespace App\Http\Controllers\Admin;

use App\Mhs;
use App\BukuTamu;
use App\EmailPenerima;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $jmlMhs = Mhs::all()->count();
        $jmlAmbilKupon = BukuTamu::where('status','sudah')->count();
        $jmlHadir = BukuTamu::all()->count();
        $jmlEmail = EmailPenerima::all()->count();
        return view('admin.home',[
            'jmlMhs' => $jmlMhs,
            'jmlKupon' => $jmlAmbilKupon,
            'jmlHadir' => $jmlHadir,
            'jmlEmail' => $jmlEmail,
            'subDashboard' => 'active',
            'title' => 'Dashboard'
        ]);
    }
}
