<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Projecten & Foto's</h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
			  <li><a href="/Bootstrap/index.php?page=projectupload"><input type="submit" name="uploadproject" value="Upload a new project"></a></li>
            </ol>
          </div>
        </div><!-- /.row -->
		<?php
		if(isset($_SESSION['portfolio'])){
		
			echo $row2['User_Email'];
			echo '<br>';
			$dir = 'content/projects/'.$row2['User_Email'].'/projectpicture/';
			if(file_exists($dir) == FALSE){
				echo 'Er is nog geen project geupload.';
			}
			else{
				$files = scandir($dir);
				
				rsort($files);
				foreach ($files as $file) {
					if ($file != '.' && $file != '..') {
						echo $file;
						echo '<a href="/Bootstrap/index.php?page=projectbescrijving&Project=content/projects/'.$row2['User_Email'].'/'.$file.'"> >"<img src="' . $dir . $file . '"/></a>';
					}
				}
			}
			
			if($_SESSION['login_user'] == $row2['User_Email']){
				
			$dir = 'content/projects/'.$row2['User_Email'].'/SLB/projectpicture/';
			if(file_exists($dir) == FALSE){
				
			}
			else{
				$files = scandir($dir);
				
				rsort($files);
				foreach ($files as $file) {
					if ($file != '.' && $file != '..') {
						echo $file;
						echo '<a href="/Bootstrap/index.php?page=projectbescrijving2&Project=content/projects/'.$row2['User_Email'].'/SLB/'.$file.'"> >"<img src="' . $dir . $file . '"/></a>';
					}
				}
			}	
			

			
			}
		}
		
		
		
		?>
      </div><!-- /#page-wrapper -->