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
	
});