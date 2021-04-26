<?php

namespace App\Http\Controllers\Admin;

use App\EmailPenerima;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailPenerimaController extends Controller
{
    //
    public function index(){
        $email = EmailPenerima::all();
        return view('admin/mail.index',[
            'title' => 'Daftar Email',
            'data' => $email
        ]);
    }
}
