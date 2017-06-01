<!DOCTYPE html>
<html>
<head>  
    <meta charset="utf-8">
    <title>Cadastro</title>
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
                        <li><a href="index.html"><i class="material-icons left">home</i>Início</a></li>
                        <li class="active"><a  href="{{ route('register') }}"><i class="material-icons left">person_add</i>Criar conta</a></li>
                        <li><a href="{{ route('login') }}"><i class="material-icons right">account_circle</i>Entrar</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                    </ul>
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

        <ul class="side-nav" id="mobile-demo">
            <li class="indigo darken-3"><a href="login.php" class="white-text"><i class="material-icons right white-text">account_circle</i>Entrar</a></li>
            <li class="indigo darken-3"><a href="index.html" class="white-text"><i class="material-icons left white-text">home</i>Início</a></li>
            <li class="active indigo darken-3"><a href="cadastrar.php" class="white-text"><i class="material-icons left white-text">person_add</i>Criar conta</a></li>
            <li class="indigo darken-3"><a href="minhasImpressoes.php" class="white-text"><i class="material-icons left white-text">description</i>Minhas Impressões</a></li>
            <li class="indigo darken-3"><a href="sobre.php" class="white-text"><i class="material-icons left white-text">info</i>Sobre</a></li>
        </ul>

        <br><br>
        <div class="container">
            <div class="row center">
                <div class="col s12 m12">
                    <h4><strong>Criar uma nova conta</strong><br>
                        É gratuito e sempre será.
                    </h4>
                </div>
            </div>
        </div>

        <div class="divider"></div>


        <br><br><br>
        <div class="container">
            <div class="row">
                <form class="col s12 m12" method="POST" action="{{ route('register') }}">
                     {{ csrf_field() }}

                    <div class="row">
                        <div class="input-field col s6 m6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="first_name" name="name" type="text" class="validate">
                            <label for="first_name">Nome</label>
                        </div>
                        <div class="input-field col s6 m6">
                            <input id="last_name" name="sobreNome" type="text" class="validate">
                            <label for="last_name">Sobrenome</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 m6">
                            <i class="material-icons prefix">email</i>
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s6 m6">
                            <input id="email" type="email" class="validate">
                            <label for="email">Confirmação de Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 m6">
                            <i class="material-icons prefix">verified_user</i>
                            <input id="password" name="password" type="password" class="validate">
                            <label for="password">Senha</label>
                        </div>
                        <div class="input-field col s6 m6">
                            <input id="password" type="password" class="validate">
                            <label for="password">Confirmação de Senha</label>
                        </div>
                    </div>
                    <div class="row center medium">
                        <button class="btn waves-effect waves-light" type="submit" name="action">CRIAR CONTA
                        </button>
                    </div>
                </form>
            </div>
        </div>







        <br>

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