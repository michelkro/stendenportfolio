<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <?php
                echo "<h1>". $row2['User_Name'] ."'s Gastenboek</h1>";
            ?>
              <h1></h1>
            <ol class="breadcrumb">
              <?php
                echo '<li><a href="?page=portfolio&id='. $_GET['id'] .'"><i class="icon-dashboard"></i> '. $row2['User_Name'] ."'s Portfolio</a></li>";
                echo '<li><a href="?page=Gastenboek&id=' . $row2['User_ID'] . '"><i class="icon-dashboard"></i>' . $row2['User_Name'] . "'s Gastenboek</a></li>";
              ?>
              
            </ol>
          </div>
            <div id="body">
                <?php
                    //------------------------------------OUTPUT----------------------------------------------------
                  
                        $connect = mysqli_connect("localhost", "root", "");
                        if(!$connect){
                            DIE("Could not connect: " . mysqli_error($connect));
                        }
                        mysqli_select_db($connect, "project_portfolio");	
                        $query = "SELECT `Name`, `E-Mail`, `Message`, `DateTime` FROM `Guestbook` WHERE User_ID=". $row2['User_ID'] ." AND Publicity = '1'";
                         $result = mysqli_query($connect, $query);
                        if(@mysqli_num_rows($result) != 0){

                        while($item = mysqli_fetch_assoc($result)){


                                echo  "<div id='NaamEmail'><p>".$item['Name'];
                                echo  "<br>";
                                echo  $item['E-Mail']."</p></div>";
                                echo  "<p>".$item['Message']."</p>";
                                echo  "<div id='Datum_Tijd'>".$item['DateTime']."</div>";
                                echo  "<hr>";
                        }

                        mysqli_free_result($result);


                        } else {
                            echo "<p>Er zijn in dit gastenboek nog geen berichten geplaatst. Wees de eerste!</p>";
                        }

                        mysqli_close($connect);


//---------------------------------------------------------------INPUT-----------------------------------------------

                        if(isset($_POST["submit"])){
							if(empty($_POST["name"]) || empty($_POST["mail"]) || empty($_POST["text"])){
								echo "vul alles in";
							}
							else{
								if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
									echo 'vul een geldig Emailadres in';
								}
                                else{   
                                    $date = date("Y-m-d H:i:s");
                                    $name = $_POST["name"];
                                    $mail = $_POST["mail"];
                                    $text = $_POST["text"];
                                    $id = $row2['User_ID'];

                                        $connect = mysqli_connect("localhost", "root", "");
                                        if(!$connect){
                                                DIE("Could not connect: " . mysqli_error($connect));
                                        }
                                        mysqli_select_db($connect, "project_portfolio");
                                        $query2 = "INSERT INTO Guestbook (`Name`, `E-Mail`, `Message`, `DateTime`, `User_ID` , `Publicity`)
                                                VALUES ('$name','$mail','$text','$date','$id' , '0');";
                                        mysqli_query($connect, $query2) OR DIE("<br><br> Data has not been inserted");
                                        echo "<br> Het bericht is verstuurd. Zodra de eigenaar van dit gastenboek het bericht heeft goedkeurt zal het in het gastenboek worden plaatst";
                                        mysqli_close($connect);
                                }
                        } 
                    }
                ?>
        <form action="#" method="POST">
            <p><input class="form-control" style="width: 250px" name="name" placeholder="Uw naam"></p>
            <p><input class="form-control" style="width: 250px" name="mail" placeholder="Uw Emailadres"></p>

            <p><textarea class="form-control" style="height: 150px" name="text" placeholder="Plaats hier uw bericht, gebruik maximaal 1000 tekens"></textarea></p>
            <p><button type="submit" class="btn btn-primary" value="Verzenden" name="submit">Verzenden</button></p>
        </form>
    </div><!-- /.row -->

</div><!-- /#page-wrapper -->