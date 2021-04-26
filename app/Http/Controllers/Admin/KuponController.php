<?php

namespace App\Http\Controllers\Admin;

use App\Mhs;
use App\BukuTamu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class KuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mhs = BukuTamu::where('status','sudah')->get();
        return view('admin/kupon.index',[
            'data'=>$mhs,
            'subKupon' => 'active',
            'title' => 'Kupon makanan'
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
        $validasi = \Validator::make($request->all(), [
            "barcode" => "required"
        ])->validate();
        // $barcode = Crypt::decryptString($request->get('barcode'));

        // dd($barcode);
        try {
            $barcode = Crypt::decryptString($request->get('barcode'));
            $mhs = BukuTamu::where('id_mhs',$barcode)->get();

            // dd($mhs->isEmpty());
            if(!$mhs->isEmpty()){
                if($mhs[0]->status == "belum"){
                    return redirect()->route('kupon.edit',[$request->get('barcode')]);
                }else{
                    return  redirect()->route('kupon.index')->with('info','Anda sudah memakai kupon ini !!');
                }
            }else{
                 return  redirect()->route('tamu.index')->with('info','Anda belum melakukan absensi terlebih dahulu!!');
            }
        } catch (DecryptException $e) {
                return  redirect()->route('kupon.index')->with('danger','Kupon anda tidak terdaftar !!');
                // echo $e->getMessage();
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

        $barcode = Crypt::decryptString($id);
        $mhs = Mhs::findOrFail($barcode);
        return view('admin/kupon.edit',['id'=>$mhs]);
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
        $buku = BukuTamu::where('id_mhs',$id)->get()->first();
        $mhs = BukuTamu::findOrFail($buku->id);
        $mhs->status = "sudah";
        $mhs->save();
        // dd($mhs);
        return redirect()->route('kupon.index')->with('success','Kupon berhasil dipakai');
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
