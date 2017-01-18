<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1>Studentenoverzicht</h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="icon-dashboard"></i> Dashboard</a></li>
                <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
            </ol>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    $query = 'select User_ID from User where User_ID = ' . $item['User_ID'];
                    $_SESSION['portfolio'] = mysqli_query($db, $query);
                }
                $query = "SELECT User_Name, User_Education, User_Email, User_ID FROM user WHERE User_Type_ID = 4";                   
                $result = mysqli_query($db, $query);

                if(mysqli_num_rows($result) > 0){
                    echo "<div class='table-responsive'>";
                    echo "<table class='table table-hover'>";
                    echo "<thead>";
                    echo "<tr>
                            <th><h3>Naam</h3></th>
                            <th><h3>Opleiding</h3></th>
                            <th><h3>Email</h3></th>
                          </tr>";
                     echo "</thead>";

                    while($item = mysqli_fetch_assoc($result)){ 
                        echo "<tbody>";
                        echo '<tr><td>' . $item['User_Name'] . 
                        "</td><td>" . $item['User_Education'] .
                        "</td><td>" . $item['User_Email'] .
                        "</td>";
                        echo '<td><a href="?page=home2?id=' . $item['User_ID'] . '"><input type = "submit" value = " Portfolio bekijken "/></a></tr>/td>';
                        $_SESSION['portfolio'] = $item['User_ID'];
                        echo "</tbody>";
                    }
                    echo "</table>";

                } else {
                echo "Er zijn nog geen porfolio's aanwezig";
                }
            ?>

        </div>
    </div><!-- /.row -->

</div><!-- /#page-wrapper -->