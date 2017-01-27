<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Stijl je portfolio</h1>
			<ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i> Hoofdpagina</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
            </ol>
          </div>
        </div><!-- /.row -->
        <?php
            $header = "#".$_POST["header"];
            $menu = "#".$_POST["menu"];
            $background = "#".$_POST["background"];
            $text = "#".$_POST["text"];
            $font = $_POST['font'];
            $menuhover = "#".$_POST['menuhover'];
            $textbox = "#".$_POST['textbox'];
            $SQLstring = "UPDATE design SET Header_Color = '$header', Background = '$background', "
                    . "Menu_Colour = '$menu', Text_Colour = '$text', Font = '$font', Menu_Active = '$menuhover', Textbox_Colour = '$textbox'  WHERE User_ID =" .$row['User_ID'];
            $QueryResult = mysqli_query($db, $SQLstring);
            if($QueryResult === FALSE){
                echo "<h1>Het is helaas niet gelukt om uw stijl aan te passen, probeer het later nog eens.</h1>";
            }
            else{
                echo "<h1>Uw stijl is aangepast!</h1>";
            }
            mysqli_close($db);
        ?>    
      </div><!-- /#page-wrapper -->