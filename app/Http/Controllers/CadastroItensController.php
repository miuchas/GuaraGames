<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Historico;
use App\Games;
use DB;

class CadastroItensController extends Controller
{

    public function cadastroGames(){
      return view('paginas/cadastro-games');
    }

    public function cadastraGame(Request $request){
      $game = DB::table("games")->select('*')->where('Nome', $request->nome)->get();

      if($game==""){
        $games = new Games;
        $games->Nome = $request->nome;
        $games->save();

        $mensagem = "O game ".$request->nome." foi adicionado ao banco.";
        return view('paginas/cadastro-games',['mensagem' => $mensagem]);
      }
      else{
        $mensagem = "O game ".$request->nome." já existe no banco.";
        return view('paginas/cadastro-games',['mensagem' => $mensagem]);
      }
    }

    public function cadastraHistorico(Request $request){
      $historico = new Historico;
      $historico->usuario = $request->usuario;
      $historico->game = $request->game;
      $historico->keyscriadas = $request->keyscriadas;
      $historico->save();
    }

    public function compraGame(Request $request){
      //digita key
      //cria key na hora
    }
}
