<!DOCTYPE html>
<html>
<head>  
    <meta charset="utf-8">
    <title>Xerox</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Audiowide|Coming+Soon|Freckle+Face|Dancing+Script|Fugaz+One|Indie+Flower|Pangolin|Press+Start+2P|Roboto');
    </style>
</head>
<body>
    <main>
        <div class="navbar-fixed">
            <nav class="indigo darken-3">
                <div class="nav-wrapper container">
                @if (Auth::check())
                     <a href="/" class="brand-logo white-text fonte-fugaz" style="font-size: 40px;">XEROX</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        
                        <li class="active"><a href="{{ url('criarServico') }}"><i class="material-icons left">home</i>Criar serviço</a></li>
                        <li class="active"><a href="minhasImpressoes"><i class="material-icons left">home</i>Minhas Impressões</a></li>
                         <li class="active"><a href="meusServicos"><i class="material-icons left">home</i>Meus Servicos</a></li>
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

  

                    @else
                     
                      <a href="/home" class="brand-logo white-text fonte-fugaz" style="font-size: 40px;">XEROX</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li class="active"><a href="{{ url('/') }}"><i class="material-icons left">home</i>Início</a></li>
                        <li><a href="{{ route('login') }}"><i class="material-icons right">account_circle</i>Entrar</a></li>
                        <li><a href="{{ url('register') }}"><i class="material-icons right">account_circle</i>Criar conta</a></li>                        
                        <li><a href="/">Sobre</a></li>
                    </ul>
                 

                    @endif
                </div>
                <div class="nav-wrapper">
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
        
       
        @if (Auth::check())
         <ul class="side-nav" id="mobile-demo">
            <li class="indigo darken-3"><a href="criarServico" class="white-text"><i class="material-icons right white-text">account_circle</i>Criar serviçoes </a></li>
            <li class="active indigo darken-3"><a href="minhasImpressoes" class="white-text"><i class="material-icons left white-text">home</i>Minhas impressões</a></li>
            <li class="indigo darken-3"><a href="{{ url('register') }}"class="white-text"><i class="material-icons left white-text">person_add</i>Mesus serviçoes</a></li>
            <li class="indigo darken-3"><a href="minhasImpressoes" class="white-text"><i class="material-icons left white-text">description</i>Minhas Impressões</a></li>
            <li class="indigo darken-3"><a href="{{ route('logout') }}"  class="white-text"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                            <i class="material-icons left white-text">account_circle</i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
        </ul>






























        <div class="fullscreen">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="css/papel.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h1 class="black-text font-coming">Quer imprimir um arquivo facilmente?</h1>
                            <a class="waves-effect waves-light btn-large indigo darken-3" href="#">PESQUISAR</a>
                        </div>
                    </li>
                    <li>
                        <img src="css/papel.jpg"> <!-- random image -->
                        <div class="caption left-align center">
                            <h2 class="black-text font-coming">Não sabe como enviar o arquivo e não quer perder horas esperando?</h2>
                            <a class="waves-effect waves-light btn-large indigo darken-3" href="#">PESQUISAR</a>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </div>


        @else
          <ul class="side-nav" id="mobile-demo">
            <li class="indigo darken-3"><a href="{{ url('/') }}"class="white-text"><i class="material-icons right white-text">account_circle</i>Incio </a></li>
            <li class="indigo darken-3"><a href="{{ url('login') }}"class="white-text"><i class="material-icons left white-text">person_add</i>Entrar</a></li>
            <li class="indigo darken-3"><a  href="{{ url('register') }}" class="white-text"><i class="material-icons left white-text">description</i>Criar conta</a></li>
            <li class="indigo darken-3"><a href="sobre.php" class="white-text"><i class="material-icons left white-text">info</i>Sobre </a></li>
        </ul>
        <div class="fullscreen">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="css/papel.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h1 class="black-text font-coming">Quer imprimir um arquivo facilmente?</h1>
                            <a class="waves-effect waves-light btn-large indigo darken-3" href="#">PESQUISAR</a>
                        </div>
                    </li>
                    <li>
                        <img src="css/papel.jpg"> <!-- random image -->
                        <div class="caption left-align center">
                            <h2 class="black-text font-coming">Não sabe como enviar o arquivo e não quer perder horas esperando?</h2>
                            <a class="waves-effect waves-light btn-large indigo darken-3" href="#">PESQUISAR</a>
                        </div>
                    </li>
                    <li>
                        <img src="css/papel.jpg"> <!-- random image -->
                        <div class="caption center-align center">
                            <h2 class="black-text font-coming">Cadastre-se já no nosso Site!</h2>
                            <h5 class="light black-text">Não perca tempo e utilize logo nosso serviço.</h5>
                            <br>
                            <a class="waves-effect waves-light btn-large indigo darken-3" href="#">Cadastrar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


  @endif

          <?php 
$xeroxes = App\Http\Controllers\HomeController::getXerox();

?>
        <br>
          <div class="container">

            <div class="row">
             @foreach( $xeroxes  as $xerox)
                  <div class="col s12 m4">
                    <a href="{{ url('/perfilXerox',['id'=>$xerox->id]) }}">
                     
                        <div class="card">
                            <div class="card-image">
                                <img src="css/xerox2.png">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content black-text">
                                <p>{{ $xerox->descricao }}
                                </p>
                            </div>
                            <div class="card-action center">
                                <a class="waves-effect waves-light btn" href="{{ url('/perfilXerox',['id'=>$xerox->id]) }}">Enviar Arquivo</a>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach          
          
        
            </div>
      
        </div>
       
        <br>

        <ul class="pagination center">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active indigo"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>

        <br>
    </main>
    <footer class="page-footer indigo darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text fonte-pangolin">Contato</h5>
                    <br>
                    <a class="grey-text text-lighten-3" href="#!"><i class="material-icons left">contact_mail</i>Envie um email para contato</a>
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
            $(document).ready(function(){
                $('.slider').slider({height:350, indicators:false});
            });
            $('.parallax').parallax();
            $('.modal').modal();

        });
    </script>
</body>
</html>