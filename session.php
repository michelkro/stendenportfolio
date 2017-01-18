<?php
    include('config.php');
    session_start();
    if(!isset($_SESSION['login_user'])){
        $_SESSION['login_user'] = null;
    }else{
    $user_check = $_SESSION['login_user'];
   
    $ses_sql = mysqli_query($db,"select * from User where User_Email = '$user_check' ");
   
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
    $login_session = $row['User_Name'];
    $user_check2 = $_SESSION['portfolio'];
    $ses_sql2 = mysqli_query($db, "select * from User where User_ID = '$user_check2' ");
    $row2 = mysqli_fetch_array($ses_sql2,MYSQLI_ASSOC);
    $ses_sql3 = mysqli_query($db, "select * from Design where User_ID = '$user_check2'");
    $row3 = mysqli_fetch_array($ses_sql3,MYSQLI_ASSOC);
   }
?>