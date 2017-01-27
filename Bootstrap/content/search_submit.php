      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Contact opnemen met: <small><?php echo $row2['User_Name'];?></small></h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="icon-dashboard"></i> Hoofdpagina</a></li>
            </ol>
          </div>
        </div><!-- /.row -->
            <?php
                if(!$db) {
                    die('sorry we are having some problbems');
                }
                // SET GETTER AS A VARIABLE
                $searchTerm = mysqli_real_escape_string($db,$_POST['search']);

                if ( empty($searchTerm)){
                    echo("Er zijn geen zoekresultaten.");
                }
                else{
                    $sql = mysqli_query(
                        $db,
                        sprintf(
                            "SELECT * FROM User WHERE User_Name LIKE '%s' AND User_Type_ID = 4 LIMIT 0,20",
                            '%'. $searchTerm .'%'
                        )
                    );

                    while($ser = mysqli_fetch_array($sql)) {
                        echo $ser['User_Name'];
                        echo '<a href="../index.php?page=portfolio&id=' . $ser['User_ID'] . '"></br><input type = "submit" value = " Portfolio bekijken "/></a> </br>';
                        $_SESSION['portfolio'] = $ser['User_ID'];
                    }
                }
                mysqli_close($db);
            ?>
      </div><!-- /#page-wrapper -->