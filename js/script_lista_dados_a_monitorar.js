/*!
* Start Bootstrap - Freelancer v7.0.0 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 
$(document).ready(function(){
	
	$.getJSON("seleciona_dados_a_monitorar.php", function(v){
		var tabela="";
		$.each(v, function(indice, valor){
            tabela+="<tr><td>"+valor.id_monitoramento+"</td><td>"+valor.titulo+"</td><td>"+valor.dominio_ponte+"</td><td>"+valor.dominio_principal+"</td><td>"+valor.extensao_arquivo+"</td><td>"+valor.periodicidade+"</td><td>"+valor.disponibilidade+"</td></tr>";
        });
		$("#tabela").html(tabela);
	});
	
		var dados= { titulo: $("#titulo").val(),
					 dominio_ponte: $("#dominio_ponte").val(),
                     dominio_princial: $("#dominio_princial").val(),
					 extencao: $("#extencao").val(),
					 periodicidade: $("#periodicidade").val(),
					 disponibilidade: $("#disponibilidade").val()
					};
					console.log(dados);
					 
		if($("#titulo").val()==""  && $("#dominio_ponte").val()=="" && $("#dominio_princial").val()=="" && $("#extencao").val()=="" && $("#periodicidade").val()=="" && $("#disponibilidade").val()==""){
			$("#mensagem").html("insira os dados corretos!!");
		}
		else{
			$.post("cadastrar_dados.php", dados, function(d){
			alert("Dados para monitorar cadastrados com sucesso!!!");
			$("#limpar").click();
			});
		}
});



83