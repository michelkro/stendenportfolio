<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Gastenboek <small>Frits Huig</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
              <li><a href="Gastenboek2.php"><i class="icon-dashboard"></i> Admin Gastenboek</a></li>
            </ol>
          </div>
            <div id="body">
                <?php
                echo $row2['User_ID'];
                    //------------------------------------OUTPUT----------------------------------------------------
                  
                        $connect = mysqli_connect("localhost", "root", "");
                        if(!$connect){
                            DIE("Could not connect: " . mysqli_error($connect));
                        }
                        mysqli_select_db($connect, "project_portfolio");	
                        $query = "SELECT `Name`, `E-Mail`, `Message`, `DateTime` FROM `Guestbook` WHERE Publicity = 'Y'";
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
							if(empty($_POST['userName']) || empty($_POST['userPass'])){
								echo "vul alles in";
							}
							else{
								if (!filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
									echo 'vul een geldig Emailadres in';
								}
                                else{   
                                    $date = date("Y-n-d h:i:A");
                                    $name = $_POST["name"];
                                    $mail = $_POST["mail"];
                                    $text = $_POST["text"];


									$connect = mysqli_connect("localhost", "root", "");
									if(!$connect){
										DIE("Could not connect: " . mysqli_error($connect));
									}
									mysqli_select_db($connect, "project_portfolio");
									$query2 = "INSERT INTO Guestbook (`Name`, `E-Mail`, `Message`, `DateTime`, `User_ID`)
										VALUES ('".$name."','".$mail."','".$text."','".$date."','".$row2['User_ID']."');";
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