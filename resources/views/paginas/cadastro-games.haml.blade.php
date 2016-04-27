@extends('layouts.home')
@section('conteudo_principal')
#cadastro-games
  %form.form-horizontal{:action => "/cadastro-games", :method => "POST", :role => "form"}
    {!! csrf_field() !!}
    .campo_cadastro
      %span Nome
      %input.form-control{:name => "nome", :type => "text"}
    .campo_cadastro.botao
      %button.btn.btn-primary{:type => "submit"}
        %i.fa.fa-btn.fa-user>
        &nbsp Cadastrar Game
    .campo_cadastro
      @if(isset($mensagem))
      =$mensagem
      @endif
@endsection
