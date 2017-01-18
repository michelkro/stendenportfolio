<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
        <?php
		
		if(isset($_POST["submit1"])){
			if($_SESSION['login_user'] == NULL){
				echo "you must be logged in to upload a project";
			}
			else{
				if(file_exists("project/".$_SESSION['portfolio']) == FALSE){
					mkdir("projects/".$_SESSION['portfolio']);
				}
				$projectName = $_POST['projectName'];
				if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/png"))){
				// The same as in index.php
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

							mkdir("projects/".$_SESSION['login_user']."/projectpicture");
							move_uploaded_file($_FILES["file"]["tmp_name"], "projects/".$_SESSION['portfolio']."/projectpicture/".$projectName.".".$extension);
							//echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
							mkdir("projects/".$row2['User_ID']."/projectpicture/".$projectName);

						}
						
						$total = count($_FILES['upload']['name']);

						// Loop through each file
						for($i=0; $i<$total; $i++) {
						  //Get the temp file path
						  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

						  //Make sure we have a filepath
						  if ($tmpFilePath != ""){
							//Setup our new file path
							$newFilePath = "projects/".$_SESSION['portfolio']."/".$projectName."/". $_FILES['upload']['name'][$i];

							//Upload the file into the temp dir
							if(move_uploaded_file($tmpFilePath, $newFilePath)) {

							  

							}
						  }
						}
						
						$DBConnect = mysqli_connect("localhost", "root", "");
						if ($DBConnect === FALSE){
							echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
						} else{
							$DBName = "project_portfolio";
							if (!mysqli_select_db($DBConnect, $DBName)){
								echo "<p>Druk op edit om een beschrijving van het project te geven.</p>";
							}else{
								$TableName = "projects";
								$SQLstring = "INSERT INTO project (User_ID, Project_Name) VALUES('".$_SESSION['portfolio']."', '".$projectName."')";
								mysqli_query($DBConnect, $SQLstring);
								
								
							}
							mysqli_close($DBConnect);
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
					
				
			}		
		}

        ?>
		<form action="#" method="POST" enctype="multipart/form-data">
			<p>Project name :</p>
			<p><input type="text" name="projectName"></p>
			<p>Project picture :</p>
			<p><input type="file" name="file"></p>
			<p>Project files :</p>
			<p><input type="file" multiple="multiple" name="upload[]"></p>
			<p><input type="submit" name="submit1" value="upload project"></p>
		</form>
		<p><a href="fotogalerij.php"><input type="submit" value="back"></a></p>
		</div>
	</div>
</div>