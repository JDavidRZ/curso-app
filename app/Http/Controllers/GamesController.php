<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    //
    public function index(){
        $videogames = array('Fifa 22', 'NBA 22', 'Mario Kart', 'Super Mario');
        return view('index',['games'=>$videogames]);
    }
    

    public function create(){
        return view('create');
    }

    public function help($name_game, $categoria = null){
        $date = now();
        return view('show',['nameVideogame'=>$name_game,
                            'categoryGame'=>$categoria,
                            'fecha'=>$date]);
        
    }
}
