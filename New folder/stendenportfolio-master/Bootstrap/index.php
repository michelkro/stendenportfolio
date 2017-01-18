<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        if (empty($_GET['page'])) {
            $_GET['page'] = "home";
        }
        include ('content/session.php');
        if(isset($_GET['id'])){
            $_SESSION['portfolio'] = $_GET['id'];
        }
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Stenden Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="css/css.php" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/css2.php" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>
  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
	      <!-- Zoekbalk voor user names -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"> Stenden Portfolio </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <?php 
                if(isset($_SESSION['login_user'])){
                    switch ($row['User_Type_ID']){
                        case 1:
                            echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="?page=fotogalerij"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="?page=Gastenboek"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="?page=registration"><i class="fa fa-list-alt"></i> Registratie </a></li>';
                            if(isset($_SESSION['portfolio'])){
                                echo '<li> <a href="?page=home2"><i class="fa fa-home"></i> ' . $row2['User_Name'] . '</a></li>';
                                echo '<li><a href="?page=cv"><i class="fa fa-table"></i> CV en Werkervaring</a></li>';
                                echo '<li><a href="?page=contact"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>'
                                . '<li><a href="?page=beoordeling"><i class="fa fa-trophy"></i> Beoordeling</a></li>';
                            }
                            break;
                        case 2:
                            echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="?page=fotogalerij"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="?page=Gastenboek"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="?page=registration"><i class="fa fa-list-alt"></i> Registratie </a></li>';
                            if(isset($_SESSION['portfolio'])){
                                echo '<li> <a href="?page=home2"><i class="fa fa-home"></i> ' . $row2['User_Name'] . '</a></li>';
                                echo '<li><a href="?page=cv"><i class="fa fa-table"></i> CV en Werkervaring</a></li>';
                                echo '<li><a href="?page=contact"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>'
                                . '<li><a href="?page=beoordeling"><i class="fa fa-trophy"></i> Beoordeling</a></li>';
                            }
                            break;
                        case 5:
                            echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="?page=fotogalerij"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="?page=Gastenboek"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>';
                            if(isset($_SESSION['portfolio'])){
                                echo '<li> <a href="?page=home2"><i class="fa fa-home"></i> ' . $row2['User_Name'] . '</a></li>';
                                echo '<li><a href="?page=cv"><i class="fa fa-table"></i> CV en Werkervaring</a></li>';
                                echo '<li><a href="?page=contact"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>'
                                . '<li><a href="?page=beoordeling"><i class="fa fa-trophy"></i> Beoordeling</a></li>';
                                }
                            break;
                        case 4:
                            echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="?page=fotogalerij"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="?page=Gastenboek"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="?page=styling"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li><a href="?page=cv"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="?page=beoordeling"><i class="fa fa-trophy"></i> Beoordeling</a></li>';
                            if(isset($_SESSION['portfolio'])){
                                echo '<li> <a href="?page=home2"><i class="fa fa-home"></i> ' . $row2['User_Name'] . '</a></li>';
                                echo '<li><a href="?page=cv"><i class="fa fa-table"></i> CV en Werkervaring</a></li>';
                                echo '<li><a href="?page=contact"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>';
                            }
                            break;
                        case 6:
                            echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="?page=fotogalerij"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="?page=Gastenboek"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>';
                            if(isset($_SESSION['portfolio'])){
                                echo '<li> <a href="?page=home2"><i class="fa fa-home"></i> ' . $row2['User_Name'] . '</a></li>';
                                echo '<li><a href="?page=cv"><i class="fa fa-table"></i> CV en Werkervaring</a></li>';
                                echo '<li><a href="?page=contact"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>';
                            }
                            break;
                        case 7:
                            echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="?page=fotogalerij"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="?page=Gastenboek"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>';
                            if(isset($_SESSION['portfolio'])){
                                echo '<li> <a href="?page=home2"><i class="fa fa-home"></i> ' . $row2['User_Name'] . '</a></li>';
                                echo '<li><a href="?page=cv"><i class="fa fa-table"></i> CV en Werkervaring</a></li>';
                                echo '<li><a href="?page=contact"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>';
                            }
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
                    <form  method="post" action="search_submit.php?go"  id="searchform"> 
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
                            <li><a href=""><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="?page=logout"><i class="fa fa-power-off"></i> Log Out</a></li>
                            </ul>';
                        }else {
                            echo '<li><a href="?page=login"><i class="fa fa-power-off"></i> Log In</a></li>';
                        }
                    ?> 
                  <b class="caret"></b></a>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      <?php
            if (empty($_GET['page'])){
                $page = "home";
            }
            elseif (!file_exists("content/" . $_GET['page'] . '.php')){
                $page = 'not-found';
            }
            elseif (!empty($_GET['page'])){
                $page = $_GET['page'];
            }
            else{
                $page = "home";
            }
            if (file_exists("content/" . $_GET['page'] . '.php')) {
                include("content/" . $page . ".php");
            }
        ?>

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>