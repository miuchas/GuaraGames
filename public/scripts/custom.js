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

$(".main").onepage_scroll();

var $overlay=$('.overlay'),
    $trigger=$('.circle');

$trigger.click(function(){
  $overlay.addClass('open');
  $trigger.addClass('open');
})

$('.close-button').click(function(){
  $overlay.removeClass('open');
  $trigger.removeClass('open');
})

$('.btn-send').click(function(){
  if($(this).valid()){
    document.getElementById("client").reset();
    $overlay.removeClass('open');
    $trigger.removeClass('open');/*
    $('.wrap').addClass('fly');*/
  }
})

//# sourceMappingURL=custom.js.map
