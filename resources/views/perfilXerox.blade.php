<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<title>Perfil</title>
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
	<link rel="stylesheet" type="text/css" href="../css/index.css">
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

						<li class="active"><a href="{{ url('criarServico') }}"><i class="material-icons left">home</i>Criar serviço</a></li>
						<li class="active"><a href="{{url('minhasImpressoes')}}"><i class="material-icons left">home</i>Minhas Impressões</a></li>
						<li class="active"><a href="{{url('meusServicos')}}"><i class="material-icons left">home</i>Meus Serviçoes</a></li>

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
			<li class="indigo darken-3"><a href="criarServico" class="white-text"><i class="material-icons left white-text">home</i>Criar serviço</a></li>
			<li class="indigo darken-3"><a href="minhasImpressoes" class="white-text"><i class="material-icons left white-text">home</i>Minhas Impressões</a></li>
			<li class="active indigo darken-3"><a href="meusServicos" class="white-text"><i class="material-icons left white-text">person_add</i>Meus Serviços</a></li>
			
			<li class="active indigo darken-3" >
				<a href="{{ route('logout') }}"
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();"  class="white-text">
				Sair
				<i class="material-icons right">account_circle</i>
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</li>
		
		
	</ul>

		<br><br><br>

		<div class="divider"></div>

		<div class="container">
			<div class="row">
				<div class="col s12 m6">
					<h3 class="center blue-text negrito">{{$xerox->nome}}</h3>
					<img class="materialboxed" width="300" src="../css/xerox2.png">
				</div>
				<div class="col offset-m1 offset-s3 s6 m4 center">
					<br>
					<h5 class="center white-text z-depth-3" style="background-color: indigo;">Preço: {{$xerox->precoFolha}} /Folha</h5>
					<br>
					<h4 class="blue-text">Descrição</h4>
					<br>
					<div class="divider"></div>
				</div>
				<div class="col offset-m1 s12 m4">
					<div class="divider"></div><br>
					<h6>{{$xerox->descricao}}
					</h6>
				</div>
				<br>


				<div class="col s12 m6">
					<form name="form" id="form" action="{{ url('postArquivo') }}" method="post"  enctype='multipart/form-data'>
						{{ csrf_field() }}
						<div class="file-field input-field">
							<div class="btn">
								<span>File</span>
								<input type="file" name="arquivo" >
							</div>			

							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="Upload one or more files" required>
							</div>
						</div>
						<div class="input-field col s12 m12">
							<input id="date" name="dataDeBusca" type="date" class="datepicker"  placeholder="Data " required>	
							<label for="email" data-error="wrong" data-success="right">Data de Busca:</label>
						</div>
						<input type="hidden" name="xeroxes_id" value= "{{$xerox->id}}" >
						<input type="hidden" name="nomeXerox" value= "{{$xerox->nome}}" >
					</form>
				</div>
				
				<div class="col s12 m5">
					<br>
					<div class="center">
						<button onclick="myFunction()" class="btn waves-effect waves-light" type="submit" name="action"  >Enviar
							<i class="material-icons right">send</i>
						</button>
						
					</div>
				</div>

			</div>
		</div>



		<br><br>
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
							<a class="grey-text text-lighten-3" href="#!"><img src="../css/facebook.png" width="40" height="40"></a>
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
	<script type="text/javascript" src="../js/materialize.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script>
		$( document ).ready(function(){
			$(".button-collapse").sideNav();
			$('.tooltipped').tooltip({delay: 50});
			$('.slider').slider();
			$('.parallax').parallax();
			$('.modal').modal();
		});
	</script>
	<script>
		$('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
});

</script>

<script>
function myFunction() {
    var x = document.forms["form"]["arquivo"].value;
    var y = document.forms["form"]["dataDeBusca"].value;
    if (x == "" ) {
        alert("Adicione um Arquivo para ser enviado");
        return false;
    }
     if (y == "" ) {
        alert("Adicione uma data de busca");
        return false;
    }
    document.getElementById('form').submit();
}
</script>
</script>

</body>
</html>