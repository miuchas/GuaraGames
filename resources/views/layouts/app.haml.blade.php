!!!
%html{:lang => "en"}
  %head
    %meta{:charset => "utf-8"}
    %meta{:content => "IE=edge", "http-equiv" => "X-UA-Compatible"}
    %meta{:content => "width=device-width, initial-scale=1", :name => "viewport"}
    %title Laravel
    / Fonts
    %link{:href => "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css", :rel => "stylesheet", :type => "text/css"}/
    %link{:href => "https://fonts.googleapis.com/css?family=Lato:100,300,400,700", :rel => "stylesheet", :type => "text/css"}/
    / Styles
    %link{:href => "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css", :rel => "stylesheet"}/
  %body
    %p
      %link{:href => "@{{ elixir('css/app.css') }}", :rel => "stylesheet"}
      :css
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    %nav.navbar.navbar-default.navbar-static-top
      .container
        .navbar-header
          / Collapsed Hamburger
          %button.navbar-toggle.collapsed{"data-target" => "#app-navbar-collapse", "data-toggle" => "collapse", :type => "button"}
            %span.sr-only Toggle Navigation
            %span.icon-bar
            %span.icon-bar
            %span.icon-bar
          / Branding Image
          %a.navbar-brand
            Laravel
        #app-navbar-collapse.collapse.navbar-collapse
          / Left Side Of Navbar
          %ul.nav.navbar-nav
            %li
              %a{:href => "@{{ url('/home') }}"} Home
          / Right Side Of Navbar
          %ul.nav.navbar-nav.navbar-right
            @if (Auth::guest())
            %li
              %a{:href => "@{{ url('/login') }}"} Login
            %li
              %a{:href => "@{{ url('/register') }}"} Register
            @else
            %li.dropdown
              %a.dropdown-toggle{"aria-expanded" => "false", "data-toggle" => "dropdown", :href => "#", :role => "button"}
                {{ Auth::user()->name }}
                %span.caret
              %ul.dropdown-menu{:role => "menu"}
                %li
                  %a{:href => "@{{ url('/logout') }}"}
                    %i.fa.fa-btn.fa-sign-out>
                    Logout
            @endif
    @yield('content')
    / JavaScripts
    %script{:src => "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"}
    %script{:src => "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"}
    %script{:src => "@{{ elixir('js/app.js') }}"}
