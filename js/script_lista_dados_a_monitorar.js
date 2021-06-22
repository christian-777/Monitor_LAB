/*!
* Start Bootstrap - Freelancer v7.0.0 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 
$(document).ready(function(){
	var dados=0;
	function update_monitoramento(id){
		$.post("dados_monitoramento.php", {"id":id}, function(r){
			$.each(r, function(i,v){
				dados= {id_monitoramento: v.id_monitoramento,
						titulo: v.titulo,
						dominio_final: v.dominio_final,
						extensao:v.extensao_arquivo};
			});
			$.post("update_monitoramento.php", dados, function(t){
				alert("atualização feita com sucesso!!!");
			});
		});
	}
	var status_final=0;
	function avalia_status(a){
		
		$.post("seleciona_dados_a_monitorar.php",{"id":a}, function(v){
			var status=v[0];
			
			$.post("converte_arquivo.php", {"url":status.dominio_final},function(e){
				var md5_url=e;
				if(md5_url==status.codigo_rash){
					status_final="Normal";
				}
				
				if(md5_url!=status.codigo_rash){
					status_final="alterado";
					console.log(md5_url);
					console.log(status.codigo_rash);
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