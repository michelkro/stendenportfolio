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
    <style>
                    #body{
                        width: 50%;
                        margin: 25px;
                    }
                    
    </style>
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
                                <li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
				<li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
				<li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
            <li class="active"><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
				<li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
				<li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
				<li><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
				<li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Gastenboek <small>Frits Huig</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
              <li><a href="Gastenboek2.php"><i class="icon-dashboard"></i> Admin Gastenboek</a></li>
            </ol>
          </div>
            <div id="body">
                <?php
                
                    //------------------------------------OUTPUT----------------------------------------------------
                  
                        $connect = mysqli_connect("localhost", "root", "");
                        if(!$connect){
                            DIE("Could not connect: " . mysqli_error($connect));
                        }
                        mysqli_select_db($connect, "project_portfolio");	
                        $query = "SELECT `Name`, `E-Mail`, `Message`, `DateTime` FROM `Guestbook` WHERE Publicity = 'Y'";
                         $result = mysqli_query($connect, $query);
                        if(@mysqli_num_rows($result) != 0){

                        while($item = mysqli_fetch_assoc($result)){


                                echo  "<div id='NaamEmail'><p>".$item['Name'];
                                echo  "<br>";
                                echo  $item['E-Mail']."</p></div>";
                                echo  "<p>".$item['Message']."</p>";
                                echo  "<div id='Datum_Tijd'>".$item['DateTime']."</div>";
                                echo  "<hr>";
                        }

                        mysqli_free_result($result);


                        } else {
                            echo "<p>Er zijn in dit gastenboek nog geen berichten geplaatst. Wees de eerste!</p>";
                        }

                        mysqli_close($connect);


//---------------------------------------------------------------INPUT-----------------------------------------------

                        if(isset($_POST["submit"])){

                                    
                                    $date = date("Y-n-d h:i:A");
                                    $name = $_POST["name"];
                                    $mail = $_POST["mail"];
                                    $text = $_POST["text"];


                            $connect = mysqli_connect("localhost", "root", "");
                            if(!$connect){
                                DIE("Could not connect: " . mysqli_error($connect));
                            }
                            mysqli_select_db($connect, "project_portfolio");
                            $query2 = "INSERT INTO Guestbook (`Name`, `E-Mail`, `Message`, `DateTime`)
                                VALUES ('".$name."','".$mail."','".$text."','".$date."');";
                            mysqli_query($connect, $query2) OR DIE("<br><br> Data has not been inserted");
                            echo "<br> Het bericht is verstuurd. Zodra de eigenaar van dit gastenboek het bericht heeft goedkeurt zal het in het gastenboek worden plaatst";
                            mysqli_close($connect);
                            
                        }
                    ?>

                    <form action="#" method="POST">
                        <p><input class="form-control" style="width: 250px" name="name" placeholder="Uw naam"></p>
                        <p><input class="form-control" style="width: 250px" name="mail" placeholder="Uw Emailadres"></p>

                        <p><textarea class="form-control" style="height: 150px" name="text" placeholder="Plaats hier uw bericht, gebruik maximaal 1000 tekens"></textarea></p>
                        <p><button type="submit" class="btn btn-primary" value="Verzenden" name="submit">Verzenden</button></p>
                    </form>
            </div><!-- /.row -->

      </div><!-- /#page-wrapper -->
	  
    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
