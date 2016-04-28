<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GeralController extends Controller
{
  public function index(){
    return view('home')->with('seriais', $seriais);
  }
}
