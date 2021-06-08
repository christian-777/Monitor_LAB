<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logar-se</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form>
			<label for="email">E-mail:</label>
			<input class="form-control" type="email" name="email_login" id="email_login" placeholder="Insira seu E-mail"/>
			<br />
			<label for="email">Senha:</label>
			<input class="form-control" type="password" name="senha_login" id="senha_login" placeholder="Insira uma Senha"/>
			<div id="mensagem" style="color:red;"></div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" id="cancelar_modal" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" id="logar" class="btn btn-primary">Logar</button>
      </div>
    </div>
  </div>
</div>