<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterBarangController extends Controller
{
    public function index()
    {
        return view('masterbarang.index');
    }
    public function create()
    {
        return view('masterbarang.create');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    }
    public function show()
    {
        return view('masterbarang.stock.show');
    }
    public function restock                                                                                                  ()
    {
        return view('masterbarang.stock.restock');
    }
}
