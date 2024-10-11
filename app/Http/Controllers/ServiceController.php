<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $kode = strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 6));
        return view('landing', compact('kode'));
    }
}
