<?php
    include('config.php');
    session_start();
    if(!isset($_SESSION['login_user'])){
        $_SESSION['login_user'] = null;
    }else{
        $user_check = $_SESSION['login_user'];

        $ses_sql = mysqli_query($db,"select * from User where User_Email = '$user_check' ");
        $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
        mysqli_free_result($ses_sql);
        $login_session = $row['User_Name'];
        $login_id = $row['User_ID'];
        $ses_sql3 = mysqli_query($db, "select * from Design where User_ID = '$login_id'");
        $row3 = mysqli_fetch_array($ses_sql3,MYSQLI_ASSOC);
        $HeaderColor_Base = $row3['Header_Color'];
        $BackgroundColor_Base = $row3['Background'];
        $MenuColor_Base = $row3['Menu_Colour'];
        $TextColor_Base = $row3['Text_Colour'];
        mysqli_free_result($ses_sql3);
        if(isset($_GET['id'])){
            $_SESSION['portfolio'] = $_GET['id'];
            $user_check2 = $_SESSION['portfolio'];
            $ses_sql2 = mysqli_query($db, "select * from User where User_ID = '$user_check2' ");
            $row2 = mysqli_fetch_array($ses_sql2,MYSQLI_ASSOC);
            mysqli_free_result($ses_sql2);
            $SQLstring = mysqli_query($db, "select * from Design where User_id = '$user_check2'");
            $Row = mysqli_fetch_assoc($SQLstring);
            $HeaderColor_Home = $Row['Header_Color'];
            $BackgroundColor_Home = $Row['Background'];
            $MenuColor_Home = $Row['Menu_Colour'];
            $TextColor_Home = $Row['Text_Colour'];
            mysqli_free_result($SQLstring);
        }
    }
?>