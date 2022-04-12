<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;


class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function insert_pemasukan(Request $request){
        $validatedData = $request->validate([
            'ket' => ['required'],
            'tgl' => ['required'],
            'jml' => ['required']
        ],[
            "ket.required" => "keterangan harus diisi",
            "tgl.required" => "tanggal harus diisi",
            "jml.required" => "jumlah harus diisi",
        ]);
        Pemasukan::create([
            "keterangan" => $request->ket,
            "tanggal" => $request->tgl,
            "jumlah" => $request->jml,
        ]);

        return redirect('/masuk')->with('flash_message', 'pemasukan Addedd!'); 
    }

    public function index()
    {
       $data_pemasukan=Pemasukan::all();
       return view('table-pemasukan', ["data_pemasukan"=>$data_pemasukan]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
       $data_pemasukan = Pemasukan::find($id);
       return view('form-edit',['data_pemasukan'=>$data_pemasukan]);
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
        $data_pemasukan=Pemasukan::find($req->id);
        $data_pemasukan->keterangan=$req->ket;
        $data_pemasukan->tanggal=$req->tgl;
        $data_pemasukan->jumlah=$req->jml;
        $data_pemasukan->save();
        return redirect('/tab-masuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus=Pemasukan::find($id);
        $hapus->delete();

        return redirect('/tab-masuk')->with('success', 'Data telah di hapus');
    }
}
