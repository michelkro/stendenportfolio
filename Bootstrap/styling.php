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
            <li><a href="index.php"><i class="fa fa-file"></i> Hoofdpagina</a></li>
            <li><a href="fotogalerij.php"><i class="fa fa-bar-chart-o"></i> Fotogalerij</a></li>
            <li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
            <li><a href="contact.php"><i class="fa fa-edit"></i> Contact Opnemen</a></li>
			<li class="active"><a href="styling.php"><i class="fa fa-edit"></i> Styling</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Styling <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Lettertype</a></li>
                <li><a href="#">Kleuren</a></li>
                <li><a href="#">Documenten</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Styling<small> Style je eigen portfolio</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
            </ol>
          </div>
        </div><!-- /.row -->
		<h3><p>De Algemene Kleur</p></h3>
		<h3><p>Lettertype</p></h3>
		<p>Kies hier je lettertype:</p>
		<form>
		<select>
			<option value="Arial" Selected>Arial</option>
			<option value="Oxygen">Oxygen</option>
			<option value="Lato">Lato</option>
			<option value="Raleway">Raleway</option>
		</select> 
		</form>
		<h3><p>Documenten</p></h3>
		<?php
			//#### Saving the uploaded file (with restrictions) ####

			if(isset($_POST["submit"])){
				if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "text/css") || ($_FILES["file"]["type"] == "text/html") || ($_FILES["file"]["type"] == "audio/mpeg3")
					|| ($_FILES["file"]["type"] == "application/pdf")  || ($_FILES["file"]["type"] == "application/mspowerpoint")  || ($_FILES["file"]["type"] == "application/vnd.ms-powerpoint")  || ($_FILES["file"]["type"] == "text/plain")  || ($_FILES["file"]["type"] == "application/excel")
					|| ($_FILES["file"]["type"] == "application/zip")  || ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")  || ($_FILES["file"]["type"] == "text/php")    )){
				   
					// The same as in index.php
					if ($_FILES["file"]["error"] > 0)
					{
						echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
					} else
					{
						/*echo "Upload: " . $_FILES["file"]["name"] . "<br />";
						echo "Type: " . $_FILES["file"]["type"] . "<br />";
						echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
						echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";*/

						// Checks if the file already exists, if it does not, it copies the file to the specified folder.
						if (file_exists("uploadbestand/" . $_FILES["file"]["name"]))
						{
							echo $_FILES["file"]["name"] . " already exists. ";
						} else
						{
							move_uploaded_file($_FILES["file"]["tmp_name"], "uploadbestand/" . $_FILES["file"]["name"]);
							echo "Stored in: " . "uploadbestand/" . $_FILES["file"]["name"];
						}
					}
				}
				else{
					echo 'Dit bestandstype wordt niet geaccepteerd.';
				}
			}
		?> 
        <form action="#" method="post" enctype="multipart/form-data">
            <p>Filename:<input type="file" name="file"></p>
            <input type="submit" name="submit" value="Submit" />
        </form>
		<p><h3> Foto Uploaden </h3></p>
		<?php
			//#### Saving the uploaded file (with restrictions) ####
			//The user may only upload .gif or .jpeg files and the file size must be under 20 kb:
			if(isset($_POST["submit"])){
				if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg"))){
					// The same as in index.php
					if ($_FILES["file"]["error"] > 0)
					{
						echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
					} else
					{
					   /* echo "Upload: " . $_FILES["file"]["name"] . "<br />";
						echo "Type: " . $_FILES["file"]["type"] . "<br />";
						echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
						echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";*/

						// Checks if the file already exists, if it does not, it copies the file to the specified folder.
						if (file_exists("upload/" . $_FILES["file"]["name"]))
						{
							echo $_FILES["file"]["name"] . " already exists. ";
						} else
						{
							move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
							//echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
							echo "De afbeelding is opgeslagen.";
						}
					}
				}
				else{
					echo "Alleen afbeeldingen kunnen geupload worden.";
				}
			}
		?> 
        <form action="#" method="post" enctype="multipart/form-data">
            <label for="file">Filename:</label><input type="file" name="file" id="file" />
            <br />
            <input type="submit" name="submit" value="Submit" />
        </form>
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>