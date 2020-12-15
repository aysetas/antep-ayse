<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use App\Models\Users;

class smsController extends Controller
{
    public function index(){

        return view('auth.login');
    }
    public function passwordView(){

        return view('auth.forgotPassword');
    }

    public function sendSms(){
        $basic  = new \Nexmo\Client\Credentials\Basic('bbb9c1e5', 'XFgrd0rBghjXs04s');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' => '905345260054',
            'from' => 'Vonage APIs',
            'text' => 'Merhaba ,sifreniz yenilendi.. yeni sifreniz:msdbnrt'
        ]);
        return redirect('/forgotPassword')->with('success', 'SMS gönderimi başarılı');
    }
}
