<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Long Term Memory by Group 3</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/> <!--tachyons import-->
  <script type="text/javascript" src="words.js"></script>

</head>

<body>

  <!--HTML & CSS--> 

    <!--Main Navigation-->
    <div class="container-fluid">
        <header>
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar center" style="background-color:#19a974;">
              <p class="navbar-brand"><strong>Group 3</strong></a> <!--Make this a logo-->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <a class="nav-item active f1 text-white grow nav-link center" href="index.php"><strong>LONG TERM MEMORY</strong><span class="sr-only">(current)</span></a>
                <a class="nav-item text-white pa2 ba br3 dim ma1" href="group.html"><strong>The Group</strong></a>             
                <a class="nav-item text-white pa2 ba br3 dim ma1" href="project.php"><strong>The Project</strong></a>             
              </div>
            </nav>
        </header>    
      </div>
  <!--/.Main Navigation-->

    <!-- Start your project here-->
    <div class="mt-5" style="height: 100vh">
        <div class="container-fluid flex-center flex-column">
          <h1 class="animated fadeIn mb-4" style="color:#19a974">The Project</h1>
      
          <h5 class="animated fadeIn mb-3">This Web App tests your Long-Term memory by seeing if you can reproduce 10 words after just a minute of seeing them.</h5>
          
          <a class="btn ba bw2 br4 b--green f5 bold" href="index.php" role="button" style="background-color:#19a974; font-family: Helvetica;">Start!</a>
    
        </div>
      </div>
      <!-- /Start your project here-->

  <!--Footer-->
<footer class="page-footer center-on-small-only stylish-color-dark mt-3 ">

    <!--Footer Links-->
    <div class="container ">
      <div class="row">
  
        <!--Description column-->
        <div class="col-md-4">
          <h5 class="title mb-4 mt-3 font-bold">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
            amet, consectetur adipisicing elit.</p>
        </div>
        <!--/.First column-->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!--Link column-->
        <div class="col-md-2 mx-auto">
          <h5 class="title mb-4 mt-3 font-bold">Links</h5>
          
            <a href="#!">Link 1</a></li><br>
            <a href="#!">Link 2</a></li><br>
            <a href="#!">Link 3</a></li><br>
            <a href="#!">Link 4</a></li><br>
        </div>
        <!--/.Link column-->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!--Third column-->
        <div class="col-md-2 mx-auto">
          <h5 class="title mb-4 mt-3 font-bold">Links</h5>
            <a href="#!">Link 1</a></li><br>
            <a href="#!">Link 2</a></li><br>
            <a href="#!">Link 3</a></li><br>
            <a href="#!">Link 4</a></li><br>
        </div>
        <!--/.Third column-->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!--Fourth column-->
        <div class="col-md-2 mx-auto">
          <h5 class="title mb-4 mt-3 font-bold ">Links</h5>
            <a href="#!">Link 1</a></li><br>
            <a href="#!">Link 2</a></li><br>
            <a href="#!">Link 3</a></li><br>
            <a href="#!">Link 4</a></li><br>
        </div>
        <!--/.Fourth column-->
      </div>
    </div>
    <!--/.Footer Links-->
  
    <hr>
  
    <!--Call to action-->
    <div class="call-to-action" style='text-align: center'>
      <fieldset>
        <div class="form-group"  >
            <?php   echo $_SESSION['email'];    ?>
        </div>
        <hr>
        <div class="form-group ">
            <a class="btn fa ba bw2 br4 b--green f5 bold" href="view_users.php" role="button" style="background-color:#19a974; font-family: Helvetica;">View Record</a>
        </div>
        <div class="form-group">
            <a class="btn ba bw2 br4 b--dark-red f5 bold" href="logout.php" role="button" style="background-color:#e7040f; font-family: Helvetica;">Logout</a>
    </div>
    <!--/.Call to action-->
    <hr>  
    <!--Copyright-->
    <div class="footer-copyright">
      <div class="container-fluid" style='text-align: center'>
      <br>
        © 2019 Copyright: <p> Web Programming Group 3 </p>
      </div>
    </div>
    <!--/.Copyright-->
  
  </footer>
  <!--/.Footer-->
  
  <!--/.HTML & CSS-->

  <!-- JAVASCRIPTS -->
 
  <!-- /.JAVASCRIPTS -->

  <!-- JQuery -->
  <div>
      <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="js/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="js/mdb.min.js"></script>
  </div> 
  <!-- /JQuery -->
</body>

</html>