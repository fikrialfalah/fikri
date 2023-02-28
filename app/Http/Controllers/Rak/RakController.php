<?php

namespace App\Http\Controllers\Rak;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang;

class RakController extends Controller
{
    public function index($id)
    {
       $barangs = Barang::Where('category_id', $id)->with('brand','satuan')->get();

       return view('masterbarang.databarang.index', compact('barangs'));
    }
}
