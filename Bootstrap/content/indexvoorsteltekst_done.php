<?php
 
if (empty($_POST['voorsteltekst']))
{
    echo "<p>You moet alles invullen!</p>";
} else
{
    $DBConnect = mysqli_connect("localhost", "root", "");
    if ($DBConnect === FALSE)
    {
        echo "<p>Kan geen verbinding met de database maken</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
    } else
    {
        $DBName = "project_portfolio";
        if (!mysqli_select_db($DBConnect, $DBName))
        {
            echo "<p>Unable to connect to the database.</p>";
        } else
        {
            $TableName = "Text_CV";
            $Textarea = stripslashes($_POST["voorsteltekst"]);
 
            $SQLstring = "UPDATE $TableName SET Voorsteltekst='$Textarea' WHERE User_ID=". $row['User_ID'];
            $QueryResult = mysqli_query($DBConnect, $SQLstring);
            if ($QueryResult === FALSE)
            {
                echo "<p>Unable to execute the query.</p>" . "<p>Error code " . mysqli_error($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
            } else
            {
 
                echo header("location:?page=home&ID=" . $row['User_ID'] . "");
            }
        }
        mysqli_close($DBConnect);
    }
}
?>