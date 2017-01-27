<div id="page-wrapper">
		<?php
			$array = explode("/", $_GET['Project']);
			$array2 = explode(".", $array['2']);
			echo  '<p><a href="?page=fotogalerij"><input type="submit" value="terug naar projecten"></a>';
			echo  '<a href="?page=projectbescrijving&Project='.$_GET['Project'].'&ID='. $_GET['ID'].'"><input type="submit" value="terug naar project '.$array2[0].'"></a></p>';
			echo '<h1>'.$array2[0].'</h1>';
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
					$SQLstring = "SELECT Project_Description FROM ".$TableName." WHERE Project_ID ='".$_GET['ID']."'";
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
			
			if(isset($_POST['edit'])){
                                    if (empty($_POST['projectbeschrijving']))
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
							$Textarea =$_POST["projectbeschrijving"];
							$TableName = "projects";
							$SQLstring = "UPDATE ".$TableName." SET Project_Description = '". $Textarea."' WHERE Project_ID='" . $_GET['ID']. "'";
							$QueryResult = mysqli_query($DBConnect, $SQLstring);
							if ($QueryResult === FALSE)
							{
								echo "<p>Unable to execute the query.</p>" . "<p>Error code " . mysqli_error($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
							} else
							{
                                                            echo header("location:?page=projectbescrijving&Project=". $_GET['Project'] ."&ID= ". $_GET['ID']);
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
                    <p><input type="submit" name="edit" value="edit"></p>
		</form>
    </div><!-- /#wrapper -->