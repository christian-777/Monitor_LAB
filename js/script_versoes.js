/*!
* Start Bootstrap - Freelancer v7.0.0 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 
$(document).ready(function(){
	var id= $("#div").val();
	//document.getElementById("div").value;
	console.log(id);
	$.post("seleciona_versoes.php", {"id":id}, function(dados){
		console.log("teste");
		var tabela="";
		var mais="";
		$.each(dados, function(indice,valor){
			mais='\n<div class="accordion" id="accordionExample">\n<div class="accordion-item">\n<h2 class="accordion-header" id="headingOne">\n<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">\n'+valor.titulo+'\n</button>\n</h2>\n<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">\n<div class="accordion-body">'+valor.conteudo+'</div>\n</div>\n</div>\n</div>\n';
			//tabela+="<tr><td>"+valor.cod_monitoramento+"</td><td>"+valor.titulo+"</td><td>"+valor.dominio_final+"</td><td>"+valor.extensao_arquivo+"</td><td>"+valor.data+"</td><td>"+mais+"</td></tr>";
		});
		$("#tabela_versoes").html(tabela);
	});
});