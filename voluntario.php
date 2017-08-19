

<!DOCTYPE php>
<php lang="en">

<head>
<!--teste-->
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
                        <a href="#">Projeto</a>
                    </li>
                    <li>
                        <a href="#">Seja um voluntário</a>
                    </li>
                    <li>
                        <a href="#" onclick="MostrarDivAcesso('formLogin')">Login</a>
                    </li>
                    <li>
                        <a href="#">PNE's</a>
                    </li>
                    <li>
                        <a href="#">Doação</a>
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
                <p class="lead">Principais informações</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Cadastro</a>
                </div>
            </div>

            <div class="col-md-9">


                              <form class="form-horizontal" role="form" id="formCadastro">
                                  <h2>Cadastro</h2>
                                  <div class="form-group">
                                      <label for="firstName" class="col-sm-3 control-label">Nome Completo</label>
                                      <div class="col-sm-9">
                                          <input type="text" id="firstName" placeholder="Nome Completo" class="form-control" autofocus>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label for="kg" class="col-sm-3 control-label">Peso</label>
                                      <div class="col-sm-9">
                                          <input type="text" id="peso" placeholder="Peso" class="form-control" autofocus>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="age" class="col-sm-3 control-label">Idade</label>
                                      <div class="col-sm-9">
                                          <input type="text" id="age" placeholder="Idade" class="form-control" autofocus>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label for="email" class="col-sm-3 control-label">Email</label>
                                      <div class="col-sm-9">
                                          <input type="email" id="email" placeholder="Email" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="password" class="col-sm-3 control-label">Senha</label>
                                      <div class="col-sm-9">
                                          <input type="password" id="password" placeholder="Senha" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="birthDate" class="col-sm-3 control-label">Data de Nascimento</label>
                                      <div class="col-sm-9">
                                          <input type="date" id="birthDate" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="country" class="col-sm-3 control-label">Estado</label>
                                      <div class="col-sm-9">
                                          <select id="country" class="form-control">
                                              <option>Brasil</option>
                                              <option>Bahamas</option>
                                              <option>Cambodia</option>
                                              <option>Denmark</option>
                                              <option>Ecuador</option>
                                              <option>Fiji</option>
                                              <option>Gabon</option>
                                              <option>Haiti</option>
                                          </select>
                                      </div>
                                  </div> <!-- /.form-group -->
                                  <div class="form-group">
                                      <label class="control-label col-sm-3">Sexo</label>
                                      <div class="col-sm-6">
                                          <div class="row">
                                              <div class="col-sm-4">
                                                  <label class="radio-inline">
                                                      <input type="radio" id="femaleRadio" value="Female">Mulher
                                                  </label>
                                              </div>
                                              <div class="col-sm-4">
                                                  <label class="radio-inline">
                                                      <input type="radio" id="maleRadio" value="Male">Homem
                                                  </label>
                                              </div>
                                          </div>
                                      </div>
                                  </div> <!-- /.form-group -->
                                  <div class="form-group">
                                      <div class="col-sm-9 col-sm-offset-3">
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox">Eu aceito os <a href="#">Termos e Condições</a>
                                              </label>
                                          </div>
                                      </div>
                                  </div> <!-- /.form-group -->
                                  <div class="form-group">
                                      <div class="col-sm-9 col-sm-offset-3">
                                          <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                                      </div>
                                  </div>
                              </form> <!-- /form -->
                              <form class="form-horizontal" role="form" id="formLogin"  style="display:none;position:absolute;top:15%;left:35%;margin-left:-150px;margin-top:-100px;padding:10px;width:600px;height:400px;border:1px solid #d0d0d0" method="POST" action="banco_transacoes/transacao.php">
                                  <div class="form-group">
                                      <label for="login" class="col-sm-3 control-label">Login</label>
                                      <div class="col-sm-9">
                                          <input type="text" id="login" placeholder="Login" class="form-control" autofocus>
                                      </div>
                                  </div>
                                  <div class="form-group" id="oi">
                                      <label for="password" class="col-sm-3 control-label">Senha</label>
                                      <div class="col-sm-9">
                                          <input type="password" id="password" placeholder="Senha" class="form-control" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <button type="button" class="btn btn-primary btn-block" onclick="ab()">Acessar</button>
                                        <input type=submit class="btn btn-primary btn-block" >
                                      </div>
                                  </div>
                              </form>
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
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</php>
