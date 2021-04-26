<?php

namespace App\Http\Controllers\Admin;

use App\Mhs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TesController extends Controller
{
    //
    public function index(){

        $mhs = Mhs::all();
        $json = response()->json(['data'=> $mhs]);
        return view('tes.index',['dt' => $json]);

    }
}
