<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

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

  // public function emailConfirmacaoCadastro(Request $request){
  public function emailConfirmacaoCadastro($login, $nome, $email){
    $view = 'emails.confirmacao_cadastro';

    // $login = $request->login;
    // $nome = $request->nome;
    // $email = $request->email;

    $detalhesEmail = array(
      'titulo' => 'Confirmação de Cadastro Guara Games Studio',
      'assunto' => 'Confirmação de Cadastro Guara Games Studio',
      // 'destinatario' => $emails,
      'destinatario' => $email,
      'remetente' => 'Guara Games Studio',
      'cco' => 'phelipeevangelistasimimdiniz@gmail.com',
      'login' => $login,
      // 'link' => $link,
      'nome_contato_admin' => $nome,
      'nome' => $nome,
    );
    MailController::enviaEmail($view, $detalhesEmail);
  }
}
