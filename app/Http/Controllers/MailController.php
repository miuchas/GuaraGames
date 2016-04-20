<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MailController extends Controller
{
  public function enviaEmail($view, $detalhesEmail){
    Mail::send($view, $detalhesEmail, function ($m)  use ($detalhesEmail){
      $m->to($detalhesEmail['destinatario'],
      $detalhesEmail['remetente'])->subject($detalhesEmail['assunto']);
      //envia cópia oculta para o email abaixo
      if (isset($detalhesEmail['cco']) && $detalhesEmail['cco'] != '')
        $m->bcc($detalhesEmail['cco'], $detalhesEmail['remetente']);
    });
  }

  // $login = $request->login_dominio;
  // $hash = uniqid('', true);
  // $link = 'https://'.$_SERVER["SERVER_NAME"]."/nova-senha/".$login."/".$hash;
  //
  // $view = 'emails.troca_senha';
  //
  // $emails = array(env('MAIL_DEFAULT_TEST'));
  //
  // $contato_admin = CommonController::getContatoAdministrativo($login);
  //
  // $detalhesEmail = array(
  //   'titulo' => 'Acesso ao painel de controle Task',
  //   'assunto' => 'Acesso ao painel de controle Task',
  //   // 'destinatario' => $emails,
  //   'destinatario' => $contato_admin['email'],
  //   'remetente' => 'Task',
  //   'cco' => env('MAIL_DEFAULT_TEST'),
  //   'login' => $login,
  //   'link' => $link,
  //   'nome_contato_admin' => $contato_admin['responsavel'],
  // );



  //layout
//   !!!
// %html
//   %head
//     %meta{:content => "text/html; charset=windows-1252", "http-equiv" => "content-type"}
//   %body{:bgcolor => "#FFFFFF", :text => "#000000", :style => "width:725px; margin: 15px auto; text-align: center; height: auto;"}
//     .moz-forward-container
//       %center{:style => "width:725px; text-align: center; margin: 15px auto;  height: auto;"}
//         %div{:style => "width:725px; height:70px; margin: 15px auto;"}
//           %map#map1{:name => "map1"}
//             %area{:alt => "Facebook", :coords => "473,35,16", :href => "http://www.facebook.com/TaskInternet", :shape => "circle", :target => "_blank", :title => "Facebook"}
//             %area{:alt => "Twitter", :coords => "512,35,17", :href => "http://www.twitter.com/TaskInternet", :shape => "circle", :target => "_blank", :title => "Twitter"}
//             %area{:alt => "Google+", :coords => "551,35,17", :href => "https://plus.google.com/102345354862629805356", :shape => "circle", :target => "_blank", :title => "Google+"}
//             %area{:alt => "Youtube", :coords => "590,36,18", :href => "http://www.youtube.com/TaskInternet", :shape => "circle", :target => "_blank", :title => "Youtube"}
//             %area{:alt => "Blog", :coords => "629,36,17", :href => "http://www.task.com.br/blog", :shape => "circle", :target => "_blank", :title => "Blog"}
//             %area{:alt => "WikiTask", :coords => "667,35,17", :href => "http://wiki.task.com.br", :shape => "circle", :target => "_blank", :title => "WikiTask"}
//             %area{:alt => "Task", :coords => "18,1,168,68", :href => "http://www.task.com.br", :shape => "rect", :target => "_blank", :title => "Task"}
//             %area{:alt => "Task", :coords => "230,28,390,46", :href => "http://www.task.com.br", :shape => "rect", :target => "_blank", :title => "Task"}
//           %img{"moz-do-not-send" => "true", :src => "http://www.task.com.br/images/cadastro/header.png", :style => "border:0px;", :usemap => "#map1"}
//
//           @extends('layouts.email_layout')
//
//         %i
//           %img{"moz-do-not-send" => "true", :src => "http://www.task.com.br/images/cadastro/footer.png", :style => "border:0px;"}
//
//           @section('conteudo_email')
//           %h1{:style=> "font-family:Verdana,Arial; font-size:24; font-weight:600;"}
//             =$titulo
//           .corpo-email{:style=>"text-align: left;"}
//             %span
//               %b Login:
//               =$login
//             %br
//             %span
//               %b Servidor:
//               =$servidor
//             %br
//             %br
//
//             %span
//               %b Alteração do status do servidor:
//             %br
//
//             %span
//               O cliente deseja
//               =$acao
//               o servidor
//             %br
//           @stop

}
