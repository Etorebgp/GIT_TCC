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
                <a class="navbar-brand" href="../index.php">Pernas no Parque Campinas</a>
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
                        <a href="voluntario.php">Seja um voluntário</a>
                    </li>

                    <li>
                        <a href="pnes">PNE's</a>
                    </li>
                    <li>
                        <a href="doacao.php">Doação</a>
                    </li>
                    <li>
                        <a href="contact.php">Contato</a>
                    </li>
                    <li>
                        <a href="#">Sair</a>
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
                <p class="lead">Relatórioss</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Doações</a>
                    <a href="#" class="list-group-item">PIV</a>
                    <a href="#" class="list-group-item">Inscritos em Corridas</a>
                    <a href="#" class="list-group-item">Novos Cadastros</a>
                    <a href="adm/avisos_adm.php" class="list-group-item">Inserir noticia no mural</a>
                    <a href="adm/enviaradm.php" class="list-group-item">enviar avisos para voluntários(Email/Whatsapp)</a>
                </div>
            </div>

            <div class="relatorios" id="relatorios">
                  <table id="tblDoacoes" border=5>
                    <TR>
                      <TD>PRIMEIRA COLUNA </TD>
                      <TD>SEGUNDA COLUNA </TD>
                      <TD>TERCEIRA COLUNA </TD>
                    </TR>
                    <TR>
                      <TD> PRIMEIRA COLUNA</TD>
                      <TD>SEGUNDA COLUNA </TD>
                      <TD>TERCEIRA COLUNA </TD>
                    <TR>
                  </TABLE>
                  <br/>
                  <table id="tblPIV" border=5>
                    <TR>
                      <TD>Posição </TD>
                      <TD>1 </TD>
                      <TD>2</TD>
                      <TD>3</TD>
                      <TD>4</TD>
                      <TD>5</TD>
                      <TD>6</TD>
                      <TD>7</TD>
                      <TD>8</TD>
                      <TD>9</TD>
                      <TD>10</TD>
                    </TR>
                    <TR>
                      <TD> Nome</TD>
                      <TD>------------ </TD>
                      <TD>------------ </TD>
                      <TD>------------ </TD>
                      <TD>------------ </TD>
                      <TD>------------ </TD>
                      <TD>------------ </TD>
                      <TD>------------ </TD>
                      <TD>------------ </TD>
                      <TD>------------ </TD>
                      <TD>------------ </TD>
                    <TR>
                  </TABLE>
                  <br/>
                  <table id="tblCorridas" border=5>
                    <TR>
                      <TD>Corrida </TD>
                      <TD>Ponte-Preta 10km </TD>
                      <TD>Integração 5km </TD>
                    </TR>
                    <TR>
                      <TD> Quantidade de Inscritos</TD>
                      <TD>50 </TD>
                      <TD>10 </TD>
                    <TR>
                  </TABLE>
                  <br/>
                  <table id="tblCadastros" border=5>
                    <TR>
                      <TD>Janeiro </TD>
                      <TD>Fevereiro </TD>
                      <TD>Março </TD>
                    </TR>
                    <TR>
                      <TD>10</TD>
                      <TD>5 </TD>
                      <TD>30 </TD>
                    <TR>
                  </TABLE>
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
