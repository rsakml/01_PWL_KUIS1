<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function barang(){
        
        $barang = Barang::all();
        return view('barang')
                ->with('title','Data Barang')
                ->with('barang',$barang);
        }
}
