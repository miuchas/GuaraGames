%section#contato
  .overlay
    .close-button
    %form#form
      %h1 Fale com a gente
      %label{:for => "name"}Nome:
      %input#name{:type => "text"}
      %br
      %label{:for => "email"} Email:
      %input{:type =>"email", :name => "", :id => "email"}
      %br
      %label{:for => "msg"} Mensagem:
      %textarea{:name => "", :id => "msg", :cols => "20", :rows => "3"}
      %br
      %button#send.btn-send Enviar
  %a{:href => "#"}
    .circle
      .envelope-top
      .envelope
  #midias-sociais.mobile
    @include('paginas/midias-sociais')
