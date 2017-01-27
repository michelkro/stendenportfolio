<?php
    $_SESSION['portfolio'] = $_GET['id'];
    echo header("location:../index.php?id=" . $_GET['id'] . "");
?>
