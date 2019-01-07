<?php
session_start();//session starts here

?>


<html>
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
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
</style>

<body>

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
              </div>
            </nav>
        </header>    
      </div>
  <!--/.Main Navigation-->

<div class="container-fluid">
    <div class="center-div">
        <div class="col-md-12">
            <div class="login-panel ba b--green br4 bw3 shadow-5">
                <div class="panel-heading" style="background-color:#19a974;">
                    <h2 class="panel-title f2 b" style="color:white; text-align:center  ;">Sign In</h2>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>


                                <center><input class="btn-lg bg-white f1 b--green ma3 bw2 br4 center f2 b col-md-12 grow" style="color:#19a974;" type="submit" value="Login" name="login" >
                                <br>
                                <center><a class="btn b--green ma2 ba bw2 br4 f6 b" style="color:#19a974" href="registration.php" role="button">Register</a></center>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

<footer class="page-footer center-on-small-only stylish-color-dark mt-5">
    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid" style='text-align: center'>
        <br>
        © 2019 Copyright:<p> Web Programming Group 3 </p>
        </div>
    </div>
    <!--/.Copyright-->
</footer>

</html>

<?php

include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('project.php','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>