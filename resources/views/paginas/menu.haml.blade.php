.container-fluid
  %p.navbar-text.image
    %img{:src=>"images/logo-guara-games-studio.png"}
  %p.navbar-text
    Jogos
  %p.navbar-text
    Contato
  %p.navbar-text.navbar-right.login#login_logout.dropdown-toggle.dropdown{"aria-expanded" => "true", "aria-haspopup" => "true", "data-toggle" => "dropdown", :type => "button"}
    @if (Auth::guest()) Acesso
    @else {{ Auth::user()->name }}
    @endif
    %span.caret
    %ul.dropdown-menu{"aria-labelledby" => "login_logout"}
      %li
        @if (Auth::guest())
        %a{:href => "#"}
          Login
        @else
        %a{:href => "#"}
          Sair
        @endif
