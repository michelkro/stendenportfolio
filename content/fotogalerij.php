      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Projecten & Foto's</h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
			  <li><a href="projectupload.php"><input type="submit" name="uploadproject" value="Upload a new project"></a></li>
            </ol>
          </div>
        </div><!-- /.row -->
		<?php
		
		$dir = 'projects/'.$_SESSION['portfolio'].'/projectpicture/';
		$files = scandir($dir);
		
		rsort($files);
		foreach ($files as $file) {
			if ($file != '.' && $file != '..') {
				echo '<a href="projectbescrijving.php?Project=projects/'.$_SESSION['portfolio'].'/'.$file.'"> >"<img src="' . $dir . $file . '"/></a>';
			}
		}
		
		
		
		
		
		?>
      </div><!-- /#page-wrapper -->