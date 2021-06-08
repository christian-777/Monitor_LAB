<?php
	include "cabecalho.php";
?>
<div class="masthead">
	<form class="container d-flex align-items-left flex-column" action="cadastrar_dados.php">
		<div class="">
			<div class="form-row">
				<div class="col-5">
					<label for="titulo">Titulo:</label>
					<input type="text" name="titulo" id="titulo" class="form-control"/>
				</div>
			</div>
			<br />
			<div class="form-row">
				<div class="col-5">
					<label for="dominio_ponte">Dominio Ponte:</label>
					<input type="text" name="dominio_ponte" id="dominio_ponte" class="form-control"/>
				</div>
			</div>
			<br />
			<div class="form-row">
				<div class="col-5">
					<label for="dominio_principal">Dominio Principal:</label>
					<input type="text" name="dominio_principal" id="dominio_principal" class="form-control"/>
				</div>
			</div>
			<br />
			<div class="form-row">
				<div class="col-5">
					<label for="extencao">Extenção do Arquivo:</label>
					<input type="text" name="extencao" id="extencao" class="form-control"/>
				</div>
			</div>
			<br />
			<div class="form-row">
				<div class="col-5">
					<label for="periodicidade">Periodicidade:</label>
					<input type="text" name="periodicidade" id="periodicidade" class="form-control"/>
				</div>
			</div>
			<br />
			<div class="form-row">
				<div class="col-5">
					<label for="disponibilidade">Disponibilidade:</label>
					<input type="text" name="disponibilidade" id="disponibilidade" class="form-control"/>
				</div>
			</div>
			<br />
			<div id="mensagem"></div>
			<br />
			<button type="button" id="cadastrar_dados" class="btn btn-primary">Cadastrar</button>
			<button type="reset" id="limpar" class="btn btn-secondary">limpar</button>
		</div>
	</form>
	
	
</div>
<?php
	include "rodape.php";
?>
