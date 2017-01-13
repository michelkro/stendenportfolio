<?php

if (isset($_POST['submit']) && $_POST['name'] != 'Guest') {
    if (isset($_GET['go'])) {
        if (preg_match("/^[  a-zA-Z]+/", $_POST['name'])) {
            $name = $_POST['name'];

            $connect = mysqli_connect("localhost", "root", "");
            if (!$connect) {
                DIE("Could not connect: " . mysqli_error($connect));
            }
            mysqli_select_db($connect, "project_portfolio");
            $query = "SELECT  User_ID, User_Name FROM User WHERE User_Name LIKE '%" . $name . "%'";

            $result = mysqli_query($connect, $query);

            while ($row = mysqli_fetch_array($result)) {
                $UserName = $row['User_Name'];
                $ID = $row['User_ID'];

                echo "<ul>\n";
                echo "<li>" . "<a  href=\"index.php?id=$ID\">" . $UserName . "</a></li>\n";
                echo "</ul>";
            }
        } else {
            echo "<p>Please enter a search query</p>";
        }
    }
}
?> 
