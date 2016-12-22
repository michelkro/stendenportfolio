<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
                                    echo '<a href="Gastenboek2.php"><input type="submit" value="terug"></a>';
                                    echo  "<hr>";
                                    
                                if(isset($_POST["zichtbaar"])){
                                   $query1 = "UPDATE `Guestbook` SET `Publicity` = 'Y' WHERE MessageID = '".$ID."'";
                                   mysqli_query($connect, $query1) OR DIE("ERROR Het bericht is niet zichtbaar gemaakt.");
                                   echo 'Het bericht is zichtbaar gemaakt.';
                                   header("Refresh:0");
                               } 
                               
                               if(isset($_POST["verberg"])){
                                   $query2 = "UPDATE `Guestbook` SET `Publicity` = 'N' WHERE MessageID = '".$ID."'";
                                   mysqli_query($connect, $query2) OR DIE("ERROR Het bericht is niet verbergt.");
                                   echo 'Het bericht is verbergt.';
                                   header("Refresh:0");
                               } 
                               
                               if(isset($_POST["verwijder"])){
                                   $query3 = "DELETE FROM `Guestbook` WHERE MessageID = '".$ID."'";
                                   mysqli_query($connect, $query3) OR DIE("ERROR Het bericht is niet verwijderd.");
                                   echo 'Het bericht is verwijderd.';
                                   header('Location: gastenboek2.php');
                               } 
                            }
                        }
                        
                        
        ?>
    </body>
</html>
