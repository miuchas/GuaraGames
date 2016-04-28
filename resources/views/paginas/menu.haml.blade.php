.container-fluid
  .navbar-header
    %button.navbar-toggle.collapsed{"aria-expanded" => "false", "data-target" => "#menu_principal", "data-toggle" => "collapse", :type => "button"}
      %span.sr-only Toggle navigation
      %span.icon-bar
      %span.icon-bar
      %span.icon-bar
    %a.navbar-brand{:href => "#"}
      %img{:src=>"images/logo-guara-games-studio.png"}

  .collapse.navbar-collapse#menu_principal
    %ul.nav.navbar-nav
      %li.dropdown
        %a.dropdown-toggle{"aria-expanded" => "false", "aria-haspopup" => "true", "data-toggle" => "dropdown", :href => "#", :role => "button"}
          Jogos
          %span.caret
        %ul.dropdown-menu
          -foreach ($games as $game)
            %li
              %a{href:"#"}= $game->Nome
      %li.contato
        %a{href:"#contato"} Contato

    %ul.nav.navbar-nav.navbar-right
      @if (Auth::guest())
      %li.acesso.dropdown
        %a.dropdown-toggle{"aria-expanded" => "false", "aria-haspopup" => "true", "data-toggle" => "dropdown", :href => "#", :role => "button"}
          Acesso
          %span.caret
        %ul.dropdown-menu
          %li
            %form{:role=>"form", :method=>"POST", :action=>"/login"}
              {!! csrf_field() !!}
              %input{:type=>"text", :name=>"email", :placeholder=>"EMAIL"}
              %input{:type=>"password", :name=>"password", :placeholder=>"SENHA"}
              %button.btn ENTRAR
      %li.cadastro
        %a{:href => "/register"} Cadastro
      @else
      %li.acesso.dropdown
        %a.dropdown-toggle{"aria-expanded" => "false", "aria-haspopup" => "true", "data-toggle" => "dropdown", :href => "#", :role => "button"}
          {{ Auth::user()->name }}
          %span.caret
        %ul.dropdown-menu
          @if( Auth::user()->tipousuario == 1 )
          %li
            %a{:href => "/cadastro-games"}
              Cadastrar Games
          %li
            %a{:href => "/gerador-de-seriais"}
              Gerar Seriais
          @endif
          %li
            %a{:href => "/logout"}
              Sair
      @endif
