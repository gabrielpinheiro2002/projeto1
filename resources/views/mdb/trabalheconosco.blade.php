<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Trabalhe-Conosco</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="mdb/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="mdb/css/mdb.min.css" rel="stylesheet">

  <style>

    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (min-width: 851px) and (max-width: 1440px) {
      html,
      body,
      header,
      .view {
        height: 850px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 451px) and (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1200px;
      }
    }

    @media (max-width: 450px) {
      html,
      body,
      header,
      .view {
        height: 1400px;
      }
    }

    .intro-2 {
      background: url("https://cdn.dribbble.com/users/2048440/screenshots/15812785/media/c76171d0ae05861e8d9855271fc096cb.png?compress=1&resize=1000x750&vertical=top")no-repeat center center;
      background-size: cover;
    }

    .top-nav-collapse {
      background-color: #3f51b5 !important;
    }

    .navbar:not(.top-nav-collapse) {
      background: transparent !important;
    }

    @media (max-width: 768px) {
      .navbar:not(.top-nav-collapse) {
        background: #3f51b5 !important;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
            background: #3f51b5!important;
        }
    }

    .rgba-gradient {
      background: -webkit-linear-gradient(98deg, rgba(25, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
      background: -webkit-gradient(linear, 98deg, from(rgba(22, 91, 231, 0.5)), to(rgba(255, 32, 32, 0.5)));
      background: linear-gradient(to 98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
    }

    .card {
      background-color: rgba(255, 255, 255, 0.85);
    }

    h6 {
      line-height: 1.7;
    }
  </style>

</head>

<body>

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{route ('home-index')}}">
          <strong>BD Studios</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
          <a class="nav-link" href="{{route ('home-index')}}">Quem somos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('projeto-index')}}">Projetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('trabalhe-index')}}">Trabalhe Conosco</a>
            </li>
          </ul>
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!--Intro Section-->
    <section class="view intro-2">
      <div class="mask rgba-gradient">
        <div class="container h-100 d-flex justify-content-center align-items-center">

          <!--Grid row-->
          <div class="row  pt-5 mt-3">

            <!--Grid column-->
            <div class="col-md-12">

              <div class="card">
                <div class="card-body">

                  <h2 class="font-weight-bold my-4 text-center mb-5 mt-4 font-weight-bold">
                    <strong>Cadastre-se e se Torne um Dragão!</strong>
                  </h2>
                  <hr>

                  <!--Grid row-->
                  <div class="row mt-5">

                    <!--Grid column-->
                    <div class="col-md-6 ml-lg-5 ml-md-3">

                      <!--Grid row-->
                      <div class="row pb-4">
                        <div class="col-2 col-lg-1">
                          <i class="fas fa-university indigo-text fa-lg"></i>
                        </div>
                        <div class="col-10">
                          <h4 class="font-weight-bold mb-4">
                            <strong>Propósito</strong>
                          </h4>
                          <p class="">Conectar jogos e jogadores, universos e comunidades e levá-los ao próximo nível. </p>
                        </div>
                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row pb-4">
                        <div class="col-2 col-lg-1">
                          <i class="fas fa-desktop deep-purple-text fa-lg"></i>
                        </div>
                        <div class="col-10">
                          <h4 class="font-weight-bold mb-4">
                            <strong>Missão</strong>
                          </h4>
                          <p class="">Oferecer uma solução completa de publicação, distribuição e marketing para games.</p>
                        </div>
                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row pb-4">
                        <div class="col-2 col-lg-1">
                          <i class="fas fa-money-bill-alt purple-text fa-lg"></i>
                        </div>
                        <div class="col-10">
                          <h4 class="font-weight-bold mb-4">
                            <strong>Visão</strong>
                          </h4>
                          <p class="">Ser o ponto de referência no mercado de games da América Latina.</p>
                        </div>
                      </div>
                      <!--Grid row-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5">

                      <!--Grid row-->
                      <div class="row pb-4 d-flex justify-content-center mb-4">

                        <h4 class="mt-3 mr-4">
                          <strong>Entre Com:</strong>
                        </h4>

                        <div class="inline-ul text-center d-flex justify-content-center">
                          <a class="p-2 m-2 fa-lg tw-ic">
                            <i class="fab fa-google fa-lg indigo-text"></i>
                          </a>

                          <a class="p-2 m-2 fa-lg ins-ic">
                            <i class="fab fa-instagram fa-lg indigo-text"> </i>
                          </a>
                        </div>

                        <h4 class="mt-3 ml-4">
                          <strong>ou:</strong>
                        </h4>

                      </div>
                      <!--/Grid row-->

                      <!--Body-->
                      <div class="md-form">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" id="orangeForm-name" class="form-control">
                        <label for="orangeForm-name">Nome:</label>
                      </div>
                      <div class="md-form">
                        <i class="fas fa-envelope prefix"></i>
                        <input type="text" id="orangeForm-email" class="form-control">
                        <label for="orangeForm-email">Email:</label>
                      </div>

                      <div class="md-form">
                        <i class="fas fa-lock prefix"></i>
                        <input type="password" id="orangeForm-pass" class="form-control">
                        <label for="orangeForm-pass">Senha:</label>
                      </div>

                      <div class="text-center">
                        <button class="btn btn-indigo btn-rounded mt-5">Cadastre-se</button>
                      </div>

                    </div>
                    <!--Grid column-->

                  </div>
                  <!--Grid row-->

                </div>
              </div>

            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

        </div>
      </div>
    </section>
    <!--Intro Section-->

  </header>
  <!--Main Navigation-->

  <!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="mdb/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="mdb/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="mdb/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="mdb/js/mdb.min.js"></script>
  <script>
    $(document).ready(() => {
      new WOW().init();
    });
  </script>
</body>

</html>
