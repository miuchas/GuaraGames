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
            %button.btn{:type=>"button", "data-toggle"=>"modal", "data-target"=>"#passwordModal"}Esqueci a senha
          .span
            %a.btn{:href=>"/register"}Cadastro
        .custom-buttom-position
          %button.mdl-button.mdl-js-button.mdl-button--fab.mdl-js-ripple-effect.mdl-button--colored.custom-buttom
            %i.material-icons arrow_forward
    .modal.fade#passwordModal{:tabindex=>"-1", :role=>"dialog", "aria-labelledby"=>"passwordModalLabel"}
      .modal-dialog.modal-sm{:role=>"document"}
        .modal-content
          .modal-body
            %form.form-horizontal#troca-senha
              {!! csrf_field() !!}
              %span
                Recuperação de senha
              .mdl-textfield.mdl-js-textfield.mdl-textfield--floating-label.custom-text-field
                %input.mdl-textfield__input{:type=>"email", :id=>"reset-email", :name=>"email"}
                %label.mdl-textfield__label{:for=>"email"}Digite seu email
              #load.hide
                .mdl-spinner.mdl-js-spinner.is-active
              #mensagem.hide

              .custom-buttom-position.button-modal
                %button.mdl-button.mdl-js-button.mdl-button--fab.mdl-js-ripple-effect.mdl-button--colored.custom-buttom#send_button
                  %i.material-icons arrow_forward
