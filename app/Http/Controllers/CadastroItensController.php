<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Historico;
use App\Games;

class CadastroItensController extends Controller
{
    public function cadastraGame(Request $request){
      $games = new Games;
      $games->Nome = $request->nome;
      $games->save();
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
