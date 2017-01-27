<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include ('content/session.php');
        if(isset($_GET['id'])){
            $_SESSION['portfolio'] = $_GET['id'];
        }
        if (!isset($_SESSION['login_user']) || $row['User_Type_ID'] != 4){
            if (empty($_GET['page'])) {
                $_GET['page'] = "Guest";
            }
        }else{
            if (empty($_GET['page'])) {
                $_GET['page'] = "home";
            }
        }
        if(isset($_GET['Project'])){
            $checkstring = 'projects/'.$row['User_Email'].'/dkokas.jpeg';
            if($checkstring != $_GET['Project']){
                echo '<link href="css/css2.1.php" rel="stylesheet">'
            . '<link href="css/css2.2.php" rel="stylesheet">';
            }else{
                echo '<link href="css/css1.php" rel="stylesheet">'
                . '<link href="css/css2.php" rel="stylesheet">';
            }
        }else{
            if(isset($_GET['id'])){
                echo '<link href="css/css2.1.php" rel="stylesheet">'
                . '<link href="css/css2.2.php" rel="stylesheet">';
            }else{
                echo '<link href="css/css1.php" rel="stylesheet">'
                . '<link href="css/css2.php" rel="stylesheet">';
            }
        }
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stenden Portfolio</title>

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
                            echo '<li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="?page=registration"><i class="fa fa-list-alt"></i> Registratie </a></li>';
                            if(isset($_SESSION['portfolio']) && isset($row2)){
                                echo '<li><a href="?page=portfolio&id='. $row2['User_ID'] . '"><i class="fa fa-home"></i> ' . $row2['User_Name'] . "'s Portfolio" .'</a></li>';
                                echo '<li><a href="?page=cv_1&id='. $row2['User_ID'] . '"><i class="fa fa-table"></i> ' . $row2['User_Name'] . "'s CV en Werkervaring" . '</a></li>';
                                echo '<li><a href="?page=fotogalerij_1&id='. $row2['User_ID'] . '"><i class="fa fa-camera"></i> ' . $row2['User_Name'] . "'s Projecten" . '</a></li>';
                                echo '<li><a href="?page=Gastenboek&id=' . $row2['User_ID'] . '"><i class="fa fa-edit"></i> ' . $row2['User_Name']. "'s Gastenboek" . '</a></li>';
                                echo '<li><a href="?page=contact&id=' . $row2['User_ID'] . '"><i class="fa fa-envelope"></i> ' . $row2['User_Name'] . "'s Contact Opnemen" . '</a></li>';
                            }
                            break;
                        case 2:
                            echo '<li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="?page=registration"><i class="fa fa-list-alt"></i> Registratie </a></li>';
                            if(isset($_SESSION['portfolio']) && isset($row2)){
                                echo '<li><a href="?page=portfolio&id='. $row2['User_ID'] . '"><i class="fa fa-home"></i> ' . $row2['User_Name'] . "'s Portfolio" .'</a></li>';
                                echo '<li><a href="?page=cv_1&id='. $row2['User_ID'] . '"><i class="fa fa-table"></i> ' . $row2['User_Name'] . "'s CV en Werkervaring" . '</a></li>';
                                echo '<li><a href="?page=fotogalerij_1&id='. $row2['User_ID'] . '"><i class="fa fa-camera"></i> ' . $row2['User_Name'] . "'s Projecten" . '</a></li>';
                                echo '<li><a href="?page=Gastenboek&id=' . $row2['User_ID'] . '"><i class="fa fa-edit"></i> ' . $row2['User_Name']. "'s Gastenboek" . '</a></li>';
                                echo '<li><a href="?page=contact&id=' . $row2['User_ID'] . '"><i class="fa fa-envelope"></i> ' . $row2['User_Name'] . "'s Contact Opnemen" . '</a></li>';
                            }
                            break;
                        case 5:
                            echo '<li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>'
                            . '<li><a href="?page=beoordeling"><i class="fa fa-trophy"></i> Beoordeling</a></li>';
                            if(isset($_SESSION['portfolio']) && isset($row2)){
                                echo '<li><a href="?page=portfolio&id='. $row2['User_ID'] . '"><i class="fa fa-home"></i> ' . $row2['User_Name'] . "'s Portfolio" .'</a></li>';
                                echo '<li><a href="?page=cv_1&id='. $row2['User_ID'] . '"><i class="fa fa-table"></i> ' . $row2['User_Name'] . "'s CV en Werkervaring" . '</a></li>';
                                echo '<li><a href="?page=fotogalerij_1&id='. $row2['User_ID'] . '"><i class="fa fa-camera"></i> ' . $row2['User_Name'] . "'s Projecten" . '</a></li>';
                                echo '<li><a href="?page=Gastenboek&id=' . $row2['User_ID'] . '"><i class="fa fa-edit"></i> ' . $row2['User_Name']. "'s Gastenboek" . '</a></li>';
                                echo '<li><a href="?page=contact&id=' . $row2['User_ID'] . '"><i class="fa fa-envelope"></i> ' . $row2['User_Name'] . "'s Contact Opnemen" . '</a></li>';
                                }
                            break;
                        case 4:
                            echo '<li><a href="?page=fotogalerij"><i class="fa fa-camera"></i> Projecten</a></li>
                                <li><a href="?page=Gastenboek2"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="?page=styling"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li><a href="?page=cv"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>';
                            if(isset($_SESSION['portfolio']) && isset($row2)){
                                echo '<li><a href="?page=portfolio&id='. $row2['User_ID'] . '"><i class="fa fa-home"></i> ' . $row2['User_Name'] . "'s Portfolio" .'</a></li>';
                                echo '<li><a href="?page=cv_1&id='. $row2['User_ID'] . '"><i class="fa fa-table"></i> ' . $row2['User_Name'] . "'s CV en Werkervaring" . '</a></li>';
                                echo '<li><a href="?page=fotogalerij_1&id='. $row2['User_ID'] . '"><i class="fa fa-camera"></i> ' . $row2['User_Name'] . "'s Projecten" . '</a></li>';
                                echo '<li><a href="?page=Gastenboek&id=' . $row2['User_ID'] . '"><i class="fa fa-edit"></i> ' . $row2['User_Name']. "'s Gastenboek" . '</a></li>';
                                echo '<li><a href="?page=contact&id=' . $row2['User_ID'] . '"><i class="fa fa-envelope"></i> ' . $row2['User_Name'] . "'s Contact Opnemen" . '</a></li>';
                            }
                            break;
                        case 6:
                            echo '<li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>';
                            if(isset($_SESSION['portfolio']) && isset($row2)){
                                echo '<li><a href="?page=portfolio&id='. $row2['User_ID'] . '"><i class="fa fa-home"></i> ' . $row2['User_Name'] . "'s Portfolio" .'</a></li>';
                                echo '<li><a href="?page=cv_1&id='. $row2['User_ID'] . '"><i class="fa fa-table"></i> ' . $row2['User_Name'] . "'s CV en Werkervaring" . '</a></li>';
                                echo '<li><a href="?page=fotogalerij_1&id='. $row2['User_ID'] . '"><i class="fa fa-camera"></i> ' . $row2['User_Name'] . "'s Projecten" . '</a></li>';
                                echo '<li><a href="?page=Gastenboek&id=' . $row2['User_ID'] . '"><i class="fa fa-edit"></i> ' . $row2['User_Name']. "'s Gastenboek" . '</a></li>';
                                echo '<li><a href="?page=contact&id=' . $row2['User_ID'] . '"><i class="fa fa-envelope"></i> ' . $row2['User_Name'] . "'s Contact Opnemen" . '</a></li>';
                            }
                            break;
                        case 7:
                            echo '<li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>';
                            if(isset($_SESSION['portfolio']) && isset($row2)){
                                echo '<li><a href="?page=portfolio&id='. $row2['User_ID'] . '"><i class="fa fa-home"></i> ' . $row2['User_Name'] . "'s Portfolio" .'</a></li>';
                                echo '<li><a href="?page=cv_1&id='. $row2['User_ID'] . '"><i class="fa fa-table"></i> ' . $row2['User_Name'] . "'s CV en Werkervaring" . '</a></li>';
                                echo '<li><a href="?page=fotogalerij_1&id='. $row2['User_ID'] . '"><i class="fa fa-camera"></i> ' . $row2['User_Name'] . "'s Projecten" . '</a></li>';
                                echo '<li><a href="?page=Gastenboek&id=' . $row2['User_ID'] . '"><i class="fa fa-edit"></i> ' . $row2['User_Name']. "'s Gastenboek" . '</a></li>';
                                echo '<li><a href="?page=contact&id=' . $row2['User_ID'] . '"><i class="fa fa-envelope"></i> ' . $row2['User_Name'] . "'s Contact Opnemen" . '</a></li>';
                            }
                            break;
                    }
                }
                
           ?>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
              <li class ='dropdown-header'>
                    <form action="?page=search_submit" id="navbar" method="post"> 
                    <input class="term" type="text" id="term" name="search" placeholder=" Zoeken..." required />  
                    <input type="submit" class='submit'  id="submit" value="zoek" />
                    </form>
                    <script type="text/javascript"> 
                    document.getElementById('term').oninput = function() {
                        document.getElementById('submit').disabled = !this.value.trim();
                    }
                    </script>
              </li>
            <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <?php
                        if($_SESSION['login_user'] != null){
                            echo $row['User_Name'];
                            echo '<ul class="dropdown-menu">
                            <li><a href="?page=logout"><i class="fa fa-power-off"></i> Log Out</a></li>
                            </ul>';
                        }else {
                            echo '<li><a href="?page=login"><i class="fa fa-power-off"></i> Log In</a></li>';
                        }
                    ?> 
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