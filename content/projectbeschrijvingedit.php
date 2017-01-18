<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projecten & Foto's</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>
  <?php
  	include ('session.php')
	/* include login sessions for the use of user information */
  ?>
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
          <a class="navbar-brand" href="index.html">SB Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
                                <li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
	     <li class="active"><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
				<li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
				<li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
				<li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
				<li><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
				<li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <?php
                    if($_SESSION['login_user'] != null){
                        echo $_SESSION['login_user'];
                        echo '<ul class="dropdown-menu">
                        <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>';
                    }else {
                        echo '<li><a href="login.php"><i class="fa fa-power-off"></i> Log In</a></li>';
                    }
                    ?> 
                  <b class="caret"></b></a>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">
		<?php
			//echo $_GET['Project'];
			$array = explode("/", $_GET['Project']);
			$array2 = explode(".", $array['2']);
			echo  '<p><a href="fotogalerij.php"><input type="submit" value="terug naar projecten"></a>';
			echo  '<input type="submit" value="terug naar project '.$array2[0].'"></p>';
			echo '<p>'.$array2[0].'</p>';
			echo "<p><img src='projects/".$array[1]."/projectpicture/".$array[2]."'></p>";
			
			$DBConnect = mysqli_connect("localhost", "root", "");
            if ($DBConnect === FALSE){
                echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
            } else{
				$DBName = "project_portfolio";
				if (!mysqli_select_db($DBConnect, $DBName)){
					echo "<p>Druk op edit om een beschrijving van het project te geven.</p>";
				}else{
					$TableName = "projects";
					$SQLstring = "SELECT Project_Description FROM ".$TableName." WHERE User_ID ='".$_SESSION['portfolio']."' AND Project_Name = '".$array[0];
					$QueryResult = mysqli_query($DBConnect, $SQLstring);
					if (mysqli_num_rows($QueryResult) == 0){
						echo "<p>There are no textfields!</p>";
					} else{
		 
						while ($Row = mysqli_fetch_assoc($QueryResult)){
							$projectbeschrijving = $Row['Project_Description'];

						}
					}
					mysqli_free_result($QueryResult);
				}
				mysqli_close($DBConnect);
            }
			
			if(isset($_POST['projectbeschrijving'])){
				if (empty($_POST['opleidingen']))
				{
					echo "<p>You must fill in every field!</p>";
				} else
				{
					$DBConnect = mysqli_connect("localhost", "root", "");
					if ($DBConnect === FALSE)
					{
						echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
					} else
					{
						$DBName = "project_portfolio";
						if (!mysqli_select_db($DBConnect, $DBName))
						{
							echo "<p>Unable to connect to the database.</p>";
						} else
						{
							
							
							$Textarea = stripslashes($_POST["projectbeschrijving"]);
							$TableName = "projects";
							$SQLstring = "UPDATE ".$TableName." SET Project_Description = '". $Textarea."' WHERE User_ID ='".$_SESSION['portfolio']."' AND Project_Name = '".$array[0];
							$QueryResult = mysqli_query($DBConnect, $SQLstring);
							if ($QueryResult === FALSE)
							{
								echo "<p>Unable to execute the query.</p>" . "<p>Error code " . mysqli_error($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
							} else
							{
				 
								echo 'De beschrijving is aangepast.';
							}
						}
						mysqli_close($DBConnect);
					}
				}
			}
		
		
		
		?>
			<form action="#" method="POST">
				<textarea name="projectbeschrijving"><?php echo $projectbeschrijving; ?></textarea>
			</form>
			
			
			
			
			
			
		<?php
			if(isset($_POST["download"])){
			//lijst met bestanden in een folder
			// van vele bestanden een zip maken
			$dir = "projects/".$array[1]."/".$array2[0]."/";
			$files = scandir($dir);rsort($files);
			$zipname = $array2[0].'.zip';
			$zip = new ZipArchive;
			$zip->open($zipname, ZipArchive::CREATE);
			foreach ($files as $file) {
				if ($file != '.' && $file != '..') {
						echo  $file."<br>";             
					$zip->addFile($dir.$file);
					
				}
			}
			$zip->close();
			
			
		   

			// download een bestand
			
				$filename = $zipname;

				if(file_exists($filename)){

					//Get file type and set it as Content Type
					$finfo = finfo_open(FILEINFO_MIME_TYPE);
					header('Content-Type: ' . finfo_file($finfo, $filename));
					finfo_close($finfo);

					//Use Content-Disposition: attachment to specify the filename
					header('Content-Disposition: attachment; filename='.basename($filename));

					//No cache
					header('Expires: 0');
					header('Cache-Control: must-revalidate');
					header('Pragma: public');

					//Define file size
					header('Content-Length: ' . filesize($filename));

					ob_clean();
					flush();
					readfile($filename);
					exit;
				}
			}
			
		
		
		?>
		<form action="#" method="POST">
			<p><input type="submit" name="download" value="download project"></p>
		</form>
    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>