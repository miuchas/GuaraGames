@extends('layouts.home')
@section('conteudo_principal')
#cadastro-games
  %form.form-horizontal{:action => "/cadastro-historicos", :method => "POST", :role => "form"}
    {!! csrf_field() !!}
    .campo_cadastro
      %span Game
      %select.form-control{:name => "game"}
        -if(isset($games))
          -foreach ($games as $game)
            %option{:value=>$game->id}
              = $game->Nome
    .campo_cadastro
      %span Numero de keys a serem criadas
      %input.form-control{:name => "numerokeys", :type => "text"}

    .campo_cadastro.botao
      %button.btn.btn-primary{:type => "submit"}
        %i.fa.fa-btn.fa-user
        &nbsp Cadastrar Game
    .campo_cadastro
      -if(isset($mensagem))
        =$mensagem
@endsection
