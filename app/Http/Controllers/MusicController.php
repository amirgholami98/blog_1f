<?php

namespace App\Http\Controllers;

use App\music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index(){
        $musices = music::all();
        return view('music.index', ['musices' => $musices]);
    }

    public function show($id){
        $music = music::find($id);
        return view('music.show', ['music' => $music]);
    }
}
