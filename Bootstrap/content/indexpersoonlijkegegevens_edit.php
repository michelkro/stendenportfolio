<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Stenden Portfolio</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    </head>
    <?php
    include ('session.php');
    /* include login sessions for the use of user information */
    ?>
    <body>

        <div id="wrapper">

            <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <!-- Zoekbalk voor user names -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"> Stenden Portfolio </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <?php
                        if (isset($_SESSION['login_user']))
                        {
                            switch ($row['User_Type_ID'])
                            {
                                case 1:
                                    echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
                                <li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="registration.php"><i class="fa fa-list-alt"></i> Registratie </a></li>';
                                    break;
                                case 2:
                                    echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
                                <li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="registration.php"><i class="fa fa-list-alt"></i> Registratie </a></li>';
                                    break;
                                case 5:
                                    echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
                                <li><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>';
                                    break;
                                case 4:
                                    echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>';
                                    break;
                                case 6:
                                    echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>';
                                    break;
                                case 7:
                                    echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>';
                                    break;
                            }
                        } else
                        {
                            echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>';
                        }
                        ?>
                    </ul>

                    <ul class="nav navbar-nav navbar-right navbar-user">
                        <li class ='dropdown-header'>
                            <form  method="post" action="search_submit.php?go"  id="searchform"> 
                                <input  type="text" name="name"> 
                                <input  type="submit" name="submit" value="Search"> 
                            </form> 
                        </li>
                        <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                <?php
                                if ($_SESSION['login_user'] != null)
                                {
                                    echo $row['User_Name'];
                                    echo '<ul class="dropdown-menu">
                        <li><a href=""><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>';
                                } else
                                {
                                    echo '<li><a href="login.php"><i class="fa fa-power-off"></i> Log In</a></li>';
                                }
                                ?> 
                                <b class="caret"></b></a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>

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
                                        echo "<form method='POST' action='indexpersoonlijkegegevens_done.php?cvID=" . $cvID . "'>";
                                        while ($Row = mysqli_fetch_assoc($QueryResult))
                                        {

                                            echo "<p>Voorsteltekst:<textarea rows='10' cols='100' name='persoonlijkegegevens'>" . $Row['Persoonlijke_Gegevens'] . "</textarea></p>";
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
                        <div class="overjouzelf">
                            <h1>Welkom op mijn portfolio</h1>
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
                                            echo "<p>{$Row['Voorsteltekst']}</p>";
                                            echo "<p><a href ='indexvoorsteltekst_edit.php?cvID=" . $Row['cvID'] . "'>Edit</a><p>";
                                        }
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

        </div><!-- /#wrapper -->

        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>

    </body>
</html>
