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
            <h1>Gastenboek <small>Frits Huig</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
              <li><a href="Gastenboek.php"><i class="icon-dashboard"></i> Terug naar het gastenboek</a></li>
            </ol>
          </div>
            <div id="body">
                   <?php
                        $connect = mysqli_connect("localhost", "root", "");
                        if(!$connect){
                            DIE("Could not connect: " . mysqli_error($connect));
                        }
                        mysqli_select_db($connect, "project_portfolio");	
                        $query = "SELECT * FROM `Guestbook`";
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
                                echo '<a href="Gastenboek3.php?ID='.$item['MessageID'].'"><input type="submit" value="wijzigen"></a>';
                                echo  "<hr>";
                              
                        }    


                        mysqli_free_result($result);


                        } else {
                            echo "Er zijn in dit gastenboek nog geen berichten geplaatst.";
                        }

                        mysqli_close($connect);
                        
                        
        ?>
				</div>
            </div><!-- /.row -->

      </div><!-- /#page-wrapper -->
