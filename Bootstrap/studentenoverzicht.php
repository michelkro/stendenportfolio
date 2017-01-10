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
              <li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
				<li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
				<li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
				<li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
				<li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
				<li><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
	     <li class="active"><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
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
            <h1>Studentenoverzicht</h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
            </ol>
                <?php
                
                    //------------------------------------OUTPUT----------------------------------------------------
                  
                        $connect = mysqli_connect("localhost", "root", "");
                        if(!$connect){
                            DIE("Could not connect: " . mysqli_error($connect));
                        }
                        mysqli_select_db($connect, "project_portfolio");	
                        $query = "SELECT User_Name, User_Education, User_Email FROM `user` WHERE User_Type_ID = 1";
                         $result = mysqli_query($connect, $query);
                        if(mysqli_num_rows($result) > 0){
                            echo "<div class='table-responsive'>";
                            echo "<table class='table table-hover'>";
                            echo "<thead>";
                            echo "<tr>
                                    <th><h3>Naam</h3></th>
                                    <th><h3>Opleiding</h3></th>
                                    <th><h3>Email</h3></th>
                                  </tr>";
                             echo "</thead>";

                        while($item = mysqli_fetch_assoc($result)){
                            
                            echo "<tbody>";
                            echo "<tr><td>" . $item['User_Name'] .
                            "</td><td>" . $item['User_Education'] .
                            "</td><td>" . $item['User_Email'] .
                            "</td></tr>";     
                            echo "</tbody>";
                        }
                        echo "</table>";

                        mysqli_free_result($result);

                        } else {
                            echo "Er zijn nog geen porfolio's aanwezig";
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