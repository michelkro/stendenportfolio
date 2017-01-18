<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Blank Page - SB Admin</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">SB Admin</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                        <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                        <li class="active"><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                        <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                        <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
                        <li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
                        <li><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
                        <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right navbar-user">
                        <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>

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
                                            echo "<p><a href ='cvtext_edit.php?cvID=" . $Row['cvID'] . "'>Edit</a><p>";
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
                                        echo"<h2>Vul in om je cv te bewerken.</h2>";
                                        echo"<div id='form'>";
                                        echo "<form method='POST' action='cvopleidingen_done.php?cvID=" . $cvID . "'>";
                                        while ($Row = mysqli_fetch_assoc($QueryResult))
                                        {

                                            echo "<p>Opleidingen:<textarea rows='10' cols='100' name='opleidingen'>" . $Row['Opleidingen'] . "</textarea></p>";
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

        </div><!-- /#wrapper -->

        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>

    </body>
</html>