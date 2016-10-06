%section#contato
  .overlay
    .close-button
    %form#form
      %h1 Fale conosco
      .col-xs-4
        %label{:for => "name"}Nome:
        %label{:for => "email"} Email:
        %label{:for => "msg"} Mensagem:
      .col-xs-8
        %input#name{:type => "text"}
        %input{:type =>"email", :name => "", :id => "email"}
        %textarea{:name => "", :id => "msg", :cols => "20", :rows => "3"}
        %button#send.btn-send Enviar
  %a{:href => "#"}
    .circle
      .envelope-top
      .envelope
  #midias-sociais.mobile
    @include('paginas/midias-sociais')
