<!DOCTYPE html>
<html>
	<head>
		<title>Gastenboek</title>
                <style>
                    #body{
                        width: 75%;
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
	</head>
	<body>
            <div id="body">
                <h1>Gastenboek</h1>
                <p>Welkom bij het gastenboek.</p>
                <hr>

                <?php
                
                    //------------------------------------OUTPUT----------------------------------------------------
                  
                        $connect = mysqli_connect("localhost", "root", "");
                        if(!$connect){
                            DIE("Could not connect: " . mysqli_error($connect));
                        }
                        mysqli_select_db($connect, "project_portfolio");	
                        $query = "SELECT Name, E-Mail, Message, DateTime FROM `Guestbook` WHERE Publicity = Y";
                         $result = mysqli_query($connect, $query);
                        if(mysqli_num_rows($result) > 0){

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
                            echo "Er zijn in dit gastenboek nog geen bericht geplaatst. Wees de eerste!";
                        }

                        mysqli_close($connect);


//---------------------------------------------------------------INPUT-----------------------------------------------

                        if(isset($_POST["submit"])){

                                    
                                    $date = date("F-d-Y h:i:A");
                                    $name = $_POST["name"];
                                    $mail = $_POST["mail"];
                                    $text = $_POST["text"];


                            $connect = mysqli_connect("localhost", "root", "");
                            if(!$connect){
                                DIE("Could not connect: " . mysqli_error($connect));
                            }
                            mysqli_select_db($connect, "project_portfolio");
                            $query2 = "INSERT INTO Guestbook (Name, E-Mail, Message, DateTime)
                                VALUES ('".$name."','".$mail."','".$text."','".$date."')";
                            mysqli_query($connect, $query2) OR DIE("<br><br> Data has not been inserted");
                            echo "<br> Het bericht is verstuurd. Zodra de eigenaar van dit gastenboek het bericht heeft goedkeurt zal het in het gastenboek worden plaatst";
                            mysqli_close($connect);
                            
                        }
                    ?>

                    <form action="#" method="POST">
                        <p><input type="text" name="name" placeholder="Uw naam"></p>
                        <p><input type="text" name="mail" placeholder="Uw Emailadres"></p>

                        <p><textarea name="text" placeholder="Plaats hier uw bericht, gebruik maximaal 1000 tekens"></textarea></p>
                        <p><input type="submit" value="submit" name="submit"></p>
                    </form>
            </div>
	</body>
</html>