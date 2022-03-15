<?php

namespace App\Http\Controllers;
use App\Models\Supplier;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier(){
        $supplier = Supplier::paginate(5);
    
            return view('supplier')
                    ->with('title', 'Data Supplier')
                    ->with('supplier', $supplier);
        }
}
