            <div id="page-wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <h1>Frits Huig <small>Portfolio</small></h1>
                        <ol class="breadcrumb">
                            <li><a href="index.php"><i class="icon-dashboard"></i> Dashboard</a></li>
                            <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
                        </ol>
                    </div>
                    <div id="content">
                        <div class="info">
                            <div class="pasfoto">
                                <img src="img/Pasfoto.jpg" alt="pasfoto">
                            </div>
                            <div class="gegevens">
                                <h2>Personelijke gegevens</h2>
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
                                                echo "<p>{$Row['Persoonlijke_Gegevens']}</p>";
                                                echo "<p><a href ='indexpersoonlijkegegevens_edit.php?cvID=" . $Row['cvID'] . "'>Edit</a><p>";
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
                                        echo"<div id='form'>";
                                        echo "<form method='POST' action='indexvoorsteltekst_done.php?cvID=" . $cvID . "'>";
                                        while ($Row = mysqli_fetch_assoc($QueryResult))
                                        {

                                            echo "<p>Voorsteltekst:<textarea rows='10' cols='100' name='voorsteltekst'>" . $Row['Voorsteltekst'] . "</textarea></p>";
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
                        <div id="eigenfotos">
                            <div class="fototrots">
                                <img src="img/test1.jpg" alt="test">
                            </div>
                            <div class="fototrots">
                                <img src="img/test2.png" alt="test">
                            </div>
                            <div class="fototrots">
                                <img src="img/test3.png" alt="test">
                            </div>
                            <div class="fototrots">
                                <img src="img/test4.jpg" alt="test">
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->

            </div><!-- /#page-wrapper -->