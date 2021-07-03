<?php
	include "cabecalho.php";
	$id=$_GET["id"];
?>
	<div class="masthead container">
	<table class="text-center table table-dark table-bordered table-responsive-lg">
		<thead>
			<tr>
			  <th scope="col">Código do monitoramento</th>
			  <th scope="col">Titulo</th>
			  <th scope="col">Dominio final</th>
			  <th scope="col">Extensão do Arquivo</th>
			  <th scope="col">Data de modificação</th>
			  <th scope="col">Codificação</th>
			  <th scope="col">Conteudo</th>
			</tr>
		</thead>
		<tbody id="tabela_versoes">
			<?php
		//header("Content-Type: application/json");
		include "conexao.php";
		$select="SELECT cod_monitoramento, titulo, dominio_final, extensao_arquivo, data, conteudo, codificacao FROM versoes WHERE cod_monitoramento='$id'";
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		$cont=0;
		while($linha=mysqli_fetch_assoc($res)){
			
			$mais='<div class="text-dark">
				<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample'.$cont.'" role="button" aria-expanded="false" aria-controls="collapseExample'.$cont.'">
					'.$linha["titulo"].'
				</a>
				</p>
				<div class="collapse" id="collapseExample'.$cont.'">
					<div class="card card-body">
						'.$linha["conteudo"].'
					</div>
				</div>
			</div>';
			
			
		echo "<tr>
				<td>".$linha["cod_monitoramento"]."</td>
				<td>".$linha["titulo"]."</td>
				<td>".$linha["dominio_final"]."</td>
				<td>".$linha["extensao_arquivo"]."</td>
				<td>".$linha["data"]."</td>
				<td>".$linha["codificacao"]."</td>
				<td>$mais</td>
			</tr>";
			$cont++;
		}
	?>
		</tbody>
	</table>
	<br />
	</div>
	<br />
	<div id="div" <?php echo"value=\"$id\"";?>></div>
	<!--<script src="js/script_versoes.js"></script>-->
	
	<!-- https://getbootstrap.com/docs/5.0/components/accordion/
	-->

	
	<!--<div class="accordion" id="accordionExample">
	  <div class="accordion-item">
		<h2 class="accordion-header" id="headingOne">
		  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			Accordion Item #1
		  </button>
		</h2>
		<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
		  <div class="accordion-body">
			<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
		  </div>
		</div>
	  </div>
	</div>-->

<?php
	include "rodape.php";
?>