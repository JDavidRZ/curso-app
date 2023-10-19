<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;
use App\Models\Category;

class GamesController extends Controller
{
    //
    public function index(){
        //$videogames = array('Fifa 22', 'NBA 22', 'Mario Kart', 'Super Mario');
        $videogames = Videogame::orderBy('id','desc')->get();
        return view('index',['games'=>$videogames]);
    }
    

    public function create(){
        $categorias = Category::all();
        return view('create',['categorias' =>$categorias]);
    }

    public function help($name_game, $categoria = null){
        $date = now();
        return view('show',['nameVideogame'=>$name_game,
                            'categoryGame'=>$categoria,
                            'fecha'=>$date]);
        
    }

    public function storeVideogame(Request $request){
        $game = new Videogame;
        $game->name = $request->name_game;
        $game->category_id = $request->categoria_id;
        $game->active = 1;
        $game->save();

        return redirect()->route('games');
    }

    public function view($game_id){
        $game = Videogame::find($game_id);
        $categorias = Category::all();
        return view('update',['categorias'=>$categorias,'game'=>$game]);
    }
}
