<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
              <?php 
                echo "<h1>" . $row['User_Name'] . "'s<small> Portfolio</small></h1>";
                $imgpath = $row['User_Photo'];
              ?>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i> Hoofdpagina</a></li>
            </ol>
    </div>
      <div id="content">
            <div class="info">
                <div class="pasfoto">
                    <img src="<?php $imgpath ?>" alt="pasfoto">
                </div>
                <div class="gegevens">
                    <h2>Persoonlijke gegevens</h2>
                    <?php
                    $DBConnect = mysqli_connect("localhost", "root", "");
                    if ($DBConnect === FALSE) {
                        echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
                    } else {
                        $DBName = "project_portfolio";
                        if (!mysqli_select_db($DBConnect, $DBName)) {
                            echo "<p>Er is nog niks geplaatst</p>";
                        } else {
                            $TableName = "Text_CV";
                            $SQLstring = "SELECT * FROM $TableName WHERE User_ID=" . $row['User_ID'];
                            $QueryResult = mysqli_query($DBConnect, $SQLstring);
                            if (mysqli_num_rows($QueryResult) == 0) {
                                echo "<p>Er is nog geen persoonlijke tekst geplaatst</p>";
                            } else {
 
                                while ($Row = mysqli_fetch_assoc($QueryResult)) {
                                    echo "<p>{$Row['Persoonlijke_Gegevens']}</p>";
                                }
                            }
                            mysqli_free_result($QueryResult);
                        }
                        mysqli_close($DBConnect);
                    }
                    ?> 
                </div>
            </div>
            <div class="overjouzelf">
                <h1>Welkom op mijn portfolio</h1>
                    <?php
                    $DBConnect = mysqli_connect("localhost", "root", "");
                    if ($DBConnect === FALSE) {
                        echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
                    } else {
                        $DBName = "project_portfolio";
                        if (!mysqli_select_db($DBConnect, $DBName)) {
                            echo "<p>Failed to load data!</p>";
                        } else {
                            $TableName = "Text_CV";
                            $SQLstring = "SELECT * FROM $TableName WHERE User_ID=" . $row['User_ID'];
                            $QueryResult = mysqli_query($DBConnect, $SQLstring);
                            if (mysqli_num_rows($QueryResult) == 0) {
                                echo "<p>Failed to load data!</p>";
                            } else {
                                echo"<h2>Vul in om je voorsteltekst te bewerken.</h2>";
                                echo"<div id='form'>";
                                echo "<form method='POST' action='?page=indexvoorsteltekst_done&ID=" . $row['User_ID'] . "'>";
                                while ($item2 = mysqli_fetch_assoc($QueryResult)) {
 
                                    echo "<p>Voorsteltekst:<textarea rows='10' cols='100' name='voorsteltekst'>" . $item2['Voorsteltekst'] . "</textarea></p>";
                                    echo "<p><input type='submit' value='Enter'> <input type='reset' value='Reset'></p>";
                                }
                                echo "</form>";
                                echo "</div>";
                            }
                            mysqli_free_result($QueryResult);
                        }
                        mysqli_close($DBConnect);
                    }
                    ?>
 
            </div>
        </div>
    </div><!-- /.row -->
 
</div><!-- /#page-wrapper -->