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
  <link rel="import" href="view_users.php">
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

  <!--Carousel-->
  <!--Make this the powerpoint slides so on the presentation day the slides are on the front page of the site-->
  <!--/.Carousel-->
<br><br><br>  
  <!--APP-->
  <!--TIMER AND SCORE DISPLAY-->
  <p class="container-fluid mt-5 col-md-2 ba bw2 br4 b--green f2" id="demo" style="color:#19a974;  text-align:center; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif"></p>
  <p class="container-fluid mt-5 col-md-2 ba bw2 br4 b--green f2" id="demo1" name="score" style="color:#19a974;  text-align:center; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif"></p>
  <!--/.TIMER AND SCORE DISPLAY-->
  <!--CARDS-->
  <div class="container-fluid mt-5" style="text-align:center;">
    <div class="row center">
        <div class="card col-md-2  ma2 bg-green pa2 shadow-3 ba bw4 br2 b--green">
            <h4>1.</h4><hr>
            <h5  id="0" class="bold text-white f2">Cape</h5>
        </div>
        <div class="card col-md-2  ma2 bg-green pa2 shadow-3 ba bw4 br2 b--green">
            <h4>2.</h4><hr>
            <h5  id="1" class="bold text-white f2">Vehicle</h5>
        </div>
        <div class="card col-md-2  ma2 bg-green pa2 shadow-3 ba bw4 br2 b--green">
            <h4>3.</h4><hr>
            <h5  id="2" class="bold text-white f2">London</h5>
        </div>
        <div class="card col-md-2  ma2 bg-green pa2 shadow-3 ba bw4 br2 b--green">
            <h4>4.</h4><hr>
            <h5  id="3" class="bold text-white f2">Lecture</h5>
        </div>
        <div class="card col-md-2  ma2 bg-green pa2 shadow-3 ba bw4 br2 b--green">
            <h4>5.</h4><hr>
            <h5  id="4" class="bold text-white f2">Phone</h5>
        </div>
        <div class="card col-md-2  ma2 bg-green pa2 shadow-3 ba bw4 br2 b--green">
            <h4>6.</h4><hr>
            <h5  id="5" class="bold text-white f2">Computer</h5>
        </div>
        <div class="card col-md-2  ma2 bg-green pa2 shadow-3 ba bw4 br2 b--green">
            <h4>7.</h4><hr>
            <h5  id="6" class="bold text-white f2">Nigeria</h5>
        </div>
        <div class="card col-md-2  ma2 bg-green pa2 shadow-3 ba bw4 br2 b--green">
            <h4>8.</h4><hr>
            <h5  id="7" class="bold text-white f2">Medicine</h5>
        </div>
        <div class="card col-md-2  ma2 bg-green pa2 shadow-3 ba bw4 br2 b--green">
            <h4>9.</h4><hr>
            <h5  id="8" class="bold text-white f2">Dog</h5>
        </div>
        <div class="card col-md-2  ma2 bg-green pa2 shadow-3 ba bw4 br2 b--green">
            <h4>10.</h4><hr>
            <h5  id="9" class="bold text-white f2">Course</h5>
        </div>
    </div>
  </div>
  <!--CARDS-->
  <!--SUBMIT BUTTON-->
  <center><div id = "buttoner" ></div>
  <!-- <div id = "buttoner2"></div> -->
  <!-- <a class="btn ma2 ba bw3 br3 b--green dim" style="background-color:#19a974; text-align:center;" href="index.php">Update Database</a> -->
  <!--./SUBMIT BUTTON-->


  <!--/.APP-->

  <!--Footer-->
