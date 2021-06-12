/*!
* Start Bootstrap - Freelancer v7.0.0 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 
$(document).ready(function(){
	window.addEventListener('DOMContentLoaded', event => {

		// Navbar shrink function
		var navbarShrink = function () {
			const navbarCollapsible = document.body.querySelector('#mainNav');
			if (!navbarCollapsible) {
				return;
			}
			if (window.scrollY === 0) {
				navbarCollapsible.classList.remove('navbar-shrink')
			} else {
				navbarCollapsible.classList.add('navbar-shrink')
			}

		};

		// Shrink the navbar 
		navbarShrink();

		// Shrink the navbar when page is scrolled
		document.addEventListener('scroll', navbarShrink);

		// Activate Bootstrap scrollspy on the main nav element
		const mainNav = document.body.querySelector('#mainNav');
		if (mainNav) {
			new bootstrap.ScrollSpy(document.body, {
				target: '#mainNav',
				offset: 72,
			});
		};

		// Collapse responsive navbar when toggler is visible
		const navbarToggler = document.body.querySelector('.navbar-toggler');
		const responsiveNavItems = [].slice.call(
			document.querySelectorAll('#navbarResponsive .nav-link')
		);
		responsiveNavItems.map(function (responsiveNavItem) {
			responsiveNavItem.addEventListener('click', () => {
				if (window.getComputedStyle(navbarToggler).display !== 'none') {
					navbarToggler.click();
				}
			});
		});

	});
	
	function cadastrar(){
		var dados= { nome: $("#nome").val(),
					 email: $("#email").val(),
                     senha: $("#senha").val()};
					 
		if($("#nome").val()=="" ||  $("#email").val()=="" || $("#senha").val()==""){
			$("#mensagem").html("insira os dados corretos!!");
		}
		else{
			$.post("cadastrar.php", dados, function(d){
			alert("Usuario cadastrado com sucesso!!!");
			});
			$("#cancelar_modal_cadastro").click();
		}
	}
	
	$("#logar").click(function(){
		var dados= {email: $("#email_login").val(),
                     senha: $("#senha_login").val()};
					 
		$.post("autenticar.php", dados, function(d){
			if(d!=1){
				$("#mensagem").html("Usuario ou senha incorreto!!");
			}
			else{
				window.location.href="home.php";
			}
		});
	});
	
	function confirmar_senha(){	
		var senha = $("#senha").val(), confirma_senha = $("#confirma_senha").val();
		
		if(senha!=confirma_senha){
			$("#mensagem").html("As senhas estão diferentes, confirme a senha!!");
		}
		if(senha==confirma_senha){
			$("#mensagem").html("");
			cadastrar();
		}
	}
	
	
	$("#cadastrar").click(function(){
		confirmar_senha();
	});
	
	$("#logar").click(function(){
		var dados= {email: $("#email_login").val(),
                     senha: $("#senha_login").val()};
					 
		$.post("autenticar.php", dados, function(d){
			if(d!=1){
				$("#mensagem").html("Usuario ou senha incorreto!!");
			}
			else{
				window.location.href="home.php";
			}
		});
	});
	
});



