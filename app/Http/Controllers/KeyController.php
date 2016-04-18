<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KeyController extends Controller
{
  // public function __construct(){ $this->middleware('auth'); }

  public function geraKey(){
    $numerocaracteres = 15;
    $numeroSeriais = 4;

    $seriais = [];
    for ($i = 0 ; $i < $numeroSeriais ; $i++) {
      $serial = strtoupper(str_random($numerocaracteres));
      $seriais[] = $serial;
    }
    return view('home')->with('seriais', $seriais);
  }
}
