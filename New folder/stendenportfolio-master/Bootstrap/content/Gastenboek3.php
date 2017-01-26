    <!-- Add custom CSS here -->
    <style>
                    #body{
                        width: 96%;
                        margin: 0 auto;
                    }
                    #Datum_Tijd{
                        font-size: 9pt;
                    }
                    #NaamEmail{
                        font-weight: bold;
                    }
                    textArea{
                        width: 400px;
                        height: 150px;
                    }
    </style>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Gastenboek Admin</h1>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
              <li><a href="index.php?page=gastenboek"><i class="icon-dashboard"></i> Terug naar het gastenboek</a></li>
            </ol>
          </div>
            <div id="body">
                    <?php
            $ID = $_GET["ID"];
            $connect = mysqli_connect("localhost", "root", "");
                        if(!$connect){
                            DIE("Could not connect: " . mysqli_error($connect));
                        }
                        mysqli_select_db($connect, "project_portfolio");	
                        $query = "SELECT * FROM `Guestbook` WHERE MessageID = '".$ID."'";
                        $result = mysqli_query($connect, $query);

                        if(mysqli_num_rows($result) > 0){

                            while($item = mysqli_fetch_assoc($result)){

                                    echo  "<div id='NaamEmail'><p>".$item['Name'];
                                    echo  "<br>";
                                    echo  $item['E-Mail']."</p></div>";
                                    echo  "<p>".$item['Message']."</p>";
                                    echo  "<div id='Datum_Tijd'>".$item['DateTime']."</div>";
                                    echo '<br><br>';
                                    if($item['Publicity']== "Y"){
                                        echo '<p>Dit bericht is zichtbaar.</p>';
                                    }
                                    else{
                                        echo '<p>Dit bericht is verborgen.</p>';
                                    }
                                    echo '<form action="#" method="POST">'
                                            . '<p><input type="submit" name="zichtbaar" value="zichtbaar maken">'
                                            . '<input type="submit" name="verberg" value="verbergen">'
                                            . '<input type="submit" name="verwijder" value="verwijderen"></p>'
                                            . '</form>';
                                    echo '<a href="index.php?page=gastenboek2"><input type="submit" value="terug"></a>';
                                    echo  "<hr>";
                                    
                                if(isset($_POST["zichtbaar"])){
                                   $query1 = "UPDATE `Guestbook` SET `Publicity` = 'Y' WHERE MessageID = '".$ID."'";
                                   mysqli_query($connect, $query1) OR DIE("ERROR Het bericht is niet zichtbaar gemaakt.");
                                   echo 'Het bericht is zichtbaar gemaakt.';
                                   
                               } 
                               
                               if(isset($_POST["verberg"])){
                                   $query2 = "UPDATE `Guestbook` SET `Publicity` = 'N' WHERE MessageID = '".$ID."'";
                                   mysqli_query($connect, $query2) OR DIE("ERROR Het bericht is niet verbergt.");
                                   echo 'Het bericht is verbergt.';
                                   
                               } 
                               
                               if(isset($_POST["verwijder"])){
                                   $query3 = "DELETE FROM `Guestbook` WHERE MessageID = '".$ID."'";
                                   mysqli_query($connect, $query3) OR DIE("ERROR Het bericht is niet verwijderd.");
                                   echo 'Het bericht is verwijderd.';
                                   
                               } 
                            }
                        }
                        
                        
        ?>
            </div><!-- /.row -->
		</div>
      </div><!-- /#page-wrapper -->