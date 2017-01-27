<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include ('../content/session.php');
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
        if(isset($_GET['id'])){
            echo '<link href="../css/css2.1.php" rel="stylesheet">'
            . '<link href="../css/css2.2.php" rel="stylesheet">';
        }else{
            echo '<link href="../css/css1.php" rel="stylesheet">'
            . '<link href="../css/css2.php" rel="stylesheet">';
        }
    ?>
    <!-- Add custom CSS here -->
    <style>
                    #body{
                        width: 96%;
                        margin: 0 auto;
                    }
                    #Datum_Tijd{
                        font-size: 9pt;
                    }
                    #NaamEmail{
                        font-weight: bold;
                    }
                    textArea{
                        width: 400px;
                        height: 150px;
                    }
    </style>
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
          <a class="navbar-brand" href="../index.php"> Stenden Portfolio </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <?php 
                if(isset($_SESSION['login_user'])){
                    switch ($row['User_Type_ID']){
                        case 1:
                            echo '<li class="active"><a href="../index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="?page=registration"><i class="fa fa-list-alt"></i> Registratie </a></li>';
                            if(isset($_SESSION['portfolio'])){
                                echo '<li><a href="?page=portfolio&id='. $row2['User_ID'] . '"><i class="fa fa-home"></i> ' . $row2['User_Name'] . "'s Portfolio" .'</a></li>';
                                echo '<li><a href="?page=cv&id='. $row2['User_ID'] . '"><i class="fa fa-table"></i> ' . $row2['User_Name'] . "'s CV en Werkervaring" . '</a></li>';
                                echo '<li><a href="?page=fotogalerij&id='. $row2['User_ID'] . '"><i class="fa fa-camera"></i> ' . $row2['User_Name'] . "'s Projecten" . '</a></li>';
                                echo '<li><a href="?page=Gastenboek&id=' . $row2['User_ID'] . '"><i class="fa fa-edit"></i> ' . $row2['User_Name']. "'s Gastenboek" . '</a></li>';
                                echo '<li><a href="?page=contact&id=' . $row2['User_ID'] . '"><i class="fa fa-envelope"></i> ' . $row2['User_Name'] . "'s Contact Opnemen" . '</a></li>';
                            }
                            break;
                        case 2:
                            echo '<li class="active"><a href="../index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="?page=registration"><i class="fa fa-list-alt"></i> Registratie </a></li>';
                            if(isset($_SESSION['portfolio'])){
                                echo '<li><a href="?page=portfolio&id='. $row2['User_ID'] . '"><i class="fa fa-home"></i> ' . $row2['User_Name'] . "'s Portfolio" .'</a></li>';
                                echo '<li><a href="?page=cv&id='. $row2['User_ID'] . '"><i class="fa fa-table"></i> ' . $row2['User_Name'] . "'s CV en Werkervaring" . '</a></li>';
                                echo '<li><a href="?page=fotogalerij&id='. $row2['User_ID'] . '"><i class="fa fa-camera"></i> ' . $row2['User_Name'] . "'s Projecten" . '</a></li>';
                                echo '<li><a href="?page=Gastenboek&id=' . $row2['User_ID'] . '"><i class="fa fa-edit"></i> ' . $row2['User_Name']. "'s Gastenboek" . '</a></li>';
                                echo '<li><a href="?page=contact&id=' . $row2['User_ID'] . '"><i class="fa fa-envelope"></i> ' . $row2['User_Name'] . "'s Contact Opnemen" . '</a></li>';
                            }
                            break;
                        case 5:
                            echo '<li class="active"><a href="../index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>';
                            if(isset($_SESSION['portfolio'])){
                                echo '<li><a href="?page=portfolio&id='. $row2['User_ID'] . '"><i class="fa fa-home"></i> ' . $row2['User_Name'] . "'s Portfolio" .'</a></li>';
                                echo '<li><a href="?page=cv&id='. $row2['User_ID'] . '"><i class="fa fa-table"></i> ' . $row2['User_Name'] . "'s CV en Werkervaring" . '</a></li>';
                                echo '<li><a href="?page=fotogalerij&id='. $row2['User_ID'] . '"><i class="fa fa-camera"></i> ' . $row2['User_Name'] . "'s Projecten" . '</a></li>';
                                echo '<li><a href="?page=Gastenboek&id=' . $row2['User_ID'] . '"><i class="fa fa-edit"></i> ' . $row2['User_Name']. "'s Gastenboek" . '</a></li>';
                                echo '<li><a href="?page=contact&id=' . $row2['User_ID'] . '"><i class="fa fa-envelope"></i> ' . $row2['User_Name'] . "'s Contact Opnemen" . '</a></li>';
                                echo '<li><a href="?page=beoordeling&id=' . $row2['User_ID'] . '"><i class="fa fa-trophy"></i> ' . $row2['User_Name'] ."'s Beoordeling" . '</a></li>';
                                }
                            break;
                        case 4:
                            echo '<li class="active"><a href="../index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="?page=fotogalerij"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="?page=Gastenboek"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="?page=styling"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li><a href="?page=cv"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="?page=beoordeling"><i class="fa fa-trophy"></i> Beoordeling</a></li>';
                            if(isset($_SESSION['portfolio'])){
                                echo '<li><a href="?page=portfolio&id='. $row2['User_ID'] . '"><i class="fa fa-home"></i> ' . $row2['User_Name'] . "'s Portfolio" .'</a></li>';
                                echo '<li><a href="?page=cv&id='. $row2['User_ID'] . '"><i class="fa fa-table"></i> ' . $row2['User_Name'] . "'s CV en Werkervaring" . '</a></li>';
                                echo '<li><a href="?page=fotogalerij&id='. $row2['User_ID'] . '"><i class="fa fa-camera"></i> ' . $row2['User_Name'] . "'s Projecten" . '</a></li>';
                                echo '<li><a href="?page=Gastenboek&id=' . $row2['User_ID'] . '"><i class="fa fa-edit"></i> ' . $row2['User_Name']. "'s Gastenboek" . '</a></li>';
                                echo '<li><a href="?page=contact&id=' . $row2['User_ID'] . '"><i class="fa fa-envelope"></i> ' . $row2['User_Name'] . "'s Contact Opnemen" . '</a></li>';
                            }
                            break;
                        case 6:
                            echo '<li class="active"><a href="../index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>';
                            if(isset($_SESSION['portfolio'])){
                                echo '<li><a href="?page=portfolio&id='. $row2['User_ID'] . '"><i class="fa fa-home"></i> ' . $row2['User_Name'] . "'s Portfolio" .'</a></li>';
                                echo '<li><a href="?page=cv&id='. $row2['User_ID'] . '"><i class="fa fa-table"></i> ' . $row2['User_Name'] . "'s CV en Werkervaring" . '</a></li>';
                                echo '<li><a href="?page=fotogalerij&id='. $row2['User_ID'] . '"><i class="fa fa-camera"></i> ' . $row2['User_Name'] . "'s Projecten" . '</a></li>';
                                echo '<li><a href="?page=Gastenboek&id=' . $row2['User_ID'] . '"><i class="fa fa-edit"></i> ' . $row2['User_Name']. "'s Gastenboek" . '</a></li>';
                                echo '<li><a href="?page=contact&id=' . $row2['User_ID'] . '"><i class="fa fa-envelope"></i> ' . $row2['User_Name'] . "'s Contact Opnemen" . '</a></li>';
                                echo '<li><a href="?page=beoordeling&id=' . $row2['User_ID'] . '"><i class="fa fa-trophy"></i> ' . $row2['User_Name'] ."'s Beoordeling" . '</a></li>';
                            }
                            break;
                        case 7:
                            echo '<li class="active"><a href="../index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="?page=studentenoverzicht"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>';
                            if(isset($_SESSION['portfolio'])){
                                echo '<li><a href="?page=portfolio&id='. $row2['User_ID'] . '"><i class="fa fa-home"></i> ' . $row2['User_Name'] . "'s Portfolio" .'</a></li>';
                                echo '<li><a href="?page=cv&id='. $row2['User_ID'] . '"><i class="fa fa-table"></i> ' . $row2['User_Name'] . "'s CV en Werkervaring" . '</a></li>';
                                echo '<li><a href="?page=fotogalerij&id='. $row2['User_ID'] . '"><i class="fa fa-camera"></i> ' . $row2['User_Name'] . "'s Projecten" . '</a></li>';
                                echo '<li><a href="?page=Gastenboek&id=' . $row2['User_ID'] . '"><i class="fa fa-edit"></i> ' . $row2['User_Name']. "'s Gastenboek" . '</a></li>';
                                echo '<li><a href="?page=contact&id=' . $row2['User_ID'] . '"><i class="fa fa-envelope"></i> ' . $row2['User_Name'] . "'s Contact Opnemen" . '</a></li>';
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
                    <form action="?page=search_submit.php" id="navbar" method="GET"> 
                    <input class="term" type="text" id="term" name="name" placeholder=" Zoeken..." required />  
                    <input type="submit" class='submit'  id="submit" value="search" disabled />
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
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Gastenboek <small>Frits Huig</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Alle berichten</li>
              <li><a href="../index.php?page=Gastenboek"><i class="icon-dashboard"></i> Terug naar het gastenboek</a></li>
            </ol>
          </div>
            <div id="body">
                   <?php
                        $connect = mysqli_connect("localhost", "root", "");
                        if(!$connect){
                            DIE("Could not connect: " . mysqli_error($connect));
                        }
                        mysqli_select_db($connect, "project_portfolio");	
                        $query = "SELECT * FROM `Guestbook`";
                         $result = mysqli_query($connect, $query);
                        if(mysqli_num_rows($result) > 0){

                        while($item = mysqli_fetch_assoc($result)){

                                echo  "<div id='NaamEmail'><p>".$item['Name'];
                                echo  "<br>";
                                echo  $item['E-Mail']."</p></div>";
                                echo  "<p>".$item['Message']."</p>";
                                echo  "<div id='Datum_Tijd'>".$item['DateTime']."</div>";
                                echo '<br><br>';
                                if($item['Publicity']== "Y"){
                                    echo '<p>Dit bericht is zichtbaar.</p>';
                                }
                                else{
                                    echo '<p>Dit bericht is verborgen.</p>';
                                }
                                echo '<a href="Gastenboek3.php?ID='.$item['MessageID'].'"><input type="submit" value="wijzigen"></a>';
                                echo  "<hr>";
                              
                        }    


                        mysqli_free_result($result);


                        } else {
                            echo "Er zijn in dit gastenboek nog geen berichten geplaatst.";
                        }

                        mysqli_close($connect);
                        
                        
        ?>
				</div>
            </div><!-- /.row -->

      </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>