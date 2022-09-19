<!DOCTYPE html>
<html lang="en" class="">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>BlueDragon Studios</title>

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
        .jarallax {
          height: 700px;
        }

        @media (max-width: 740px) {
          html,
          body,
          header,
          .jarallax {
            height: 100vh;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
          html,
          body,
          header,
          .jarallax {
            height: 100vh;
          }
        }

        @media (min-width: 560px) and (max-width: 650px) {
          header .jarallax h5 {
            margin-bottom: 1.5rem !important;
          }
        }

        .top-nav-collapse {
            background-color: #6f7782 !important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #6f7782 !important;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #6f7782!important;
            }
        }
        h1 {
            letter-spacing: 8px;
        }
        h5 {
            letter-spacing: 3px;
        }
        .hr-light {
            border-top: 3px solid #fff;
            width: 80px;
        }
        footer.page-footer {
            background-color: #6f7782;
        }

        @media (max-width: 450px) {
            .btn-floating {
                margin-left: 0;
                margin-right: 0;
            }
        }

    </style>

</head>

<body>


  <!--Main Navigation-->
  <header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{route ('home-index')}}"><strong>BD Studios</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
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

    <!-- Intro Section -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://cdn.dribbble.com/users/2048440/screenshots/15812785/media/c76171d0ae05861e8d9855271fc096cb.png?compress=1&resize=1000x750&vertical=top); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-light">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12">
              <div class="text-center">
                <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-3 wow fadeInDown" data-wow-delay="0.3s"><strong>BlueDragon Studios
                    </strong></h1>
                <hr class="hr-light mt-4 wow fadeInDown" data-wow-delay="0.4s">
                <h5 class="text-uppercase mb-5 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Estúdio de Criação de Games 
                    </strong></h5>
                <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Quem somos</a>
                <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Notícias</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>
  <!--Main Navigation-->


  <!--Main Layout-->
  <main>

    <div class="container">

      <!--Section: Blog v.3-->
      <section class="section extra-margins pb-3 text-center text-lg-left wow fadeIn" data-wow-delay="0.3s">

        <!--Section heading-->
        <h2 class="font-weight-bold text-center h1 my-5">Quem somos?</h2>
        <!--Section description-->
        <p class="text-center grey-text mb-5 mx-auto w-responsive">A BlueDragon Studios foi fundada em 2020 na cidade de São Paulo com o objetivo de desenvolver, 
          distribuir e apoiar os maiores e melhores jogos com foco nos jogadores do mundo. Em 2021, nós lançamos o Warriors of legends, nosso título de estreia,
           aclamado no mundo todo. O WoL cresceu até se tornar o título de PC mais jogado do mundo, transformando-se em um dos principais fatores do crescimento 
           explosivo do cenário de Esports. </p>
        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-4 mb-4">
            <!--Featured image-->
            <div class="view overlay z-depth-1">
              <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kayn_15.jpg" class="img-fluid" alt="First sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 mb-4">
            <!--Excerpt-->
            <a href="" class="teal-text">
              <h6 class="pb-1"><i class="fas fa-heart"></i><strong> Warriors of Legends </strong></h6>
            </a>
            <h4 class="mb-4"><strong>Warriors of Legends o Novo MOBA de Sucesso </strong></h4>
            <p>Warriors of Legends é um jogo eletrônico do gênero multiplayer online battle arena desenvolvido e publicado pela Blue Dragon Studios. 
              Foi lançado em outubro de 2021 para Microsoft Windows e em março de 2022 para macOS</p>
            <p>by <a><strong>Mariana Fernandes</strong></a>, 26/08/2022</p>
            <a class="btn btn-primary">Leia mais</a>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class="mb-5">

        <!--Grid row-->
        <div class="row mt-3">

          <!--Grid column-->
          <div class="col-lg-4 mb-4">
            <!--Featured image-->
            <div class="view overlay z-depth-1">
              <img src="https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2015/07/14/1331735127219_2/games-esports" class="img-fluid" alt="Second sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 mb-4">
            <!--Excerpt-->
            <a href="" class="cyan-text">
              <h6 class="pb-1"><i class="fas fa-plane"></i><strong> Ao redor do mundo</strong></h6>
            </a>
            <h4 class="mb-4"><strong>E-SPORTS Dominando tudo </strong></h4>
            <p>O Campeonato Mundial de Warriors of Legends, que acontece anualmente, conta com equipes de Esports qualificadas de 12 ligas internacionais. 
              O Mundial é o campeonato mais assistido e acompanhado de Esports e está entre os maiores e mais populares eventos de jogos e esportes do mundo todo. </p>
            <p>by <a><strong>Mariana Fernandes</strong></a>, 24/08/2022</p>
            <a class="btn btn-primary">Leia mais</a>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class="mb-5">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-4 mb-4">
            <!--Featured image-->
            <div class="view overlay z-depth-1">
              <img src="https://notagamer.net/wp-content/uploads/2022/05/lol-1024x690.jpg" class="img-fluid" alt="Third sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 mb-4">
            <!--Excerpt-->
            <a href="" class="brown-text">
              <h6 class="pb-1"><i class="fas fa-heart"></i><strong> Inclusão</strong></h6>
            </a>
            <h4 class="mb-4"><strong>Todos São bem Vindos </strong></h4>
            <p>Relatório de Progresso Anual de Diversidade e Inclusão (D&I) – 2021</strong></h4>
            <p>Continuamos a ter uma tendência positiva na representação das mulheres, especificamente em nossas fileiras de liderança, 
              sendo que as mulheres agora compreendem 25% do nosso conselho de liderança.</p>
            <p>by <a><strong>Amanda Nunes</strong></a>, 21/08/2021</p>
            <a class="btn btn-primary">Leia Mais</a>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class="mb-5">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-4 mb-4">
            <!--Featured image-->
            <div class="view overlay z-depth-1">
              <img src="https://notagamer.net/wp-content/uploads/2021/11/Riot-Forge-750x375.jpg" class="img-fluid" alt="Third sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 mb-4">
            <!--Excerpt-->
            <a href="" class="red-text">
              <h6 class="pb-1"><i class="fas fa-heart"></i><strong> Novidades em Breve</strong></h6>
            </a>
            <h4 class="mb-4"><strong>Novos jogos por ai !</strong></h4>
            <p>Como qualquer boa e grande empresa de Jogos no mercado , nós da Blue Dragon Studios estamos buscando novos horizontes e não pretendemos ficar parados.
              novas equipes e times de desenvolvimento vem sendo formados para abrir novos horizontes no mundo dos GAMES!.
            </p>
            <p>by <a><strong>Felipe Martins</strong></a>, 24/04/2022</p>
            <a class="btn btn-primary">Leia Mais</a>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Pagination dark-->
        <nav class="wow fadeIn mb-4 mt-5" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
          <ul class="pagination pg-dark flex-center">
            <!--Arrow left-->
            <li class="page-item">
              <a class="page-link waves-effect waves-effect" aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>

            <!--Numbers-->
            <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
        

            <!--Arrow right-->
            <li class="page-item">
              <a class="page-link waves-effect waves-effect" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
        <!--/Pagination dark-->

      </section>
      <!--Section: Blog v.3-->

      <hr class="mb-5">

      <!--Section: Blog v.2-->
      <section class="section extra-margins text-center pb-3 wow fadeIn" data-wow-delay="0.3s">

      </section>
      <!--Section: Blog v.2-->

    </div>

  </main>
  <!--Main Layout-->


  <!--Footer-->
  <footer class="page-footer pt-4 mt-4   text-center text-md-left">

    <!--Footer Links-->
    <div class="container">
      <div class="row">

        <!--First column-->
        <div class="col-md-3">
          <h5 class="text-uppercase font-weight-bold">Blue Dragon Studios </h5>
          <p>Nos acompanhe nas redes sociais para mais informações e novidades!</p>
        </div>
        <!--/.First column-->

        <hr class="w-100 clearfix d-md-none">

         <!--Fourth column-->
         <div class="col-md-2 ml-auto">
          <h5 class="text-uppercase font-weight-bold">Contato</h5>
          <ul class="list-unstyled">
            <li><a href="#!">Email:contato@bdstudios.com</a></li>
            <li><a href="#!">Instagram:@BlueDragonStudios</a></li>
            <li><a href="#!">Local:São Paulo-Brasil</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Social buttons-->
    <div class="text-center mb-3">

      <a class="btn-floating btn-fb"><i class="fab fa-facebook-f"> </i></a>
      <a class="btn-floating btn-tw"><i class="fab fa-twitter"> </i></a>
      <a class="btn-floating btn-gplus"><i class="fab fa-google-plus-g"> </i></a>
      <a class="btn-floating btn-dribbble"><i class="fab fa-instagram"> </i></a>

    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2020 Copyright: <a href="https://mdbootstrap.com/docs/jquery/"> bluedragonstudios.com </a>

      </div>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->


  <!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="mdb/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src=".mdb/js/popper.min.js"></script>
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
