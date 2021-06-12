/*!
* Start Bootstrap - Freelancer v7.0.0 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 
$(document).ready(function(){
	
	$("#cadastrar_dados").click(function(){
		var dados= { titulo: $("#titulo").val(),
					 dominio_ponte: $("#dominio_ponte").val(),
                     dominio_principal: $("#dominio_principal").val(),
					 extensao: $("#extensao").val(),
					 periodicidade: $("#periodicidade").val(),
					 disponibilidade: $("#disponibilidade").val()
					};
					console.log(dados);
					 
		if($("#titulo").val()==""  && $("#dominio_ponte").val()=="" && $("#dominio_principal").val()=="" && $("#extencao").val()=="" && $("#periodicidade").val()=="" && $("#disponibilidade").val()==""){
			$("#mensagem").html("insira os dados corretos!!");
		}
		else{
			$.post("cadastrar_dados.php", dados, function(d){
			alert("Dados para monitorar cadastrados com sucesso!!!");
			$("#limpar").click();
			});
		}
	});
	
	
	
	
});



