<?php
  	include ('session.php');
	/* include login sessions for the use of user information */
   
        if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
            if(isset($_POST['guest'])){
                $myusername = 'Guest';
                $mypassword = '-';
                $sql = "SELECT * FROM User WHERE User_Name = '$myusername' and User_Password = '$mypassword'";
                $result = mysqli_query($db,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                $count = mysqli_num_rows($result);

                // If result matched $myusername and $mypassword, table row must be 1 row

                if($count == 1) {
                   $_SESSION['login_user'] = $myusername;

                   header("location: index.php");
                }
            }else{
                $myemail = mysqli_real_escape_string($db,$_POST['email']);
                $mypassword = mysqli_real_escape_string($db,md5 ($_POST['password'])); 

                $sql = "SELECT * FROM User WHERE User_Email = '$myemail' and User_Password ='$mypassword'";
                $result = mysqli_query($db,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                $count = mysqli_num_rows($result);
                if($count == 1) {
                    $_SESSION['login_user'] = $myemail;

                    header("location: index.php");
                }else {
                    $error = "Your Login Name or Password is invalid";
                }  
            }
        }
?>
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
                echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>';
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
                    if($_SESSION['login_user'] != null){
                        echo $_SESSION['login_user'];
                        echo '<ul class="dropdown-menu">
                        <li><a href=""><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>';
                    }else {
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
            <form action = "" method = "post">
                  <label>E-mail  :</label><input type = "text" name = "email" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <label>Guest User :</label><input type = "checkbox" name = "guest" class = "box" /> <br/><br />
                  <input type = "submit" value = " Sign in "/><br />
            </form>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
