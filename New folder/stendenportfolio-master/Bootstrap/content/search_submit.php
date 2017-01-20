<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12"> 
<?php    
    include('session.php');
    if(!$db) {
        die('sorry we are having some problbems');
    }
    // SET GETTER AS A VARIABLE
    $searchTerm = mysqli_real_escape_string($db,$_GET['name']);

    if ( empty($searchTerm)){
        echo("no key words searched please try again");
    }
    else{
        $sql = mysqli_query(
            $db,
            sprintf(
                "SELECT * FROM User WHERE User_Name LIKE '%s' LIMIT 0,20",
                '%'. $searchTerm .'%'
            )
        );

        while($ser = mysqli_fetch_array($sql)) {
            echo $ser['User_Name'];
            echo '<a href="../index.php?page=portfolio&id=' . $ser['User_ID'] . '"><input type = "submit" value = " Portfolio bekijken "/></a>';
            $_SESSION['portfolio'] = $ser['User_ID'];
        }
    }
    mysqli_close($db);
?>
        </div>
    </div><!-- /.row -->
</div><!-- /#page-wrapper -->