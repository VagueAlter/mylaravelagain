<?php

namespace App\Http\Controllers;

use App\Models\Players;
use DB;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        // dd untuk debugging, contoh: dd($players);
        $players = DB::table('player')->get();
        return view('players', ['players' => $players]);
    }
}

