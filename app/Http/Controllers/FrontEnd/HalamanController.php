<?php

namespace App\Http\Controllers\FrontEnd;

use App\Mhs;
use App\EmailPenerima;
use App\Mail\UndanganMail;
use Illuminate\Http\Request;
use App\Mail\UndanganMarkdown;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;

class HalamanController extends Controller
{
    //
    public function index(){

        $mhs = Mhs::all();

        // $row =$mhs->row();
        return view('frontend/index',[
            'mhs' =>$mhs
        ]);
    }

    public function cari(Request $request){
        // script work
        $mhs = Mhs::where("npm",$request->get('cari'))->get();
        if($mhs->isEmpty()){
            return view('frontend/index',[
                'mhs' => $mhs
            ]);
        }else{
            return view('frontend/index',[
                'mhs' => $mhs
            ]);
        }

        // testing script
        // $encrypted = Crypt::encryptString($mhs[0]->id);
        // $decrypted = Crypt::decryptString($encrypted);
        // echo "hasil encrypted:" .$encrypted;
        // echo "hasil decrypted:" .$decrypted;

    }

    public function undangan(Request $request){
        $mhs = Mhs::findOrFail($request->get('id'));
        $barcode = Crypt::encryptString($mhs->id);
        $undangan = New UndanganMarkdown();
        
        $undangan->view('emailsmarkdown.undangan',[
            'data' => $mhs,
            'barcode' => $barcode
            ]);

        $emailsend = new EmailPenerima;
        $emailsend->penerima = $mhs->nama;
        $emailsend->email_penerima = $request->get('email');
        $emailsend->barcode = $barcode = Crypt::encryptString($mhs->id);
        if($emailsend->save()){
            $mail = Mail::to($request->get('email'))->send($undangan);
            return redirect('/')->with('success','Undangan Telah kami kirim ke email anda silahkan cek email anda');
        }
    }


}