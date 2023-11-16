<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PingPongControleur extends Controller
{
    public function ping()
    {
        return view('ping', ["pingpong"=>"pong"]);
    }

    public function pong()
    {
        return view('ping', ["pingpong"=>"ping"]);
    }
}
