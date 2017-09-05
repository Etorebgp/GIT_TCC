<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$db = "pdadb";

	$mysqli = mysqli_connect ($host,$usuario,$senha,$db);
if ($mysqli){
}

$query = "SELECT * from usuarios";
$stmt = mysql_query($query,$mysqli); //lembrando que aqui deve vir a sua conexão com o banco de dados
echo "<table>";
echo "<tr><td>Nome:</td><td>Cidade</td></tr><td>Cidade</td></tr><td>Cidade</td></tr>";
while($resultado = mysql_fetch_array($stmt)){
echo "<tr><td>".$resultado['Nome']."</td><td>".$resultado['Cidade']."</td></tr>";
}
echo "</table>";

?>

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
                <p class="lead">Pontuação PIV</p>
                <div class="list-group">
                  <a href="#" class="list-group-item">Insira abaixo seu CPF para consultar sua pontuação atual <br/><input type "textarea"><br/> <input type="button" value="Consultar" onclick=""></a>


                </div>
            </div>

            <div class="col-md-9">
                <p class="lead">Classificação</p>
                <table border="1">
                  <tr>
                  <td>linha 1, célula 1</td>
                  <td>linha 1, célula 2</td>
                  </tr>
                  <tr>
                  <td>linha 2, célula 1</td>
                  <td>linha 2, célula 2</td>
                  </tr>
                  </table>
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
