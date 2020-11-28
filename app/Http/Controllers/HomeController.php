<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showView()
    {
    $name='Ayse';
    $job='Bilgisayar Mühendisi';
    $city='Diyarbakir';
    return view('hakkimda',compact('name','job','city'));
    }
}