<footer class="page-footer center-on-small-only stylish-color-dark mt-3 ">

    <!--Footer Links-->
    <div class="container ">
      <div class="row">
  
        <!--Description column-->
        <div class="col-md-6">
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

        <div class="form-group ">
            <a class="btn fa ba bw2 br4 b--green f5 bold" href="view_users.php" role="button" style="background-color:#19a974; font-family: Helvetica;">View Record</a>
        </div>
        <div class="form-group">
            <a class="btn ba bw2 br4 b--green f5 bold" href="logout.php" role="button" style="background-color:#19a974; font-family: Helvetica;">Logout here</a>
        </div>

        <!-- Change this to a button or input when using this as a form -->
    </fieldset>
    </div>
    <!--/.Call to action-->
    <hr>  
    <!--Copyright-->
    <div class="footer-copyright">
      <div class="container-fluid" style='text-align: center'>
        © 2019 Copyright: <a href="index.php"> Web Programming Group 3 </a>
      </div>
    </div>
    <!--/.Copyright-->
  
  </footer>
  <!--/.Footer-->
  
  <!--/.HTML & CSS-->

  <!-- JAVASCRIPTS -->

  <!--WORD PUTTER-->
  <!-- <script>
  window.onload = function wordp(){
    var wordputter = ["Cape","Vehicle","London","Pole","Phone","Computer","Nigeria","Medicine","Dog","Course"];
    for(var i = 0; i<10; i++){
      document.getElementbyId(i).innerHTMl = wordputter[i];
    }
  }

  </script> -->
  <!--/.WORD PUTTER-->

  <!--TIMER AND INPUT CHANGER-->
  <script>
    window.onload = function() {
    var secs = 0;
    var id = setInterval(
      function(){ 
        secs++; 
        console.log(secs);
        document.getElementById("demo").innerHTML = "Timer: " + secs + "s ";
        if(secs>=10){
          clearInterval(id);
          var nc = document.querySelectorAll("h5");
          for(var i = 0; i < 10; i++){
            nc[i].innerHTML = "<input class=\"center md-form col-md-12 \" type=\"text\">";
            document.getElementById("buttoner").innerHTML = "<input value=\"Done!\" type=\"button\" class=\"btn ma2 ba bw3 br3 b--green center dim\" style=\"background-color:#19a974; text-align:center;\" onclick=\"takeanswers()\"></input>";
            // document.getElementById("buttoner2").innerHTML = "<a class=\"btn ma2 ba bw3 br3 b--green dim\" style=\"background-color:#19a974; text-align:center;\" href=\"index.php\">Save and Retry</a>";
          }
       }
    }, 1000);
};
  </script>
  <!--/.TIMER AND INPUT CHANGER-->

  <!--ANSWER TAKER AND CALCULATOR-->
  <script>
    function takeanswers(){
      var score = 0;
      var wordarr = ["Cape","Vehicle","London","Lecture","Phone","Computer","Nigeria","Medicine","Dog","Course"];
      var word = document.getElementsByTagName("input");
      for( var j = 0; j<10; j++){
        if(word[j].value === wordarr[j]){
          score++;
        }
        
      }
      console.log(score);
      document.cookie = "score = " + score;
      document.getElementById("demo1").innerHTML = "Score: "+score+"/10";
      //document.getElementById("buttoner2").innerHTML = "<a class=\"btn ma2 ba bw3 br3 b--green dim\" style=\"background-color:#19a974; text-align:center;\" href=\"index.php\">Save and Retry</a>";
      return gotoproject();
    }
  </script>
  <!--./ANSWER TAKER AND CALCULATOR-->
  <script>
    function gotoproject(){
      window.open('index.php','_self');
    }
  </script>
  <!--<script>document.cookie = score;
  console.log(score);
  </script>-->

  <!-- /.JAVASCRIPTS -->
  <!--PHP-->
  <?php

  include("database/db_conection.php");
  $view_users_query="SELECT * from users";//select query for viewing users.
  $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
  $user_score = $_COOKIE['score'];
  // include 'view_users.php';
  //$user_score=$_POST['score'];
  $row=mysqli_fetch_array($run);//while look to fetch the result and store in a array $row.
    $ue = $_SESSION['email'];
    $sql = "UPDATE users SET user_score=$user_score WHERE user_email='$ue'";
    $res = mysqli_query($dbcon,$sql) or trigger_error(mysqli_error($dbcon)." in ".$sql);
    if (mysqli_query($dbcon, $sql)) {
        //echo "Record updated successfully";
        
    } else {
        echo "Error updating record: " . mysqli_error($dbcon);
    }
  //echo"<script>window.open('index.php','_self')</script>";
  //mysqli_query($dbcon,$insert_user);
  //echo $user_score;
  //echo $update_user;
  //echo $sql;

  ?>
  <!--/.PHP-->
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