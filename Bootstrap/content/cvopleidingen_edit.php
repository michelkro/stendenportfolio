            <div id="page-wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <h1>CV, Werkervaring en Studie </h1>
                        <ol class="breadcrumb">
                            <li><a href="index.php"><i class="icon-dashboard"></i> Hoofdpagina</a></li>
                            <?php
                              echo '<li><a href="?page=cv"><i class="icon-dashboard"></i>'  . "CV</a></li>";
                            ?>
                        </ol>
                    </div>
                    <div class="frontendcv">
                        <div class="infocv">
                            <div class="pasfotocv">
                                <img src="img/Pasfoto.jpg" alt="pasfoto">
                            </div>
                        </div>
                        <div class="cv">
                            <h2>CV</h2>
                            <?php
                            $DBConnect = mysqli_connect("localhost", "root", "");
                            if ($DBConnect === FALSE)
                            {
                                echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
                            } else
                            {
                                $DBName = "project_portfolio";
                                if (!mysqli_select_db($DBConnect, $DBName))
                                {
                                    echo "<p>Er is geen cv tekst</p>";
                                } else
                                {
                                    $TableName = "Text_CV";
                                    $SQLstring = "SELECT * FROM $TableName";
                                    $QueryResult = mysqli_query($DBConnect, $SQLstring);
                                    if (mysqli_num_rows($QueryResult) == 0)
                                    {
                                        echo "<p>There are no textfields!</p>";
                                    } else
                                    {

                                        while ($Row = mysqli_fetch_assoc($QueryResult))
                                        {
                                            echo "<p>{$Row['Textarea']}</p>";
                                        }
                                    }
                                    mysqli_free_result($QueryResult);
                                }
                                mysqli_close($DBConnect);
                            }

                           
                            ?> 
                        </div>
                        <div class="we">
                            <h2>Werkervaring</h2>
                              <?php
                            $DBConnect = mysqli_connect("localhost", "root", "");
                            if ($DBConnect === FALSE)
                            {
                                echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
                            } else
                            {
                                $DBName = "project_portfolio";
                                if (!mysqli_select_db($DBConnect, $DBName))
                                {
                                    echo "<p>Er is geen cv tekst</p>";
                                } else
                                {
                                    $TableName = "Text_CV";
                                    $SQLstring = "SELECT * FROM $TableName";
                                    $QueryResult = mysqli_query($DBConnect, $SQLstring);
                                    if (mysqli_num_rows($QueryResult) == 0)
                                    {
                                        echo "<p>There are no textfields!</p>";
                                    } else
                                    {

                                        while ($Row = mysqli_fetch_assoc($QueryResult))
                                        {
                                            echo "<p>{$Row['Werkervaring']}</p>";
                                        }
                                    }
                                    mysqli_free_result($QueryResult);
                                }
                                mysqli_close($DBConnect);
                            }

                           
                            ?> 
                            <h2>Studie</h2>
                            <?php
                            $DBConnect = mysqli_connect("localhost", "root", "");
                            if ($DBConnect === FALSE)
                            {
                                echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
                            } else
                            {
                                $DBName = "project_portfolio";
                                if (!mysqli_select_db($DBConnect, $DBName))
                                {
                                    echo "<p>Failed to load data!</p>";
                                } else
                                {
                                    $TableName = "Text_CV";
                                    $SQLstring = "SELECT * FROM $TableName WHERE User_ID=" . $row['User_ID'];
                                    $QueryResult = mysqli_query($DBConnect, $SQLstring);
                                    if (mysqli_num_rows($QueryResult) == 0)
                                    {
                                        echo "<p>Failed to load data!</p>";
                                    } else
                                    {
                                        echo"<h2>Vul in om je cv te bewerken.</h2>";
                                        echo"<div id='form'>";
                                        echo "<form method='POST' action='?page=cvopleidingen_done&ID=" . $row['User_ID'] . "'>";
                                        while ($item2 = mysqli_fetch_assoc($QueryResult))
                                        {

                                            echo "<p>Opleidingen:<textarea rows='10' cols='100' name='opleidingen'>" . $item2['Opleidingen'] . "</textarea></p>";
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