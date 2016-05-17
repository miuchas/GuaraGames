#acesso.mdl-grid
  .mdl-cell.mdl-cell--4-offset.centraliza
    .box
      %form{:role=>"form", :method=>"POST", :action=>"/login"}
        {!! csrf_field() !!}
        .img
          %img{:src=>"images/Logo_GuaraGameStudio_500px_orange.png"}
        .mdl-textfield.mdl-js-textfield.mdl-textfield--floating-label.custom-text-field
          %input.mdl-textfield__input{:type=>"text", :id=>"email", :name=>"email"}
          %label.mdl-textfield__label{:for=>"email"}EMAIL
        .mdl-textfield.mdl-js-textfield.mdl-textfield--floating-label.custom-text-field
          %input.mdl-textfield__input{:type=>"password", :id=>"password", :name=>"password"}
          %label.mdl-textfield__label{:for=>"password"}SENHA
        .links
          .span
            %a{:href=>"/register"}Esqueci a senha
          .span
            &nbsp&nbsp&nbsp
          .span
            %a{:href=>"/register"}Cadastro
        .custom-buttom-position
          %button.mdl-button.mdl-js-button.mdl-button--fab.mdl-js-ripple-effect.mdl-button--colored.custom-buttom
            %i.material-icons arrow_forward
