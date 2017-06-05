<?ob_start('ob_gzhandler');include("cms/config.inc.php");?>
<!DOCTYPE html>
<html lang="pt-BR, en">
<head>
    <meta http-equiv="content-language" content="pt-br, en-US" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Clinica medica para consultas nas mais diversas especialidades da medicina em Fortaleza. Aluguel de consultorios mobiliados. Atendemos todo o Ceara.">
    <meta name="keywords" CONTENT="Clinica medica, Fisioterapia, Otorrino, Ginecologia obstetricia, Clinica geral, Cardiologista, Fisioterapia, Pilates, Pediatria, Dermatologia, Fonoaudiologia, Pediatria, Multiclinic, Nordeste, Cear�, Fortaleza, Cidade dos funcionarios, Cambeba">
    <meta name="author" content="multiclinic.com.br">
    <title>Clinica Medica | Aluguel de Consultorios | Multiclinic</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu">
    <!-- Custom styles -->
    <link href="dist/css/clinica-medica.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="120x120" href="dist/img/apple-touch-icon-120x120-precomposed.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="dist/img/apple-touch-icon-152x152-precomposed.png" />
    <link rel="shortcut icon" sizes="196x196" href="dist/img/android-icon-192x192.png">
    <link rel="shortcut icon" href="dist/img/favicon.ico">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
    <a class="navbar-brand" href="#"><img class="img-fluid rounded" src="dist/img/logo-150x50.jpg" alt="Multiclinic Clinica Medica Fortaleza"></a>
          <div class="collapse navbar-collapse" id="navbarExample">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a class="nav-link" href="#">Clinica Medica<span class="sr-only">(current)</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Especialidades Medicas</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Aluguel de Consultorios</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Contato e Localizaçao</a></li>
              </ul>
          </div>
      </div>
  </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row my-4">
            <div class="col-lg-8">
                <img class="img-fluid rounded" src="dist/img/multiclinic-clinica-medica.jpg" alt="Multiclinic Fortaleza">
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">
              <? content("index_principal_1");?>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Call to BreadCrumbs -->
        <div class="card card-inverse card-primary my-4 text-center">
            <div class="breadcrumbs">
                    <? content("index_breadcrumbs");?>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-block">
                      <? content("index_conteudo_1");?>
                    </div>
                    <div class="card-footer">
                      <? content("index_conteudo_1b");?>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-block">
                      <? content("index_conteudo_2");?>
                    </div>
                    <div class="card-footer">
                      <? content("index_conteudo_2b");?>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-block">
                      <? content("index_conteudo_3");?>
                    </div>
                    <div class="card-footer">
                      <? content("index_conteudo_3b");?>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->

        </div>
        <!-- /.row -->

        <!-- Call to Action Well -->
        <div class="card card-outline-primary my-4 text-center">
            <div class="card-block">
              <? content("index_conteudo_4");?>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
  <footer class="py-2 bg-inverse">
        <div class="container">
          <? content("index_conteudo_footer");?>
        </div>
    </div>
        <!-- /.container -->
  </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="dist/jquery/jquery.min.js"></script>
    <script src="dist/tether/tether.min.js"></script>
    <script src="dist/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
<?ob_end_flush();?>
