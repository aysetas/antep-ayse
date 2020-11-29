<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showUsers()
    {
    $users=DB::table('users')->get();
    return view('hakkimda',compact('users'));
    }
    public function showProducts()
    {
    $products=DB::table('products')->get();
    return view('urunler',compact('products'));
    }
    public function showUSerProducts()
    {
    $user_produsts=DB::table('user_produsts')
    ->join('users','user_produsts.user_id', '=' ,'users.id')
    ->join('products','user_produsts.user_id','=','products_id')
    ->select('user_produsts.*','users.name','products.pname','products.price')
    ->get();
    //dd($user_produsts);
    return view('userProduct',compact('user_produsts'));
    }
}
