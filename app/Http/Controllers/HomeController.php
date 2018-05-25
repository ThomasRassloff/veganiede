<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimplyOffice\SdkApi;


class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sdk = new SdkApi('1_15e7tdk08wao8gsw4g8ssoc04skc0o4c44gw04w4sk488888og', '3yygqjselgg0s8ggok8ks0s4o8cg80oss4sskkc8sc0wksc04g');

        //echo $sdk->postApiUsers( "user1", "email@emailland.de", "pw1hjakjhdKJHK" );

        //$sdk->postApiUsers( $data['name'], $data['email'], $data['password'] );

        return view('home');
    }
}
