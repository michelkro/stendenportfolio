<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Projecten & Foto's</h1>
            <ol class="breadcrumb">
              <?php
                echo '<li><a href="?page=portfolio&id='. $_GET['id'] .'"><i class="icon-dashboard"></i>'. $row2['User_Name'] . "'s Portfolio</a></li>";
                echo '<li><a href="?page=fotogalerij_1&id='. $_GET['id'] .'"><i class="icon-dashboard"></i>'  . "Projecten</a></li>";
              ?>
            </ol>
          </div>
        </div><!-- /.row -->
		<?php
		$query = "SELECT * FROM projects WHERE User_ID =" . $row2['User_ID'];                   
                $result = mysqli_query($db, $query);
                
		$dir = 'projects/'.$row2['User_Email'].'/projectpicture/';
		if(file_exists($dir) == FALSE){
                    echo 'Er is nog geen projecten geupload.';
		}
		else{
                    $files = scandir($dir);		
                    rsort($files);
                    foreach ($files as $file) {
                        if ($file != '.' && $file != '..') {
                            echo '<div id="project5">';
                            $query2 = "SELECT * FROM projects WHERE Picture= " . "'" .$file . "' && User_ID=" . $row2['User_ID'];
                            $result2 = mysqli_query($db, $query2);
                            $item2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
                            echo "<h1>" . $item2['Project_Name'] . "</h1>";
                            echo '<a href="?page=projectbescrijving&Project=projects/'.$row['User_Email'].'/'.$file.'&ID='.$item2['Project_ID'].'"><img src="' . $dir . $file . '" height="250px" width="250px"/></a>';
                            echo '</div>';
                        }
                    }
		}
		?>
      </div><!-- /#page-wrapper -->