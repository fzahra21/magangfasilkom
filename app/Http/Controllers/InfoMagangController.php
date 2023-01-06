<?php

namespace App\Http\Controllers;

use App\Models\InfoPeluang;
use Illuminate\Http\Request;

class InfoMagangController extends Controller
{
    public function index(){
        $infopeluang = InfoPeluang::all();
        return view('infopeluang', ['infopeluang' => $infopeluang]);
    }
}