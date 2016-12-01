<?php
    session_start("accessProfessor");

    if( !isset($_SESSION['cod']) or !isset($_SESSION['login']) or !isset($_SESSION['senha']) or !isset($_SESSION['type_user']) or !isset($_SESSION['nome']) or !isset($_SESSION['contato']) or !isset($_SESSION['ativo']) ){
        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://localhost:8080/unipe.e3.sisedu/view/client/'>";
    } else {
    @$actionLogout = $_GET['logout'];
    if($actionLogout == true) {
        $codUser = $_SESSION['cod'];
        require_once '../../../model/Conexao.php';
        $conex  = new Conexao();
        $connection = $conex->getConnection();
        $connection->query("UPDATE usuarios SET ativo = 0 WHERE usuario = $codUser");
        session_destroy();
        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://localhost:8080/unipe.e3.sisedu/view/client/'>";
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Escola Digital</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

    <script src="../assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>#Escola Digital</b></a>
            <!--logo end-->
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="index.php?logout=true">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="profile.html"><img src="../assets/img/profile-icon-9.png" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $_SESSION['nome']; ?></h5>
                    
                  <li class="mt">
                      <a class="active" href="index.php">
                          <i class="fa fa-home"></i>
                          <span>Início</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Cadastros</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Componentes de formulário</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Relatórios</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="responsive_table.html">Componentes de tabela</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                      
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                        <div class="col-md-4 col-sm-4 mb">
                          <div class="white-panel pn donut-chart">
                            <div class="white-header">
                    <h5>SERVER LOAD</h5>
                            </div>
                <div class="row">
                  <div class="col-sm-6 col-xs-6 goleft">
                    <p><i class="fa fa-database"></i> 70%</p>
                  </div>
                            </div>
                <canvas id="serverstatus01" height="120" width="120"></canvas>
                <script>
                  var doughnutData = [
                      {
                        value: 70,
                        color:"#68dff0"
                      },
                      {
                        value : 30,
                        color : "#fdfdfd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                </script>
                          </div><!--/grey-panel -->
                        </div><!-- /col-md-4-->
                        

                        <div class="col-md-4 col-sm-4 mb">
                          <div class="white-panel pn">
                            <div class="white-header">
                    <h5>TOP PRODUCT</h5>
                            </div>
                <div class="row">
                  <div class="col-sm-6 col-xs-6 goleft">
                    <p><i class="fa fa-heart"></i> 122</p>
                  </div>
                  <div class="col-sm-6 col-xs-6"></div>
                            </div>
                            <div class="centered">
                    <img src="../assets/img/product.png" width="120">
                            </div>
                          </div>
                        </div><!-- /col-md-4 -->
                        
            <div class="col-md-4 mb">
              <!-- WHITE PANEL - TOP USER -->
              <div class="white-panel pn">
                <div class="white-header">
                  <h5>TOP USER</h5>
                </div>
                <p><img src="../assets/img/ui-zac.jpg" class="img-circle" width="80"></p>
                <p><b>Zac Snider</b></p>
                <div class="row">
                  <div class="col-md-6">
                    <p class="small mt">MEMBER SINCE</p>
                    <p>2012</p>
                  </div>
                  <div class="col-md-6">
                    <p class="small mt">TOTAL SPEND</p>
                    <p>$ 47,60</p>
                  </div>
                </div>
              </div>
            </div><!-- /col-md-4 -->
                        

                    </div><!-- /row -->
                    
                            
          <div class="row">
            <!-- TWITTER PANEL -->
            <div class="col-md-4 mb">
                          <div class="darkblue-panel pn">
                            <div class="darkblue-header">
                    <h5>DROPBOX STATICS</h5>
                            </div>
                <canvas id="serverstatus02" height="120" width="120"></canvas>
                <script>
                  var doughnutData = [
                      {
                        value: 60,
                        color:"#68dff0"
                      },
                      {
                        value : 40,
                        color : "#444c57"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                </script>
                <p>April 17, 2014</p>
                <footer>
                  <div class="pull-left">
                    <h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
                  </div>
                  <div class="pull-right">
                    <h5>60% Used</h5>
                  </div>
                </footer>
                          </div><!-- /darkblue panel -->
            </div><!-- /col-md-4 -->
            
            
            <div class="col-md-4 mb">
              <!-- INSTAGRAM PANEL -->
              <div class="instagram-panel pn">
                <i class="fa fa-instagram fa-4x"></i>
                <p>@THISISYOU<br/>
                  5 min. ago
                </p>
                <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
              </div>
            </div><!-- /col-md-4 -->
            
            <div class="col-md-4 col-sm-4 mb">
              <!-- REVENUE PANEL -->
              <div class="darkblue-panel pn">
                <div class="darkblue-header">
                  <h5>REVENUE</h5>
                </div>
                <div class="chart mt">
                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
                </div>
                <p class="mt"><b>$ 17,980</b><br/>Month Income</p>
              </div>
            </div><!-- /col-md-4 -->
            
          </div><!-- /row -->
                  
                

  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="../assets/js/sparkline-chart.js"></script>    
  <script src="../assets/js/zabuto_calendar.js"></script>  
  

  </body>
</html>
<?php } ?>