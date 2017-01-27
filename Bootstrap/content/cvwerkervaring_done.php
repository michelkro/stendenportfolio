
<?php

//        programmeur : Danny Katerbarg
//        datum : 03-01-2017
//        functie edit


if (empty($_POST['werkervaring']))
{
    echo "<p>You must fill in every field!</p>";
} else
{
    $DBConnect = mysqli_connect("localhost", "root", "");
    if ($DBConnect === FALSE)
    {
        echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
    } else
    {
        $DBName = "project_portfolio";
        if (!mysqli_select_db($DBConnect, $DBName))
        {
            echo "<p>Unable to connect to the database.</p>";
        } else
        {
            $cvID = $_GET["cvID"];
            $TableName = "Text_CV";
            $Textarea = stripslashes($_POST["werkervaring"]);

            $SQLstring = "UPDATE $TableName SET Werkervaring='$Textarea' WHERE User_ID=". $row['User_ID'];
            $QueryResult = mysqli_query($DBConnect, $SQLstring);
            if ($QueryResult === FALSE)
            {
                echo "<p>Unable to execute the query.</p>" . "<p>Error code " . mysqli_error($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
            } else
            {

                echo header("location:?page=cv&ID=" . $row['User_ID'] . "");
            }
        }
        mysqli_close($DBConnect);
    }
}
?>
