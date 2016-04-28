<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;

class GeralController extends Controller
{
  public function index(){
    $games = DB::table("games")->select('id', 'Nome')->get();
    // view()->share('games', $games);
    return view('home',['games' => $games]);
  }

  public function administrador(){
    if( Auth::user()->tipousuario == 1 ){ return true; }
    else return false;
  }
}
