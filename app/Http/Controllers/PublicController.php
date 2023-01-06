<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DashboardController;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('homepage');
    }

    public function infopeluang(){
        return view('infopeluang');
    }

    public function bimbingan(){
        return view('bimbingan');
    }
}