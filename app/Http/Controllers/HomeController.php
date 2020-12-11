<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use App\Models\Banners;
use App\Models\laters;
use App\Models\blogs;
use App\Models\Categorysliders;
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

    public function showCategory(){
        /*$categories=DB::table('categories')->get();
        dd($categories);*/
       // print_r(categories::all());die;
      /*$data['products']=products::orderBy('category_id', 'ASC')->get();
       $data['Category']=categories::orderBy('id', 'ASC')->paginate(5);*/
       $products=Products::all();
       $categories=Categories::all();

        return view('product.index' ,compact('products','categories'));

    }

    public function bannerView(){
        $banners=Banners::all();
        return view('product.banner' ,compact('banners'));
    }
    public function laterView(){
        $laters=laters::all();
        return view('product.laters' ,compact('laters'));
    }
    public function blogView(){
        $blogs=blogs::all();

        return view('product.blog' ,compact('blogs'));
    }
}
