var mensagem = "";

//ajax de envio de senha
$( "#troca-senha" ).submit(function( event ) {
  $("#load").removeClass("hide");
  event.preventDefault();

  $.ajax({
    type: "POST",
    url: "/password/email",
    data:
    {
      _token: $("input[name='_token']").val(),
      email: $("#reset-email").val(),
    },
  })
  .done(function(){
    $("#load").addClass("hide");
    $("#mensagem").removeClass("hide").append("Mensagem enviada com sucesso!");
  })
});

//# sourceMappingURL=custom.js.map
