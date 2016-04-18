!!!
%html
  %head
    %title Laravel
    %link{:href => "https://fonts.googleapis.com/css?family=Lato:100", :rel => "stylesheet", :type => "text/css"}
    %link{:href => "css/app.css", :rel => "stylesheet", :type => "text/css"}

  %body
    .container
      .content
        .title Laravel 5
        -if(isset($seriais))
          -foreach ($seriais as $index => $serial)
            %b= $serial
            %br
        %a.btn.btn-primary{:href =>"/logout", :role => "button"} Sair
