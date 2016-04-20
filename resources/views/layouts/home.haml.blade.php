%html
  %head
    %title Guara Games Studio

    %meta{:charset => "utf-8"}
    %meta{:name => "description", :content => "Guara Games Studio"}
    %meta{:name => "keywords", :content => "Guara Games Studio"}
    %meta{name: "viewport", content: "width=device-width, initial-scale=1.0"}
    %meta{"http-equiv" => "X-UA-Compatible", "content" => "IE=edge"}

    //custom css
    %link{:href => "/css/app.css", :rel => "stylesheet", :type => "text/css"}
    %link{:href => "/fonts/font-awesome/css/font-awesome.min.css", :rel => "stylesheet", :type => "text/css"}

    //custom js
    %script{:src => "/js/jquery.min.js", :defer => "defer", :type => "text/javascript"}
    %script{:src => "/js/bootstrap.js", :defer => "defer", :type => "text/javascript"}
    -# %script{:src => "/js/vendor.js", :defer => "defer", :type => "text/javascript"}

    %body
      %nav.navbar.navbar-default.navbar-fixed-top#menu
        @include('paginas/menu')
      .col-xs-12#corpo
        .row
          @yield('conteudo_principal')
