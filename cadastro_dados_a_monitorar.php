<?php
	include "cabecalho.php";
?>
<div class="masthead">
	<form class="container d-flex align-items-left flex-column">
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
					<label for="dominio_principal">Dominio Final:</label>
					<input type="text" name="dominio_final" id="dominio_final" class="form-control"/>
				</div>
			</div>
			<br />
			<div class="form-row">
				<div class="col-5">
					<label for="extencao">Extensão do Arquivo:</label>
					<input type="text" name="extensao" id="extensao" class="form-control"/>
				</div>
			</div>
			<br />
			<div class="form-row">
				<div class="col-5">
					<label for="periodicidade">Periodicidade:</label>
					<select id="periodicidade" name="periodicidade" class="form-control form-select">
						<option value="1">Diario</option>
						<option value="2">Semanal</option>
						<option value="3">Quinzenal</option>
						<option value="4">Mensal</option>
						<option value="5">Bimestral</option>
						<option value="6">Trimestral</option>
						<option value="7">Quadrimestral</option>
						<option value="8">Semestral</option>
						<option value="9">Anual</option>
						<option value="10">Único</option>
					</select>
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
