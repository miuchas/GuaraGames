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
        .modal-dialog{:role=>"document"}
          .modal-content
            .modal-header
              %button.close{:type=>"button", "data-dismiss"=>"modal", "aria-label"=>"Close"}
                %span{"aria-hidden"=>"true"}&times
              %h4.modal-title#passwordModalLabel Modal title
            .modal-body
              ...
            .modal-footer
              %button.btn.btn-default{:type=>"button", "data-dismiss"=>"modal"} Close
              %button.btn.btn-primary{:type=>"button"} Save changes
