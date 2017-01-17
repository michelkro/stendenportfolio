<?php
    $SQLstring = "SELECT * FROM design WHERE User_ID =  " . $row['User_ID'];
    $QueryResult = mysqli_query($db, $SQLstring);
    $Row = mysqli_fetch_assoc($QueryResult);
    $HeaderColor = $Row['Header_Color'];
    $BackgroundColor = $Row['Background'];
    $MenuColor = $Row['Menu_Colour'];
    $TextColor = $Row['Text_Colour'];
    mysqli_free_result($QueryResult);
    mysqli_close($db);
?>

