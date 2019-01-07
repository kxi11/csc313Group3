
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

<div class="container fluid"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="center-div"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-12"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel ba b--green br4 bw3 shadow-5">
                <div class="panel-heading" style="background-color:#19a974;">
                    <h2 class="panel-title f2 b" style="color:white; text-align:center  ;">Registration</h2>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>


                            <center><input class="btn-lg bg-white f1 b--green ma3 bw2 br4 center f2 b col-md-12 grow" style="color:#19a974;" type="submit" value="Register" name="register" >

                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br></b><a class="btn b--green ma2 ba bw2 br4 f6 b" style="color:#19a974" href="login.php" role="button">Login</a></center><!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include("database/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
    $user_pass=$_POST['pass'];//same
    $user_email=$_POST['email'];//same


    if($user_name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
exit();//this use if first is not work then other will not show
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }
//here query check weather if user already registered so can't register again.
    $check_email_query="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }
//insert the user into the database.
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('login.php','_self')</script>";
    }

}

?>