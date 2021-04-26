<?php

namespace App\Http\Controllers\Admin;

use App\Mhs;
use App\BukuTamu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class BukuTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $bukuTamu = BukuTamu::all();
        return view('admin/bukutamu.index',[
            'data' => $bukuTamu,
            'subBukuTamu' => 'active',
            'title'  => 'Buku tamu'
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $barcode = Crypt::decryptString($request->get('kehadiran'));
            $mahasiswa = Mhs::where("id",$barcode)->count();
            $tamu = BukuTamu::where("id_mhs",$barcode)->count();

                if($mahasiswa == 1){
                    if(!$tamu == 1){
                        $bukuTamu = new BukuTamu;
                        $bukuTamu->kehadiran = "hadir";
                        $bukuTamu->status = "belum";
                        $bukuTamu->id_mhs = $barcode;
                        $bukuTamu->save();
                        return redirect()->route('tamu.index')->with('success',"Buku tamu berhasil di isi");
                    }else{
                        return redirect()->route('tamu.index')->with('info',"Anda sudah mengisi buku tamu $");
                    }
                }
        } catch (DecryptException $e) {
            return redirect()->route('tamu.index')->with('danger','Maaf anda tidak terdaftar sebagai tamu');
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
