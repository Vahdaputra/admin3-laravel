<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;

class PengeluaranController extends Controller
{
    public function insert_pengeluaran(Request $request){
        $validatedData = $request->validate([
            'ket' => ['required'],
            'tgl' => ['required'],
            'jml' => ['required']
        ],[
            "ket.required" => "keterangan harus diisi",
            "tgl.required" => "tanggal harus diisi",
            "jml.required" => "jumlah harus diisi",
        ]);
        Pengeluaran::create([
            "keterangan" => $request->ket,
            "tanggal" => $request->tgl,
            "jumlah" => $request->jml,
        ]);

        return redirect('/keluar')->with('flash_message', 'Pengeluaran Addedd!'); 
    }
    public function index()
    {
       $data_pengeluaran=Pengeluaran::all();
       return view('table-pengeluaran', ["data_pengeluaran"=>$data_pengeluaran]); 
    }


    public function destroy($id)
    {
        $hapus=Pengeluaran::find($id);
        $hapus->delete();

        return redirect('/tab-keluar')->with('success', 'Data telah di hapus');
    }

    public function edit($id)
    {
       $data_pengeluaran = Pengeluaran::find($id);
       return view('form-edit-keluar',['data_pengeluaran'=>$data_pengeluaran]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $data_pengeluaran=Pengeluaran::find($req->id);
        $data_pengeluaran->keterangan=$req->ket;
        $data_pengeluaran->tanggal=$req->tgl;
        $data_pengeluaran->jumlah=$req->jml;
        $data_pengeluaran->save();
        return redirect('/tab-keluar');
    }

}

