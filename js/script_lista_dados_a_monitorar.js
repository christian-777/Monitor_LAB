/*!
* Start Bootstrap - Freelancer v7.0.0 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 
$(document).ready(function(){
	
	function avalia_status(a){
		$.post("seleciona_dados_a_monitorar.php",{"id":a}, function(v){
			var status=v[0];
			
			$.post("converte_arquivo.php", {"url":status.dominio_final},function(e){
				console.log(e);
				var md5_url=e;
			});
			
			if(md5_url==status.codigo_rash){
				return "Normal";
			}
			
			if(md5_url!=status.codigo_rash){
				return "alterado";
				console.log("++");
			}
			
			if(md5_url==""){
				return "indisponivel";
			}
		});
	}
	
	
	$.getJSON("seleciona_dados_a_monitorar.php", function(v){
		var tabela="";
		console.log("teste");
		$.each(v, function(indice, valor){
            tabela+="<tr><td>"+valor.id_monitoramento+"</td><td>"+valor.titulo+"</td><td>"+valor.dominio_ponte+"</td><td>"+valor.dominio_final+"</td><td>"+valor.extensao_arquivo+"</td><td>"+valor.periodicidade+"</td><td>"+valor.codigo_rash+"</td><td>"+avalia_status(valor.id_monitoramento);+"</td></tr>";
        });
		$("#tabela").html(tabela);
	});
	
});