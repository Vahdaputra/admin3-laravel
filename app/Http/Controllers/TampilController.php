<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
class TampilController extends Controller
{
    public function index()
    {
       $jumlah_pemasukan=Pemasukan::sum("jumlah");
       $jumlah_pengeluaran=Pengeluaran::sum("jumlah");
       $total_jumlah=$jumlah_pemasukan-$jumlah_pengeluaran;
       $persen=$total_jumlah/$jumlah_pemasukan*100;
       return view('home',['jumlah_pemasukan'=>$jumlah_pemasukan,
        'jumlah_pengeluaran'=>$jumlah_pengeluaran,
        'total_jumlah'=>$total_jumlah,
        'persen'=>$persen]); 
    }
}
