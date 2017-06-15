<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;

class ProveedorController extends Controller
{
    public function view($id){

    	$proveedor = Proveedor::find($id);
    	//dd($proveedor);


    	return view('proveedores', ['prov' => $proveedor]);
    }
}
