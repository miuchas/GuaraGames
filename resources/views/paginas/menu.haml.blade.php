.container-fluid
  %p.navbar-text.image
    %img{:src=>"images/logo-guara-games-studio.png"}
  %p.navbar-text
    Jogos
  %p.navbar-text
    Contato
  @if (Auth::guest())
  %p.navbar-text.navbar-right.cadastro
    %a{:href => "/register" }Cadastro
  %p.navbar-text.navbar-right.login#login_logout.dropdown-toggle.dropdown{"aria-expanded" => "true", "aria-haspopup" => "true", "data-toggle" => "dropdown"}
    Acesso
    %span.caret
    %ul.dropdown-menu{"aria-labelledby" => "login_logout"}
      %li
        %form{:role=>"form", :method=>"POST", :action=>"/login"}
          {!! csrf_field() !!}
          %input{:type=>"text", :name=>"email", :placeholder=>"EMAIL"}
          %input{:type=>"password", :name=>"password", :placeholder=>"SENHA"}
          %button.btn ENTRAR
  @else
  %p.navbar-text.navbar-right.login#login_logout.dropdown-toggle.dropdown{"aria-expanded" => "true", "aria-haspopup" => "true", "data-toggle" => "dropdown"}
    {{ Auth::user()->name }}
    %span.caret
    %ul.dropdown-menu{"aria-labelledby" => "login_logout"}
      %li
        %a{:href => "/logout"}
          Sair
  @endif
