<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
            <h1>Beoordelingen<small> Beoordelingen voor SLB'ers</small></h1>
				<ol class="breadcrumb">
					<li><a href="index.php"><i class="icon-dashboard"></i> Dashboard</a></li>
					<li class="active"><i class="icon-file-alt"></i> Beoordelingen </li>
				</ol>
				<div class="row">
				<?php
				$SQL = "SELECT User_Name, Project_Description, Project_Name, Mark FROM user, projects WHERE (User_Type_ID = 1 or User_Type_ID = 4) and projects.User_ID = user.User_ID and SLB_Opdracht != 0";
				$Result = mysqli_query($db, $SQL);
				echo "<table style='margin-left: 3%; width:90%;'><th class='margin'> Studentnaam </th><th class='margin'> Beschrijving </th><th class='margin'> Projectnaam </th><th class='margin'> Cijfer </th>";
				while($row = mysqli_fetch_assoc($Result)){
					echo "<tr><td class='margin'>" .$row['User_Name']. "</td>";
					echo "<td class='margin'>" .$row['Project_Description']. "</td>";
					echo "<td class='margin'>" .$row['Project_Name']. "</td>";
					echo "<td class='margin'> <form action='#' method='POST'><input type='number' name='mark'/> <input type='submit' name='submit3' value='Opslaan'></form></td></tr>";
				}
				echo "</table>";
				if(isset($_POST['submit3'])){
					$mark = htmlentities($_POST['mark']);
					$id = $_GET['cijferid'];
					if($mark > 10){
						echo "Cijfer is niet mogelijk";
					}else{
						$SQLinsert = "UPDATE projects SET Mark = $mark WHERE projects.Project_ID = $id";
						$Resultinsert = mysqli_query($db, $SQLinsert);
					}
				}
				?>
			</div>
		</div>
	</div>
</div>