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
  <!-- <link rel="import" href="view_users.php"> -->
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;
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
                <a class="nav-item text-white pa2 ba br3 dim ma1" href="group.html"><strong>The Group</strong></a>             
                <a class="nav-item text-white pa2 ba br3 dim ma1" href="project.php"><strong>The Project</strong></a>             
              </div>
            </nav>
        </header>    
      </div>
  <!--/.Main Navigation-->
<br><br><br>
<div class="mt-6"><!--this is used for responsive display in mobile and other devices-->

    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr class="text-white" style="background-color:#19a974; text-align:center; font-weight:bold; font-size: 2em;">

            <th class="b f3">Id</th>
            <th class="b f3">Username</th>
            <th class="b f3">E-mail</th>
            <th class="b f3">Password</th>
            <th class="b f3">Score</th>
            <th class="b f3">Delete User</th>
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_users_query="select * from users";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $user_id=$row[0];
            $user_name=$row[1];
            $user_pass=$row[2];
            $user_email=$row[3];
            $user_score=$row[4];



        ?>
        
        <tr>
<!--here showing results in the table -->
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_pass;  ?></td>
            <td><?php echo $user_score;  ?></td>
            <td ><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn center b--dark-red ma2 ba bw2 br4 f6 b" style="color:#e7040f;">Delete</button></a></td>
        </tr>

        <?php } ?>

    </table>
    </div>
    <center><a class="btn b--green ma2 ba bw2 br4 f6 b" style="color:#19a974;" href="Project.php" role="button">Back</a></center>
</div>


</body>

</html>
