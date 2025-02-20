<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "ercresp@2021";
$dbname = "mydatabase";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$query = " SELECT * FROM mytable WHERE id =  1 ";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$data = $row['div1'];
$contedit="true";
?>

<!-- italian version-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css"

      rel="stylesheet">
    <!-- owl carousel-->
    <link href="../css/owl.carousel.min.css" rel="stylesheet">
    <link href="../css/owl.theme.default.min.css" rel="stylesheet">
    <!-- font awesome -->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <!-- jquery-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!----- Title of the webpage-->
    <title>The Roman Emperor Seen from the Provinces(RESP)</title>
    <!--   end title -->
  </head>
  <!-- -------------------------- main content ------------------------------------- -->
  <body>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="js/owlscript.js"> </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"

      rel="stylesheet">
    <!-- ------------------------- header ----------------------------------------- -->
    <div class="row" id="headercontainer">
      <div class="col-sm-3 mx-auto" >
        <center>
      <img src="../images/RESP.png" alt="resp logo" class="center" id="headerimg" > </center>
      </div>
    <div class="col-sm-9">
      <h1 id="headertext" > <strong align="center" style="color:hsl(0, 68%, 27%);font-size:45px">The Roman Emperor Seen from the Provinces </strong> <br>
        Imaging Roman Power in the Cities of the Empire from Augustus to the Tetrarchs (31 BC-AD 297)</h1>
    </div>
    </div>
  
  <!-- ---------------------------------------- header --------------------------------------- -->
    <!-- ------------------------------------- Menu --------------------------------------------------------------- -->
    <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
      <div class="container-fluid">
        <div class="btn-group" role="group" aria-label="Basic example"> 
          <a target="_parent" class="nav-link" href="../index.php"><i class="flag-icon flag-icon-gb"></i></a>
          <a target="_parent" class="nav-link" href="index.php" exact><i class="flag-icon flag-icon-it"></i></a>
          <a target="_parent" class="nav-link" href="signin.php"><i class="fas fa-sign-in-alt"></i>MY
            RESP</a> 
          </div>
        <button class="navbar-toggler btn-sm" type="button" data-bs-toggle="collapse"

          data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"

          aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"  title="Home">
                <i class="fas fa-landmark"></i> <span></span></a> </li>
            <li class="nav-item"> <a target="_parent" class="nav-link" href="project.php" exact>Il Progetto</a> </li>
            <li class="nav-item"> <a class="nav-link " href="aboutus.php">Il Gruppo di Ricerca</a> </li>
            <li class="nav-item"> <a class="nav-link " href="partners.php">Partners</a> </li>
            <li class="nav-item"> <a class="nav-link " href="activities.php">Attività</a></li>
            <li class="nav-item"> <a class="nav-link " href="resources.php">Risorse</a> </li>
            <li class="nav-item"> <a class="nav-link " href="contact.php">Contatti</a></li>
        </ul>
          <form class="d-flex"> <input class="form-control me-2" placeholder="Cerca"

              aria-label="Search" type="search"> <button class="btn btn-secondary"

              type="submit"> <i class="fas fa-search"></i> </button> </form>
        </div>
      </div>
    </nav>
    <!-- ---------------------------------------------------- end of menu ------------------------------------------ -->
    <!-- --------------------------------------------- Image gallery-------------------------------------------------- -->
    <div class="owl-carousel owl-theme">
      <div class="item"><img src="../images/SS1.jpg" class="responsive"></div>
      <div class="item"><img src="../images/SS2.jpg" class="responsive"></div>
      <div class="item"><img src="../images/SS3.jpg" class="responsive"></div>
      <div class="item"><img src="../images/SS4.jpg" class="responsive"></div>
      <div class="item"><img src="../images/SS5.jpg" class="responsive"></div>
      <div class="item"><img src="../images/SS6.jpg" class="responsive"></div>
      <div class="item"><img src="../images/SS7.jpg" class="responsive"></div>
      <div class="item"><img src="../images/SS8.jpg" class="responsive"></div>
      <div class="item"><img src="../images/SS9.jpg" class="responsive"></div>
      <div class="item"><img src="../images/SS10.jpg" class="responsive"></div>
      <div class="item"><img src="../images/SS11.jpg" class="responsive"></div>
      <div class="item"><img src="../images/SS12.jpg" class="responsive"></div>  
    </div>
    <!-- ------------------------------------------------- end of image gallery ---------------------------------------- -->
    <!-- ---------------------------------------- main page content ------------------------------------------- -->
    <div class="container">
      <div class="page-header"> </div>
      <div class="row grid-divider">
        <div class="col-sm-6">
          <div class="col-padding" id="col1">
            <h2>Attività del progetto</h2>
            <a class="btn btn-light" role="button" href="#" id="btndown"> Show</a>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="col-padding" id="col1">
            <h3>News</h3>
            <p>italian version</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="col-padding" id="col1">
            <h3>Link utili</h3>
            <p>test 123</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="col-padding" id="col1">
            <h3>Archivi</h3>
            <p>italian version</p>
          </div>
        </div>
      </div>
    </div>
    <!-- ---------------------------------------------- end of main page content ------------------------------------- -->
     <!-- ------------- page footer ----------------------------------------- -->
  <footer class="page-footer font-small black pt-4" >
    <div class="container-fluid text-center text-md-left wrapper" id="ourfooter">
      <div class="row " >
        <div class="col-6">
          <br>
          <p align="justify"> This project has received funding from the
            European Research Council (ERC) under the European Union's Horizon
            2020 research and innovation programme (grant agreement n°
            101002763). <br> <br>
            The content of this Website reflects only the author’s
            views and the European Union is not liable for any use that may be
            made of the information contained therein. </p>
        </div>
        <div class="col-6" style="margin: auto">
          <img src="../images/flag_yellow_high.jpg" alt="eu-logo" class="responsive" id="footerimg">
          <img src="../images/LOGO-ERC_negatif.jpg" alt="eu-logo" class="responsive" id="footerimg">
         <img src="../images/univrlogo.png" alt="" class="responsive" id="footerimg"> 
        </div>
      </div>
    </div>
  </footer>
  <!-- ------------------------------------------ end of  Footer ----------------------------------------------- -->
  </body>
</html>
