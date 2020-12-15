<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class smsController extends Controller
{
    public function index(){

        return view('auth.login');
    }
    public function passwordView(){

        return view('auth.forgotPassword');
    }

    public function sendSms(Request $request){

        $phone=$request->get('phone');
        $password=mt_rand(100000,999999);
        $new_password=Hash::make($password);

        if (Users::where('phone', '=', $phone)->count() > 0) {
        $basic  = new \Nexmo\Client\Credentials\Basic('bbb9c1e5', 'XFgrd0rBghjXs04s');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' => $phone,
            'from' => 'Vonage APIs',
            'text' => 'Merhaba ,sifreniz yenilendi.. yeni sifreniz:'.$password
        ]);
        Users::where('phone',$phone)
        ->update(['password'=>$new_password]);
        return redirect('/forgotPassword')->with('success', 'SMS gönderimi başarılı');

        }
    }
}
