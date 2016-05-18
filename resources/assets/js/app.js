//modal
$('#passwordModal').modal({
  keyboard: false
})



// //------------------------------------------------------------------------------
// //----------------------------Funções Gerais------------------------------------
// //------------------------------------------------------------------------------
// $.jMaskGlobals.watchDataMask = true;
//
// function campoNumerico(campo) {
//   $('#'+campo).val($('#'+campo).val().replace(/[^0-9]/g,''));
// }
//
// $(function(){
//   var altura = window.innerHeight;
//   var largura_menu = $(".navbar .menu-principal").width();
//   $(".corpo").css("height", (window.innerHeight - 100));
//   $(".navbar ul.menu-principal").css("left", -(largura_menu/2));
//
//   //CPF/CNPJ Tomador
//   if($("input[name='TipoTomador']:checked").val() == "Cpf"){
//     $("input[name='CpfCnpjTomador']").mask("999.999.999-99");
//     console.log("CPF");
//   }
//   else if($("input[name='TipoTomador']:checked").val() == "Cnpj"){
//     $("input[name='CpfCnpjTomador']").mask("99.999.999/9999-99");
//     console.log("CNPJ");
//   }
//
//   //CPF/CNPJ Intermediario
//   if($("input[name='TipoIntermediario']:checked").val() == "Cpf"){
//     $("input[name='CpfCnpjIntermediario']").mask("999.999.999-99");
//   }
//   else{
//     $("input[name='CpfCnpjIntermediario']").mask("99.999.999/9999-99");
//   }
// })
//
// $('.dropdown-toggle').dropdown();
// $("#cep").mask("99.999-999");
// $("#inscricao_municipal, input[name='InscricaoMunicipalTomador'], input[name='InscricaoMunicipalIntermediario']").mask("9999999/999-9");
// $('input.input-data').datepicker({
//     format: "yyyy-mm-dd",
//     todayBtn: "linked",
//     clearBtn: true,
//     language: "pt-BR",
//     todayHighlight: true
// });
//
// //------------------------------------------------------------------------------
// //------------------------------Gera Notas--------------------------------------
// //------------------------------------------------------------------------------
// $("input[name='TipoTomador']").click(function(){
//   $("input[name='CpfCnpjTomador']").val("");
//   if($(this).val() == "Cpf"){
//     $("input[name='CpfCnpjTomador']").mask("000.000.000-00");
//     console.log("CPF");
//   }
//   else{
//     $("input[name='CpfCnpjTomador']").mask("99.999.999/9999-99");
//     console.log("CNPJ");
//   }
// });
//
// $("input[name='TipoIntermediario']").click(function(){
//   $("input[name='CpfCnpjIntermediario']").val("");
//   if($("input[name='TipoIntermediario']:checked").val() == "Cpf"){
//     $("input[name='CpfCnpjIntermediario']").mask("999.999.999-99");
//   }
//   else{
//     $("input[name='CpfCnpjIntermediario']").mask("99.999.999/9999-99");
//   }
// });
//
// /* Controla exibição de abas */
//
// // Aba carregar nota
// $("#carregar_nota a").click(function(e){
//   e.preventDefault();
//   $("input[name='TipoEnvio']").val(0);
//   $(this).tab('show');
// });
//
// // Aba criar nota
// $("#gerar_nota a").click(function(e){
//   e.preventDefault();
//   $("input[name='TipoEnvio']").val(1);
//   $(this).tab('show');
//   $("#tab_subst_nota").hide();
//   $("#tab_tomador a").trigger('click');
// });
// // Aba substituir nota
// $("#substituir_nota a").click(function(e){
//   e.preventDefault();
//   $("input[name='TipoEnvio']").val(2);
//   $(this).tab('show');
//   $("#tab_subst_nota").show();
//   $("#tab_subst_nota a").trigger('click');
// });
//
// //select item da lista de serviços
// $("select[name='CTISS']").click(function(){
//   switch($("select[name='CTISS']").val()) {
//     case ('10300288'): $("select[name='ItemListaServico']").html("<option value='1.74'>Processamento de dados e congeneres.</option>"); break;
//     case ('10800288'): $("select[name='ItemListaServico']").html("<option value='1.79'>Planejamento, confeccao, manutencao e atualizacao de paginas eletronicas.</option>"); break;
//     case ('10800488'): $("select[name='ItemListaServico']").html("<option value='1.79'>Planejamento, confeccao, manutencao e atualizacao de paginas eletronicas.</option>"); break;
//     case ('10100188'): $("select[name='ItemListaServico']").html("<option value='1.72'>Analise e desenvolvimento de sistemas.</option>"); break;
//     case ('10200288'): $("select[name='ItemListaServico']").html("<option value='1.73'>Programacao.</option>"); break;
//     case ('10400188'): $("select[name='ItemListaServico']").html("<option value='1.75'>Elaboracao de programas de computadores, inclusive de jogos eletronicos.</option>"); break;
//     case ('10800188'): $("select[name='ItemListaServico']").html("<option value='1.79'>Planejamento, confeccao, manutencao e atualizacao de paginas eletronicas.</option>"); break;
//     case ('10800388'): $("select[name='ItemListaServico']").html("<option value='1.79'>Planejamento, confeccao, manutencao e atualizacao de paginas eletronicas.</option>"); break;
//     case ('10700188'): $("select[name='ItemListaServico']").html("<option value='1.78'>Suporte tecnico em informatica, inclusive instalacao, configuracao e manutencao de programas de computacao e bancos de dados.</option>"); break;
//     case ('10300788'): $("select[name='ItemListaServico']").html("<option value='1.74'>Processamento de dados e congeneres.</option>"); break;
//     case ('80201088'): $("select[name='ItemListaServico']").html("<option value='2.53'>Instrucao, treinamento, orientacao pedagogica e educacional, avaliacao de conhecimentos de qualquer natureza.</option>"); break;
//   }
// });
//
// //aliquota iss
// $("select[name='RegimeEspecialTributacao']").click(function(){
//   if($("select[name='RegimeEspecialTributacao']").val() == 6){
//     $("#aliquota").removeClass("hide");
//   }
//   else{
//     $("#aliquota").addClass("hide");
//   }
// });
//
// $('#btn_criar_nota').click(function(event){
//   event.preventDefault();
//   validaGerarNota();
// });
//
// function validaGerarNota(){
//   var error = 0;
//   var mensagem = "O(s) campo(s) ";
//   var valor = $("input[name='ValorServicos']").val();
//   var verifica_valor;
//
//   $('input[required]').each(function(){
//     if($(this).val()==""){
//       $(this).css("border-color","red");
//       mensagem += $(this).attr("placeholder") + ", ";
//       error++;
//     }
//     else $(this).css("border-color","#ccc");
//   });
//
//   if(valor.charAt(valor.length-3) == ","){
//     error++;
//     $("input[name='ValorServicos']").css("border-color","red");
//     mensagem = "Os centavos devem ser separados por ponto (.) e não vírgula (,).";
//   }
//
//   mensagem += "não pode(m) estar vazio(s)";
//
//   if(error > 0){
//     $(".retorno-validacao").removeClass("hidden").html(mensagem);
//   }
//
//   else{
//     $('.retorno-validacao').addClass("hidden").empty();
//     $('#gera_nota').submit();
//   }
// }
//
// //------------------------------------------------------------------------------
// //----------------------------Consulta Notas------------------------------------
// //------------------------------------------------------------------------------
// $('#numero_nfse').keyup( function() { campoNumerico('numero_nfse') });
//
// $("#nota").click(function(){
//   $("input[name='TipoBusca']").val(0);
// });
//
// $("#periodo").click(function(){
//   $("input[name='TipoBusca']").val(1);
//   $(".dados-tomador").hide();
// });
//
// $("#tomador").click(function(){
//   $("input[name='TipoBusca']").val(2);
//   $(".dados-tomador").show();
// });
//
// $(".lista-lotes-enviados").click(function(event) {
//   var key = $(this).attr('class').split(' ')[1];
//   $("form.lista-lotes-enviados-"+key).submit();
// });
//
// $(".rps-errada").click(function(event) {
//   var key = $(this).attr('class').split(' ')[1];
//   $("form.rps-errada-"+key).submit();
// });
//
// $('button.consultar-nfse-submit').click(function(event){
//   event.preventDefault();
//   mensagem = "";
//   tipo_pesquisa = $('.consulta-nfse ul li.active').prop('id');
//   switch (tipo_pesquisa) {
//     case "nota":
//       if($('#numero_nfse').val().length<15){
//         mensagem = "O numero da nota deve ter 15 caracteres";
//       }
//     break;
//     case "periodo":
//       if( $('#data_inicial').val().length==0 && $('#data_final').val().length==0 ){
//         mensagem = "Os campos de data devem ser preenchidos";
//       }
//     break;
//     case "tomador":
//       if( $('#data_inicial').val().length==0 || $('#data_final').val().length==0 || $('#cnpj').val().length<11 ){
//         mensagem = "Os campos de data e dados do tomador são obrigatorios";
//       }
//     break;
//     case "rps":
//       if( $('#num_rps').val().length==0 || $('#serie_rps').val().length==0 || $('#tipo_rps').val().length==0){
//         mensagem = "Os campos acima são de preenchimento obrigatorio";
//       }
//     break;
//   }
//   if(mensagem==""){
//     $('div').remove('.validacao');
//     if(tipo_pesquisa=='tomador'){ tipo_pesquisa = "periodo"; }
//     console.log(tipo_pesquisa);
//     $('#pesquisar_por_'+tipo_pesquisa).children('form').submit();
//   }
//   else{
//     if (!$('.area-formulario .alert').length>0){
//       $('.area-formulario').append('<div class="alert alert-danger validacao">'+mensagem+'</div>');
//     }
//     else{ $('.area-formulario .alert.validacao').html(mensagem); }
//   }
// });
//
// //------------------------------------------------------------------------------
// //--------------------------------------historico-------------------------------
// //------------------------------------------------------------------------------
//
// $("#selecionar_todos").click(function(){
//   $("input:checkbox").prop('checked','checked');
// });
//
// $("#adicionar_filtro").click(function(){
//   $(".filtro").removeClass('hide');
//   $("th.download_xml").css("padding", "8px 0");
//   $("tr.spacer").css("height", "25px");
// });
//
// $("#consultar_cadastro").click(function(){
//   var cpf_cnpj = $("input[name='CpfCnpjTomador']").val();
//   console.log(cpf_cnpj);
//   $.get( "/consultar-cadastro/"+cpf_cnpj.replace(/[^0-9]/gi, ''), function( data ) {
//     // console.log( data );
//     $("input[name='RazaoSocialTomador']").val(data.nome);
//     $("input[name='InscricaoMunicipalTomador']").val(data.Inscr_Municipal);
//     $("input[name='EmailTomador']").val(data.MailContato);
//     $("input[name='TelefoneTomador']").val(data.Telefone);
//     $("input[name='CepTomador']").val(data.CEP);
//     $("input[name='LogradouroTomador']").val(data.End_Logradouro);
//     $("input[name='NumeroTomador']").val(data.End_Numero);
//     $("input[name='ComplementoTomador']").val(data.End_Complemento);
//     $("input[name='BairroTomador']").val(data.Bairro);
//     $("input[name='MunicipioTomador']").val(data.Cidade);
//     // $("input[name='UfTomador']").val(data.Estado);
//   });
// });
//
// $("input[name='CpfCnpjTomador']").focusout(function(){
//   var cpf_cnpj = $("input[name='CpfCnpjTomador']").val();
//   if( cpf_cnpj.length > 0){
//     $.get( "/consultar-cadastro/"+cpf_cnpj.replace(/[^0-9]/gi, ''), function( data ) {
//       console.log( data.nome );
//       $("input[name='RazaoSocialTomador']").val(data.nome);
//       $("input[name='InscricaoMunicipalTomador']").val(data.Inscr_Municipal);
//       $("input[name='EmailTomador']").val(data.MailContato);
//       $("input[name='TelefoneTomador']").val(data.Telefone);
//       $("input[name='CepTomador']").val(data.CEP);
//       $("input[name='LogradouroTomador']").val(data.End_Logradouro);
//       $("input[name='NumeroTomador']").val(data.End_Numero);
//       $("input[name='ComplementoTomador']").val(data.End_Complemento);
//       $("input[name='BairroTomador']").val(data.Bairro);
//       $("input[name='MunicipioTomador']").val(data.Cidade);
//       $("select[name='UfTomador']").val(data.Estado);
//     });
//   }
//   else{
//     $("input[name='RazaoSocialTomador']").val("");
//     $("input[name='InscricaoMunicipalTomador']").val("");
//     $("input[name='EmailTomador']").val("");
//     $("input[name='TelefoneTomador']").val("");
//     $("input[name='CepTomador']").val("");
//     $("input[name='LogradouroTomador']").val("");
//     $("input[name='NumeroTomador']").val("");
//     $("input[name='ComplementoTomador']").val("");
//     $("input[name='BairroTomador']").val("");
//     $("input[name='MunicipioTomador']").val("");
//   }
// });
//
// $("input[name='IssRetido']").change(function(){
//   if($(this).val() == 1)
//     calcularValorISS();
//   else
//     $(".valor-iss").html("");
// });
//
// $("input[name='ValorServicos']").keyup(function(){
//   calcularValorISS();
// });
//
// $("input[name='ValorServicos']").focusout(function(){
//   var valor = $(this).val();
//   if(valor.charAt(valor.length-3) == ","){
//     $(this).css("border-color","red");
//     alert("Use ponto (.) para separar os centavos.");
//   }
//   else{
//     $(this).css("border-color","#ccc");
//   }
// });
//
// function calcularValorISS(){
//   var valor_nota, valor_iss, aliquota;
//   valor_nota = $("input[name='ValorServicos']").val();
//   aliquota = $("select[name='Aliquota']").val();
//   valor_iss = (valor_nota * aliquota).toFixed(2);
//   $(".valor-iss").html("R$ " + valor_iss);
// }
//
// // $("#btn_gerar_nfse_banco").click(function(e){
// //   console.log('a');
// //   $(".gerando-notas").html('<img src="images/loading_blue.gif">');
// //   $("input[required]").attr("disabled", true);
// //   $.get('/gerar-nfse-banco', function(data){
// //     console.log('b');
// //   }).done(function(){
// //     $(".gerando-notas").empty();
// //     location.href = "/gerar-nfse-banco";
// //   }).error(function(){
// //     $(".gerando-notas").html("<div class='alert alert-danger'>Erro na requisição. Tente novamente.</div>");
// //   });
// // });
//
// $("#carregar_do_banco a").click(function(){
//   $(".gerando-notas").html('<img src="images/loading_blue.gif">');
// });
//
// $("#carregar_arquivo button").click(function(event){
//   event.preventDefault();
//   $("input[required]").attr("disabled", true);
//   $(".gerando-notas").html('<img src="images/loading_blue.gif">');
//   $("#gera_nota").submit();
// })
