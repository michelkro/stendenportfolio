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
        <div class="col-lg-12" class="letterkleur">
        <?php
		if(!file_exists("projects/".$_SESSION['login_user'])){
				
			mkdir("projects/".$_SESSION['login_user']);
		}
		if(!file_exists("projects/".$_SESSION['login_user']."/projectpicture")){
			mkdir("projects/".$_SESSION['login_user']."/projectpicture");
		}
		if(isset($_POST["submit1"])){
			if($_SESSION['login_user'] == NULL){
				echo "you must be logged in to upload a project";
			}
		else{
			if(empty($_POST['projectName'])){
                echo "vul alles in";
            }
			else{
				$projectName = $_POST['projectName'];
				if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/png"))){
				
					if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "text/css") || ($_FILES["file"]["type"] == "text/html") || ($_FILES["file"]["type"] == "audio/mpeg3")
					|| ($_FILES["file"]["type"] == "application/pdf")  || ($_FILES["file"]["type"] == "application/mspowerpoint")  || ($_FILES["file"]["type"] == "application/vnd.ms-powerpoint")  || ($_FILES["file"]["type"] == "text/plain")  || ($_FILES["file"]["type"] == "application/excel")
					|| ($_FILES["file"]["type"] == "application/zip")  || ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")  || ($_FILES["file"]["type"] == "text/x-php") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "text/x-php")  )){
						
						if ($_FILES["file"]["error"] > 0)
						{
							echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
						} else{
							//echo "Upload: " . $_FILES["file"]["name"] . "<br />";
							//echo '<br>'. $_FILES["file"]["type"] . "<br />";
							$array = explode("/", $_FILES["file"]["type"]);
							$extension = $array[1];
							//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
							//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
							
							

							move_uploaded_file($_FILES["file"]["tmp_name"], "projects/".$_SESSION['login_user']."/projectpicture/".$projectName.".".$extension);
							//echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
							if(!file_exists("projects/".$_SESSION['login_user']."/".$projectName)){
							mkdir("projects/".$_SESSION['login_user']."/".$projectName);
							
									if ($_FILES["file"]["error"] > 0)
									{
										echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
									} else{
										//echo "Upload: " . $_FILES["file"]["name"] . "<br />";
										//echo '<br>'. $_FILES["file"]["type"] . "<br />";
										$array = explode("/", $_FILES["file"]["type"]);
										$extension = $array[1];
										//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
										//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
										
										
										move_uploaded_file($_FILES["file"]["tmp_name"], "content/projects/".$_SESSION['login_user']."/projectpicture/".$projectName.".".$extension);
										//echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
										if(!file_exists("content/projects/".$_SESSION['login_user']."/".$projectName)){
										mkdir("content/projects/".$_SESSION['login_user']."/".$projectName);
									

								
								$total = count($_FILES['upload']['name']);

								// Loop through each file
								for($i=0; $i<$total; $i++) {
								  //Get the temp file path
								  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

								  //Make sure we have a filepath
								  if ($tmpFilePath != ""){
									//Setup our new file path
									$newFilePath = "content/projects/".$_SESSION['login_user']."/".$projectName."/". $_FILES['upload']['name'][$i];
                          
									//Upload the file into the temp dir
									if(move_uploaded_file($tmpFilePath, $newFilePath)) {
										
										                                
									}															
								}
							 }	
						  
							}
								}
				
										$DBConnect = mysqli_connect("localhost", "root", "");
										if ($DBConnect === FALSE){
											echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
										} else{
											$DBName = "project_portfolio";
											if (!mysqli_select_db($DBConnect, $DBName)){
												echo "<p>error</p>";
											}else{
												$SQLstring = "INSERT INTO projects (User_Email, Project_Name, SLB_Opdracht) VALUES('".$_SESSION['login_user']."', '".$projectName."', '0')";
												mysqli_query($DBConnect, $SQLstring);


											}
											mysqli_close($DBConnect);
										}

						
						$total = count($_FILES['upload']['name']);

						// Loop through each file
						for($i=0; $i<$total; $i++) {
						  //Get the temp file path
						  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

						  //Make sure we have a filepath
						  if ($tmpFilePath != ""){
							//Setup our new file path
							$newFilePath = "projects/".$_SESSION['login_user']."/".$projectName."/". $_FILES['upload']['name'][$i];

							//Upload the file into the temp dir
							if(move_uploaded_file($tmpFilePath, $newFilePath)) {

                                $DBConnect = mysqli_connect("localhost", "root", "");
                                if ($DBConnect === FALSE){
                                    echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
                                } else{
                                    $DBName = "project_portfolio";
									if (!mysqli_select_db($DBConnect, $DBName)){
                                        echo "<p>error</p>";
                                    }else{
                                        $TableName = "projects";
                                        $SQLstring = "INSERT INTO project (User_ID, Project_Name, SLB_Opdracht) VALUES('".$_SESSION['login_user']."', '".$projectName."', '".$_POST['SLB']."')";
                                        mysqli_query($DBConnect, $SQLstring);


                                    }
                                    mysqli_close($DBConnect);
                                }                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
							}
							else{die;}
						  }
						  else{die;}
						}
							}
							else{}
						

					
						}
						
						echo "uw project is geupload";
					}
					else{
						echo "Uw bestand type bestand mag niet geupload worden.";
					}

				
				}	
				else{
					echo "Alleen afbeeldingen kunnen geupload worden.";
				}
				
				
		}}	
		}
		//}
        ?>
		<br>
		<form action="#" method="POST" enctype="multipart/form-data">
			<p class="letterkleur">Project name :</p>
			<p><input type="text" name="projectName" placeholder="Naam van uw project" class="letterkleur"></p>
			<p class="letterkleur">Project picture :</p>
			<p><input type="file" name="file" class="letterkleur"></p>
			<p class="letterkleur">Project files :</p>
			<p><input type="file" multiple="multiple" name="upload[]" class="letterkleur"></p>
            <p class="letterkleur">Is het project een SLB opdracht?</p>
            <p class="letterkleur"><input type="radio" name="SLB" value="1"> Ja</p>
			<p class="letterkleur"><input type="radio" name="SLB" value="0" checked=checked> Nee</p>
			<p><input type="submit" name="submit1" value="upload project" class="letterkleur"></p>
			
		</form>
		<p><a href="fotogalerij.php"><input type="submit" value="back" class="letterkleur"></a></p>
        </div>
    </div>
</div>
    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>