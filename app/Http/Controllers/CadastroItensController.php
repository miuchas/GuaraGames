<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\CadastroItensController;
use App\Http\Requests;
use App\Historico;
use App\Games;
use Auth;
use DB;

class CadastroItensController extends Controller
{
    public function cadastroGames(){
      if( (new GeralController)->administrador() ){ return view('paginas/cadastro-games'); }
      else{ return view('home'); }
    }

    public function cadastroHistoricos(){
      if( (new GeralController)->administrador() ){
        $games = DB::table("games")->select('id', 'Nome')->get();
        return view('paginas/cadastro-historicos',['games' => $games]);
      }
      else{ return view('home'); }
    }

    public function cadastraGame(Request $request){
      //verifica que o registro ja existe no banco
      $game = DB::table("games")->select('Nome')->where('Nome', $request->nome)->get();
      //salva o registro no banco
      if(empty($game)){
        $games = new Games;
        $games->Nome = $request->nome;
        $games->save();
        $mensagem = "O game ".$request->nome." foi adicionado ao banco.";
      }
      else{ $mensagem = "O game ".$request->nome." já existe no banco."; }

      return view('paginas/cadastro-games',['mensagem' => $mensagem]);
    }

    public function cadastraHistorico(Request $request){
      $historico = new Historico;
      $historico->usuario = Auth::user()->name;
      $historico->game = $request->game;
      $historico->keyscriadas = $request->numerokeys;
      $historico->save();
    }

    public function compraGame(Request $request){
      //digita key
      //cria key na hora
    }
}
