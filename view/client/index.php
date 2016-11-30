<?php
    require_once '../../model/Evento.php';
    require_once './Fachada.php';

    $fachada = new Fachada();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sisedu</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                
             <!--  <a class="navbar-brand page-scroll" href="#page-top">#Escola Digital</a>-->
                <a href="#page-top""><img src="img/logo_escoledigital09.png"/></a>
              </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#services">Serviços</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Cursos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Eventos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Equipe</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contato</a>
                    </li>
                    <li>
                       <a class="page-scroll"></a>
                    </li>
                     <li class="dropdown">
          				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-user icon-2x"></i></a>
          				<ul class="dropdown-menu" style="width: 250px; padding: 15px;">
	          				<form class="form-group" style="margin-bottom: 0;">
				          		<li>
					          		<p><input type="text" name="Login" class="form-control" placeholder="Usuário"></p>
				          		</li>
				            	<li>
					            	<p><input type="password" name="Login" class="form-control" placeholder="Senha"></p>
				            	</li>
				            	<li role="separator" class="divider"></li>
				            	<li class="text-center"><button class="btn btn-default" style="background-color: #292929; color: #fff">Login</button></li>
	          				</form>
           
          				</ul>
        			</li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Seja bem-vindo a nossa escola!</div>
                <div class="intro-heading">Prepare-se para uma nova experiência.</div>
                <a href="#services" class="page-scroll btn btn-xl">Veja Mais...</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Serviços</h2>
                    <h3 class="section-subheading text-muted">Tudo para o universo web.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">E-Commerce</h4>
                    <p class="text-muted">o curso para E-Commerce tem como foco preparar o aluno para aprender sobre todas as ferramentas web que auxiliam no desenvolvimento...</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Desenvolvimento</h4>
                    <p class="text-muted">O curso de Desenvolvimento tem o obletivo de fornecer as mais novos conhecimentos na área de desenvolvimento web...</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Segurança Web</h4>
                    <p class="text-muted">A segurança de aplicações web é um das mais impportantes áreas a serem consideradas quando o assunto é ...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Cursos</h2>
                    <h3 class="section-subheading text-muted">veja o que temos a oferecer!.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Identidade Visual</h4>
                        <p class="text-muted">Design Gráfico</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Frameworks</h4>
                        <p class="text-muted">Ferramentas Ágeis.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Web Design</h4>
                        <p class="text-muted">Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>E-commerce</h4>
                        <p class="text-muted">Comércio Eletrônico</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Segurança</h4>
                        <p class="text-muted">Segurança de aplicações</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Desenvolvimento</h4>
                        <p class="text-muted">Desenvolvimento Web</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Eventos</h2>
                    <h3 class="section-subheading text-muted">Saiba tudo que acontece de novo.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">

                        <?php
                        $exibeEventos = $fachada->exibeEvento();
                        $i = 0;
                        foreach ($exibeEventos as $line) {
                        $i++;
                        ?>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/<?php echo "$i"; ?>.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo "$line[titulo]"; ?></h4>
                                    <h4 class="subheading"><?php echo "$line[data]"; ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo "$line[descricao]"; ?></p>
                                </div>
                            </div>
                        </li>
                        <?php } ?>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Vem mais
                                    <br>por 
                                    <br>ai!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Conheça melhor nossa equipe.</h2>
                    <h3 class="section-subheading text-muted">Veja quem faz parte...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Mary Lou</h4>
                        <p class="text-muted">Diretora</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Coordenador</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Gerente de Ensino</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="java">
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="html5">
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="mysql">
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="php">
                    
                </div>
            </div>
        </div>
    </aside>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contato</h2>
                    <h3 class="section-subheading text-muted">Qualquer dúvida é só entrar em contato.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Seu Nome *" id="name" required data-validation-required-message="Digite seu Nome.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Seu Email *" id="email" required data-validation-required-message="Digite o email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Seu telefone *" id="phone" required data-validation-required-message="Digite seu telefone.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Sua menssagem *" id="message" required data-validation-required-message="escreva sua menssagem."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">SPI - P3 - 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#"></a>
                        </li>
                        <li><a href="#">Voltar ao topo!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Identidade Visual</h2>
                                <p class="item-intro text-muted">Criando a sua imagem.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                <p>O curso de Identidade Visual tem o objetivo de ensinar aos nossos alunos como desenvolver logos, layout e componetes visuais, com as ferramnetas mais atuais do mercado, abordando também as novas tendências através de um material didático atualizado.</p>
                                <p>
                               
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Voltar...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Frameworks.</h2>
                                <p class="item-intro text-muted">Desenvolvimento Ágil.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                <p>O curso de Framework tem a proposta de ensinar aos nossos alunos quais são as ferramentas de desenvolvimento ágil mais utilizadas da área de desnvolvimento web e como utiliza-lás em seus projetos.</p>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Voltar...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Web Design</h2>
                                <p class="item-intro text-muted">Criando Projetos web</p>
                                <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                <p>O curso de Web Design tem o foco no desenvolvimento de interfaces para web sites e demais aplicações web.utilizando das ferramentas e conhecimento em desenvolvimento de interfaces web.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Voltar...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>E-commerce.</h2>
                                <p class="item-intro text-muted">O menor esforço pelo melhor caminho.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                                <p>O curso de Ecommerce visa o desnvolvimento de sistemas para o comércio eletrônico, utlizando de conhecimentos e ferramentas que integram todo um sistema de informação.</p>
                               
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Voltar...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Segurança</h2>
                                <p class="item-intro text-muted">Tem que ser bonite.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                                <p>A segurança com alicações web tem sido uma crescente preocupação uma vez que o número de usuários utilizado as aplicações e os serviços web só almenta.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Voltar...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Desenvolvimento Web</h2>
                                <p class="item-intro text-muted">conhecendo todas as partes.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                                <p>o desenvolvimento web aborda todas as áreas que envolvem o desenvolvimento de aplicações e serviços web.Com a proposta de formar um profissional capacitado para atuar em qualquer área web </p>
                                
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Voltar...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
