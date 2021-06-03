<!DOCTYPE html>
    <html>
        <head>
            <meta charset='utf-8' />
            <script src='js/jquery-3.5.1.min.js'></script>
            <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' />            
            <link href='css/main.css' rel='stylesheet' />            
            <script src='bootstrap/js/bootstrap.min.js'></script>
            <script src='js/md5.js'></script>
        </head>
        <body>                
            <nav class='navbar navbar-expand-md bg-primary navbar-dark'>
				<a href='index.php' class='navbar-brand logotipo'>
					<img src='img/logo.png' class='rounded' alt='descrição' />
				</a>

				<!-- botão que aparece quando a tela for pequena -->
				<button class='navbar-toggler' type='button'
					data-toggle='collapse' data-target='#menu'>
					<span class='navbar-toggler-icon'></span>
				</button>

				<div class='collapse navbar-collapse' id='menu'>
					<ul class='navbar-nav'>";
						<li>
							<a href='#' role='button' aria-haspopup='true' aria-expanded='false'>
								Cadastrar-se<span class='caret'></span>
							</a>
						</li>
						<li >
							<a href='#' role='button' aria-haspopup='true' aria-expanded='false'>
							  Loguin <span class='caret'></span>
							</a>
						</li>
						<ul class='navbar-nav'>
							<li>
								<a href='#contatos'>Contate-nos</a>
							</li>
						</ul>
					</ul>    
				</div>        
			</nav>
			
			<div id="contatos"></div>
		</body>
	</html>