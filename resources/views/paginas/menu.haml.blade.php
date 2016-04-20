.container-fluid
  %p.navbar-text.image
    %img{:src=>"images/logo-guara-games-studio.png"}
  %p.navbar-text
    Jogos
  %p.navbar-text
    Contato
  @if (Auth::guest())
  %p.navbar-text.navbar-right
    %a{:href => "@{{ url('/register') }}"} Register
    Cadastro
  %p.navbar-text.navbar-right.login#login_logout.dropdown-toggle.dropdown{"aria-expanded" => "true", "aria-haspopup" => "true", "data-toggle" => "dropdown", :type => "button"}
    -# %a{:href => "@{{ url('/login') }}"} Login
    Acesso
    %span.caret
    %ul.dropdown-menu{"aria-labelledby" => "login_logout"}
      %li
        %a{:href => "#"}
          Login
        %a{:href => "#"}
          Senha
  @else
  %p.navbar-text.navbar-right.login#login_logout.dropdown-toggle.dropdown{"aria-expanded" => "true", "aria-haspopup" => "true", "data-toggle" => "dropdown", :type => "button"}
    {{ Auth::user()->name }}
    %span.caret
    %ul.dropdown-menu{"aria-labelledby" => "login_logout"}
      %li
        %a{:href => "/logout"}
          Sair
  @endif
