.container-fluid
  %p.navbar-text.image
    %img{:src=>"images/logo-guara-games-studio.png"}
  %p.navbar-text
    Jogos
  %p.navbar-text
    Contato
  %p.navbar-text.navbar-right.login
    @if (Auth::guest())
    Acesso
    @else
    {{ Auth::user()->name }}
    @endif
