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

  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : 'your-app-id',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<form method="post" name="FormIndex" action="conexao.php">

  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId            : 'your-app-id',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v2.10'
      });
      FB.AppEvents.logPageView();
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
    </script>

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
                        <a href="noticias.php">Avisos</a>
                    </li>
                    <li>
                        <a href="project.php">Projeto</a>
                    </li>
                    <li>
                        <a href="voluntario.php">Seja um voluntário</a>
                    </li>
                    <li>
                        <a href="#">Login</a>
                    </li>
                    <li>
                        <a href="pnes.php">PNE's</a>
                    </li>
                    <li>
                        <a href="doacao.php">Doação</a>
                    </li>
                    <li>
                        <a href="contact.php">Contato</a>
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
                    <a href="#" class="list-group-item">Corridas</a>
                    <a href="#" class="list-group-item">Classificação PDI</a>
                    <a href="#" class="list-group-item">Redes Sociais</a>
                </div>
                <p class="lead">Noticias</p>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpernasdealuguelcampinas%2F&tabs=timeline&width=850&height=430&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="260" height="950" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" aligh="middle"></iframe>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/banner1.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/xan_joao.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/voluntarios.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <p class="lead">Próximas corridas</p>
                <div class="row">
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/banner_corrida_ponte.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">R$85.00</h4>
                                <h4><a href="#">Corrida Ponte Preta</a>
                                </h4>
                                <p>20/08 - Inscreva-se no link <a target="_blank" href="https://www.ativo.com/calendario/todos/america-do-sul/br/sp/campinas/corrida-de-rua/33156/ponte-10km">Corrida Ponte</a> e informe sua participação na corrida pelo site.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/banner_corrida_distritos.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">R$30.00</h4>
                                <h4><a href="#">Corrida dos distritos</a>
                                </h4>
                                <p>10/09 - Inscreva-se no link <a target="_blank" href="https://www.ativo.com/calendario/todos/america-do-sul/br/sp/campinas/corrida-de-rua/33156/ponte-10km">Corrida Distritos</a> e informe sua participação na corrida pelo site.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/banner_corrida_integracao.jpg" alt="">
                            <div class="caption">
                              <h4 class="pull-right">R$30.00</h4>
                              <h4><a href="#">Corrida Integração</a>
                              </h4>
                              <p>24/09 - Inscreva-se no link <a target="_blank" href="https://www.ativo.com/calendario/todos/america-do-sul/br/sp/campinas/corrida-de-rua/33156/ponte-10km">Corrida Distritos</a> e informe sua participação na corrida pelo site.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="lead">Primeiros colocados da Semana no programa de PDI</p>
                <div class="row">
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/pdi_1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1 lugar</h4>
                                <h4><a href="#">Virgo Gomes</a>
                                </h4>
                                <p> Prontuação total: 1000</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                          <img src="images/pdi_2.jpg" alt="">
                          <div class="caption">
                              <h4 class="pull-right">2 lugar</h4>
                              <h4><a href="#">Henrique Soare</a>
                              </h4>
                              <p> Prontuação total: 900</p>
                          </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/pdi_3.jpg" alt="">
                            <div class="caption">
                              <h4 class="pull-right">3 Lugar</h4>
                              <h4><a href="#">André Madureira</a>
                              </h4>
                              <p>Pontuação total: 800 pontos</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="lead">Redes Sociais</p>
                <div class="row">
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail2">
                            <img src="icons/facebook.jpg" alt="">
                            <p><a href="https://www.facebook.com/pernasdealuguelcampinas/">Facebook Pernas no Parque</a></p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                      <div class="thumbnail2">
                          <img src="icons/whatsapp.jpg" alt="">
                          <p><a href="#">19 99924-8636</a></p>
                      </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                      <div class="thumbnail2">
                          <img src="icons/instagram.png" alt="">
                          <p><a href="https://www.instagram.com/pernasdealuguel/">Instagram Pernas no Parque</a></p>
                      </div>
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
</form>
</body>

</php>
