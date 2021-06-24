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
			  <th scope="col">Conteudo</th>
			</tr>
		</thead>
		<tbody id="tabela_versoes">
		</tbody>
	</table>
	<br />
	</div>
	<br />
	<div id="div" <?php echo"value=\"$id\"";?>></div>
	<script src="js/script_versoes.js"></script>
	<div class="accordion" id="accordionExample">
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
</div>
<?php
	include "rodape.php";
?>