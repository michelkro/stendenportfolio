<?php
  	include ('session.php');
	/* include login sessions for the use of user information */
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Variabele Naam</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Variabele Naam</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <?php 
                if(isset($_SESSION['login_user'])){
                    switch ($row['User_Type_ID']){
                        case 1:
                            echo '<li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
                                <li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li class="active"><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="registration.php"><i class="fa fa-list-alt"></i> Registratie </a></li>';
                            break;
                        case 2:
                            echo '<li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
                                <li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li class="active"><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="registration.php"><i class="fa fa-list-alt"></i> Registratie </a></li>';
                            break;
                        case 5:
                            echo '<li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
                                <li class="active"><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>';
                            break;
                        case 4:
                            echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>';
                            break;
                        case 6:
                            echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>';
                            break;
                        case 7:
                            echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>';
                            break;
                    }
                }
                else{
                    echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>';
                }
            ?>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
              <li class ='dropdown-header'>
                    <form  method="post" action="search_submit.php?go"  id="searchform" style="padding-top:4%;"> 
                    <input  type="text" name="name"> 
                    <input  type="submit" name="submit" value="Search"> 
                    </form> 
              </li>
            <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <?php
                    if($_SESSION['login_user'] != null){
                        echo $row['User_Name'];
                        echo '<ul class="dropdown-menu">
                        <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>';
                    }else {
                        echo '<li><a href="login.php"><i class="fa fa-power-off"></i> Log In</a></li>';
                    }
                    ?> 
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Beoordelingen<small> //Beoordelingen van docenten</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
            </ol>
            <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">PHP</h3>
                            </div>
                            <div class="panel-body">
                                You think water moves fast? You should see ice. 
                                It moves like it has a mind. Like it knows it 
                                killed the world once and got a taste for 
                                murder. After the avalanche, it took us a week 
                                to climb out. Now, I don't know exactly when we 
                                turned on each other, but I know that seven of 
                                us survived the slide... and only five made it 
                                out. Now we took an oath, that I'm breaking now.
                                We said we'd say it was the snow that killed the
                                other two, but it wasn't. Nature is lethal but 
                                it doesn't hold a candle to man.
                            </div>
                        </div>
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">HTML & CSS</h3>
                            </div>
                            <div class="panel-body">
                                Like you, I used to think the world was this 
                                great place where everybody lived by the same 
                                standards I did, then some kid with a nail 
                                showed me I was living in his world, a world 
                                where chaos rules not order, a world where 
                                righteousness is not rewarded. That's Cesar's 
                                world, and if you're not willing to play by his 
                                rules, then you're gonna have to pay the price.
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Informatie Management</h3>
                            </div>
                            <div class="panel-body">
                                You think water moves fast? You should see ice. 
                                It moves like it has a mind. Like it knows it 
                                killed the world once and got a taste for 
                                murder. After the avalanche, it took us a week 
                                to climb out. Now, I don't know exactly when we 
                                turned on each other, but I know that seven of 
                                us survived the slide... and only five made it 
                                out. Now we took an oath, that I'm breaking now.
                                We said we'd say it was the snow that killed the
                                other two, but it wasn't. Nature is lethal but 
                                it doesn't hold a candle to man.
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Studieloopbaanbegeleiding</h3>
                            </div>
                            <div class="panel-body">
                                Look, just because I don't be givin' no man a 
                                foot massage don't make it right for Marsellus 
                                to throw Antwone into a glass motherfuckin' 
                                house, fuckin' up the way the nigger talks. 
                                Motherfucker do that shit to me, he better 
                                paralyze my ass, 'cause I'll kill the 
                                motherfucker, know what I'm sayin'?
                            </div>
                        </div>
                    </div>
            <div class="col-sm-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">Vooruitgang</h3>
                            </div>
                            <div class="panel-body">
                                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class>PHP</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class=>Databases</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class=>HTML & CSS</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"><span class>Studieloopbaanbegeleiding</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class=>Mondelinge Communicatie</span>
                    </div>
                </div>
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>