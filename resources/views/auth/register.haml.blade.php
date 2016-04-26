@extends('layouts.home')
@section('conteudo_principal')
#registro
  %form.form-horizontal{:action => "/register", :method => "POST", :role => "form"}
    {!! csrf_field() !!}
    .campo_cadastro
      %span Nome
      %input.form-control{:name => "name", :type => "text"}
    .campo_cadastro
      %span Login
      %input.form-control{:name => "login", :type => "text"}
    .campo_cadastro
      %span Data de Nascimento
      %input.form-control{:name => "datanascimento", :type => "text"}
    .campo_cadastro
      %span E-Mail
      %input.form-control{:name => "email", :type => "email"}
    .campo_cadastro
      %span telefone
      %input.form-control{:name => "telefone", :type => "text"}
    .campo_cadastro
      %span Senha
      %input.form-control{:name => "password", :type => "password"}
    .campo_cadastro
      %span Confirma Senha
      %input.form-control{:name => "password_confirmation", :type => "password"}
    .campo_cadastro.botao
      %button.btn.btn-primary{:type => "submit"}
        %i.fa.fa-btn.fa-user>
        &nbsp Registrar
@endsection
