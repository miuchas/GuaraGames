%html
  %head
    %title Guara Games Studio

    %meta{:charset => "utf-8"}
    %meta{:name => "description", :content => "Guara Games Studio"}
    %meta{:name => "keywords", :content => "Guara Games Studio"}
    %meta{name: "viewport", content: "width=device-width, initial-scale=1.0"}
    %meta{"http-equiv" => "X-UA-Compatible", "content" => "IE=edge"}

    //custom css
    %link{:href => "css/app.css", :rel => "stylesheet", :type => "text/css"}
    %link{:href => "fonts/font-awesome/css/font-awesome.min.css", :rel => "stylesheet", :type => "text/css"}

    //custom js
    %script{:src => "scripts/libs.js", :defer => "defer", :type => "text/javascript"}
    %script{:src => "scripts/custom.js", :defer => "defer", :type => "text/javascript"}

    %link{:href => "https://fonts.googleapis.com/icon?family=Material+Icons", :rel => "stylesheet", :type => "text/css"}
    %link{:href => "https://code.getmdl.io/1.1.3/material.indigo-pink.min.css", :rel => "stylesheet", :type => "text/css"}
    %script{:src => "https://code.getmdl.io/1.1.3/material.min.js", :defer => "defer", :type => "text/javascript"}

    %body
      #menu
        @include('paginas/menu')
      #corpo
        @yield('conteudo_principal')
      #loading
        @include('paginas/load')
      #rodape
        -# to sem ideia ainda
