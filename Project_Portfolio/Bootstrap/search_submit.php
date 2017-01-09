<?php 
    if(isset($_POST['submit']) && $_POST['name'] != 'Guest'){ 
        if(isset($_GET['go'])){ 
            if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
                $name=$_POST['name']; 
                //connect  to the database 
                $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error()); 
                //-select  the database to use 
                $mydb=mysql_select_db("project_portfolio"); 
                //-query  the database table 
                $sql="SELECT  User_ID, User_Name FROM User WHERE User_Name LIKE '%" . $name .  "%'"; 
                //-run  the query against the mysql query function 
                $result=mysql_query($sql); 
                //-create  while loop and loop through result set 
                while($row=mysql_fetch_array($result)){ 
                    $UserName  =$row['User_Name']; 
                    $ID=$row['User_ID']; 
                    //-display the result of the array 
                    echo "<ul>\n"; 
                    echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$UserName .  "</a></li>\n"; 
                    echo "</ul>"; 
                } 
            } 
            else{ 
                echo  "<p>Please enter a search query</p>"; 
            } 
        } 
    } 
?> 