/*!
* Start Bootstrap - Freelancer v7.0.0 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 
$(document).ready(function(){
	
	function update_monitoramento(id){
		$.post("update_monitoramento.php", id, function(){
			alert("atualixação feita com sucesso!!!");
		});
	}
	var status_final=0;
	function avalia_status(a){
		
		$.post("seleciona_dados_a_monitorar.php",{"id":a}, function(v){
			var status=v[0];
			
			$.post("converte_arquivo.php", {"url":status.dominio_final},function(e){
				console.log(e);
				console.log(status.codigo_rash);
				var md5_url=e;
				if(md5_url==status.codigo_rash){
					status_final="Normal";
				}
				
				if(md5_url!=status.codigo_rash){
					status_final="alterado";
					console.log("++");
					update_monitoramento(a);
				}
				
				if(md5_url==""){
					status_final="indisponivel";
				}
				
				$("#status"+a).html(status_final);
			});
		});
	}
	
	
	$.getJSON("seleciona_dados_a_monitorar.php", function(v){
		var tabela="";
		console.log("teste");
		$.each(v, function(indice, valor){
            tabela+="<tr><td>"+valor.id_monitoramento+"</td><td>"+valor.titulo+"</td><td>"+valor.dominio_ponte+"</td><td>"+valor.dominio_final+"</td><td>"+valor.extensao_arquivo+"</td><td>"+valor.periodicidade+"</td><td>"+valor.codigo_rash+"</td><td id='status"+valor.id_monitoramento+"'></td><td><a href='versoes.php?id="+valor.id_monitoramento+"'>Visualizar versões anteriores</a></td></tr>";
        });
		$("#tabela").html(tabela);
		$.each(v, function(indice, valor){
  			avalia_status(valor.id_monitoramento);
        });
	});
	
});