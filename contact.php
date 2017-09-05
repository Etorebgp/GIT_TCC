<!DOCTYPE php>
<php lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pernas no Parque Campinas</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Pernas no Parque Campinas</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                      <a href="noticias.php">Noticias</a>
                  </li>
                    <li>
                        <a href="project.php">Projeto</a>
                    </li>
                    <li>
                        <a href="pnes.php">PNE's</a>
                    </li>
                    <li>
                        <a href="doacao.php">Doação</a>
                    </li>
                    <li>
                        <a href="#">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="icons/pda.png">
                <p class="lead">Canais de comunicação</p>
                <div class="list-group">


                    <div id="icons">

                            <img src="icons/facebook.jpg" alt="">
                            <p><a href="https://www.facebook.com/pernasdealuguelcampinas/">Facebook Pernas no Parque</a></p>

                          <img src="icons/whatsapp.jpg" alt="">
                          <p><a href="#">19 99924-8636</a></p>


                          <img src="icons/instagram.png" alt="">
                          <p><a href="https://www.instagram.com/pernasdealuguel/">Instagram Pernas no Parque</a></p>

                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <p class="lead">Contato</p>
                <div class="row">
                  <p>
                      Entre em contato por uma das redes sociais abaixo, pelo formulário ou venha nos visitar no Pernas no Parque no taquaral e Parque ecologico de campinas.
                  </p>
                  <p class="lead">Redes Sociais</p>
                  <div class="row">


                  <div class="col-md-9">
                                    <form class="form-horizontal" role="form">
                                        <h2>Contato</h2>

                                            <label for="firstName" class="col-sm-3 control-label">Nome</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="firstName" placeholder="Nome Completo" class="form-control" autofocus>
                                            </div>



                                            <label for="email" class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" id="email" placeholder="Email" class="form-control">

                                        </div>

                                            <label for="texto" class="col-sm-3 control-label">Mensagem</label>
                                            <div class="col-sm-9">
                                                <input type="textarea" id="texto" placeholder="Texto" class="form-control">
                                            </div>


                                            <div class="col-sm-9 col-sm-offset-3">
                                                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                                            </div>

                                    </form> <!-- /form -->
                  </div>

                      

                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</php>
