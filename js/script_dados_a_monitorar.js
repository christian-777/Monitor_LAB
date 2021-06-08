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
	
	$("#cadastrar_dados").click(function(){
		var dados= { titulo: $("#titulo").val(),
					 dominio_ponte: $("#dominio_ponte").val(),
                     dominio_princial: $("#dominio_princial").val(),
					 extencao: $("#extencao").val(),
					 periodicidade: $("#periodicidade").val(),
					 disponibilidade: $("#disponibilidade").val()
					};
					 
		if($("#titulo").val()==""  && $("#dominio_ponte").val()=="" && $("#dominio_princial").val()=="" && $("#extencao").val()=="" && $("#periodicidade").val()=="" && $("#disponibilidade").val()==""){
			$("#mensagem").html("insira os dados corretos!!");
		}
		else{
			$.post("cadastrar_dados.php", dados, function(d){
			alert("Dados para monitorar cadastrados com sucesso!!!");
			$("#limpar").click();
			});
		}
	});
	
	
	
	
});



