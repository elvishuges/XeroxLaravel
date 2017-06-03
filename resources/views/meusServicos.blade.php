<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<title>Impressões</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Audiowide|Freckle+Face|Fugaz+One|Pangolin|Press+Start+2P|Roboto');
	</style>
</head>
<body>
	<main>
		<div class="navbar-fixed">
			<nav class="indigo darken-3">
				<div class="nav-wrapper container">

					<a href="index.html" class="brand-logo white-text fonte-fugaz" style="font-size: 40px;">XEROX</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">

						<li class="active"><a href="criarServico"><i class="material-icons left">home</i>Criar serviço</a></li>
						<li class="active"><a href="minhasImpressoes"><i class="material-icons left">home</i>Minhas Impressões</a></li>
						<li class="active"><a href="meusServicos"><i class="material-icons left">home</i>Meus Serviçoes</a></li>
						<li>
							<a href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							Sair
							<i class="material-icons right">account_circle</i>
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</li>



				</div>

			</nav>
		</div>
		
		<ul class="side-nav" id="mobile-demo">
			<li class="indigo darken-3"><a href="login.php" class="white-text"><i class="material-icons right white-text">account_circle</i>Entrar</a></li>
			<li class="indigo darken-3"><a href="index.html" class="white-text"><i class="material-icons left white-text">home</i>Início</a></li>
			<li class="active indigo darken-3"><a href="cadastrar.php" class="white-text"><i class="material-icons left white-text">person_add</i>Criar conta</a></li>
			<li class="active indigo darken-3"><a href="minhasImpressoes.php" class="white-text"><i class="material-icons left white-text">description</i>Minhas Impressões</a></li>
			<li class="indigo darken-3"><a href="sobre.php" class="white-text"><i class="material-icons left white-text">info</i>Sobre</a></li>
		</ul>

		<br><br><br>



		<div class="container center">
			<div class="card-panel indigo z-depth-4">
				<span class="white-text"><h4>Meus Serviços</h4>
				</span>
			</div>
			<br>
		</div>



		<div class="container center">
			<div class="col s12 m5">
				<div class="card-panel green">
					<span class="black-text">Nome Xerox 1
					</span>
				</div>
				<br>
			</div>
		</div>
		<div class="container center">
			<table class="striped centered">
				<thead>
					<tr>
						<th data-field="id">Nome Do Cliente</th>
						<th data-field="name">Arquivo</th>
						<th data-field="price">Data de busca</th>
						<th data-field="price">Imprimir</th>
						<th data-field="price">Excluir</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>Fulano 1</td>
						<td>Arquivo 1</td>
						<td class="green-text">03/06/2017</td>
						<td class="red-text"> <button class="btn waves-effect waves-light" type="submit" name="action">Imprimir
						</td>
						<td colspan="" rowspan="" headers=""><button class="btn waves-effect waves-light red" type="submit" name="action">Submit
						<i class="mdi-content-send right"></i>
						</button>						
					    </td>
				
				</tr>
				<tr>
					<td>Fulano  2</td>
					<td>Arquivo 2</td>
					<td class="red-text">03/06/2017</td>
					<td class="red-text"> <button class="btn waves-effect waves-light" type="submit" name="action">Imprimir
					</button>
					</td>
					<td colspan="" rowspan="" headers=""><button class="btn waves-effect waves-light red" type="submit" name="action">Submit
						<i class="mdi-content-send right"></i>
					</button></td>

			    
			</tr>
			<tr>
					<td>Fulano  2</td>
					<td>Arquivo 2</td>
					<td class="red-text">03/06/2017</td>
					<td class="red-text"> <button class="btn waves-effect waves-light" type="submit" name="action">Imprimir
					</button>
					</td>
					<td colspan="" rowspan="" headers=""><button class="btn waves-effect waves-light red" type="submit" name="action">Submit
						<i class="mdi-content-send right"></i>
					</button>
					</td>

			    
			</tr>
		</tbody>
	</table>
</div>

<br><br><br><br>

<style>

	.divNomeXerox {
		width: 50%;
		border: 5px solid gray;
	}
</style>









</main>
<footer class="page-footer indigo darken-3">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text fonte-pangolin">Contato</h5>
				<br>
				<a class="grey-text text-lighten-3" href="#!"><i class="material-icons left white-text">email</i>Envie um email para contato</a>
			</div>
			<div class="col l4 offset-l2 s12">
				<h5 class="white-text fonte-pangolin">Redes Sociais</h5>
				<ul>
					<li>
						<a class="grey-text text-lighten-3" href="#!"><img src="css/facebook.png" width="40" height="40"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© 2017 Copyright Leandro Sampaio, All rights reserved
			<a class="grey-text text-lighten-4 right" href="#!">Anuncie Conosco</a>
		</div>
	</div>
</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
	$( document ).ready(function(){
		$(".button-collapse").sideNav();
		$('.tooltipped').tooltip({delay: 50});
		$('.slider').slider();
		$('.parallax').parallax();
		$('.modal').modal();
	});
</script>
</body>
</html>