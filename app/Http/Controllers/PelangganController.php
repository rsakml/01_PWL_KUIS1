<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function pelanggan(){
        
        $pelanggan = Pelanggan::all();
        return view('pelanggan')
                ->with('title','Data Pelanggan')
                ->with('pelanggan',$pelanggan);
        }
}
