            <div id="page-wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <h1>Blank Page <small>A Blank Slate</small></h1>
                        <ol class="breadcrumb">
                            <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
                            <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
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
//        programmeur : Danny Katerbarg
//        datum : 03-01-2017
//        functie edit

                            $cvID = $_GET["cvID"];
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
                                    $SQLstring = "SELECT * FROM $TableName WHERE cvID = $cvID";
                                    $QueryResult = mysqli_query($DBConnect, $SQLstring);
                                    if (mysqli_num_rows($QueryResult) == 0)
                                    {
                                        echo "<p>Failed to load data!</p>";
                                    } else
                                    {
                                        echo"<h2>please vul in om je cv te bewerken.</h2>";
                                        echo"<div id='form'>";
                                        echo "<form method='POST' action='cvtext_done.php?cvID=" . $cvID . "'>";
                                        while ($Row = mysqli_fetch_assoc($QueryResult))
                                        {

                                            echo "<p>CV tekst:<textarea rows='25' cols='100' name='textarea'>" . $Row['Textarea'] . "</textarea></p>";
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
                                            echo "<p><a href ='cvwerkervaring_edit.php?cvID=" . $Row['cvID'] . "'>Edit</a><p>";
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
                                            echo "<p>{$Row['Opleidingen']}</p>";
                                            echo "<p><a href ='cvopleidingen_edit.php?cvID=" . $Row['cvID'] . "'>Edit</a><p>";
                                        }
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