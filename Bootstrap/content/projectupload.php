<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
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
                                    $SQLstring = "INSERT INTO projects (User_ID, Project_Name, SLB_Opdracht, Picture) VALUES('".$row['User_ID']."', '".$projectName."', '".$_POST['SLB']."', '". $projectName.".".$extension ."')";
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
		<form action="#" method="POST" enctype="multipart/form-data">
			<p>Project name :</p>
			<p><input type="text" name="projectName"></p>
			<p>Project picture :</p>
			<p><input type="file" name="file"></p>
			<p>Project files :</p>
			<p><input type="file" multiple="multiple" name="upload[]"></p>
                <p>Is het project een SLB opdracht?</p>
                <p><input type="radio" name="SLB" value="1"> Ja</p>
			<p><input type="radio" name="SLB" value="0" checked=checked> Nee</p>
			<p><input type="submit" name="submit1" value="upload project"></p>
			
		</form>
		<p><a href="?page=fotogalerij"><input type="submit" value="back"></a></p>
        </div>
    </div>
</div>