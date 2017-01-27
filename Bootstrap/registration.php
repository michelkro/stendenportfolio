<?php
include('session.php');
//set validation error flag as false
$error2 = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $name2 = mysqli_real_escape_string($db, $_POST['name']);
    $email2 = mysqli_real_escape_string($db, $_POST['email']);
    $password2 = mysqli_real_escape_string($db, $_POST['password']);
    $cpassword2 = mysqli_real_escape_string($db, $_POST['cpassword']);
    
    switch ($_POST['usertype']){
        case 1: 
            $usertype = 5;
            break;
        case 2:
            $usertype = 6;
            break;
        case 3:
            $usertype = 4;
            break;
        case 4:
            $usertype = 2;
            break;
        default:
            $usertype = null;
            break;
    }
    
	if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/png"))){
		if ($_FILES["file"]["error"] > 0){
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		} else{
			//echo "Upload: " . $_FILES["file"]["name"] . "<br />";
			//echo '<br>'. $_FILES["file"]["type"] . "<br />";
			$array = explode("/", $_FILES["file"]["type"]);
			$extension = $array[1];
			//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
							
							
			move_uploaded_file($_FILES["file"]["tmp_name"], "img/profielfoto/".$_POST['email'].".".$extension);
			//echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
			if(!file_exists("img/profielfoto/".$_POST['email'].".".$extension)){
			mkdir("img/profielfoto/".$_POST['email'].".".$extension);				
			}
		}
	}
	
	
	
    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$name2)) {
        $error2 = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email2,FILTER_VALIDATE_EMAIL)) {
        $error2 = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password2) < 6) {
        $error2 = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($password2 != $cpassword2) {
        $error2 = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if($usertype == null){
        $error2 = true;
        $type_error = "Please select an usertype";
    }
    if ($error2 == false) {
        if(mysqli_query($db, "INSERT INTO user(User_Name,User_Email,User_Password,User_Type_ID,User_Photo) VALUES('" . $name2 . "', '" . $email2 . "', '" . md5($password2). "', '" . $usertype . "', 'img/profielfoto/".$_POST['email'].".".$extension."' )")) {
            $successmsg = "Successfully Registered!";
            $id = mysqli_query($db, "SELECT `User_ID` FROM USER WHERE `User_Email` = '" . $email2 . "' ");
            $row = mysqli_fetch_array($id,MYSQLI_ASSOC);
            
            $design = mysqli_query($db, "INSERT INTO design(User_ID) VALUES('" . $row['User_ID'] . "')" );
        } else {
            $errormsg = "Error in registering...Please try again later!";
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

    <title>User Registration</title>

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
                if(isset($_SESSION['login_user'])){
                    switch ($row['User_Type_ID']){
                        case 1:
                            echo '<li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
                                <li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li class="active"><a href="registration.php"><i class="fa fa-list-alt"></i> Registratie </a></li>';
                            break;
                        case 2:
                            echo '<li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
                                <li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li class="active"><a href="registration.php"><i class="fa fa-list-alt"></i> Registratie </a></li>';
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
                            echo '<li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li class="active"><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
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
                }
                else{
                    echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>';
                }
            ?>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
              <li class ='dropdown-header'>
                    <form  method="post" action="search_submit.php?go"  id="searchform" style="padding-top:4%;"> 
                    <input  type="text" name="name"> 
                    <input  type="submit" name="submit" value="Search"> 
                    </form> 
              </li>
            <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <?php
                    if($_SESSION['login_user'] != null){
                        echo $row['User_Name'];
                        echo '<ul class="dropdown-menu">
                        <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>';
                    }else {
                        echo '<li><a href="login.php"><i class="fa fa-power-off"></i> Log In</a></li>';
                    }
                    ?> 
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
            <div class="frontendhome">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform"  enctype="multipart/form-data">
                <fieldset>
                    <legend>Account aanmaken</legend>

                        <label for="name">Name :</label>
                        <input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error2) echo $name2; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>

                        <label for="name">Email :</label>
                        <input type="text" name="email" placeholder="Email" required value="<?php if($error2) echo $email2; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>

                        <label for="name">Password :</label>
                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>

                        <label for="name">Confirm Password :</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                        
                        <label for="name">User Type :</label>
                        <label for="name">SLB
                        <input type="radio" name="usertype" value="1" required class="form-control" />
                        </label>
                        <label for="name">Teacher
                        <input type="radio" name="usertype" value="2" required class="form-control" />
                        </label>
                        <label for="name">Student
                        <input type="radio" name="usertype" value="3" required class="form-control" />
                        </label>
                        <label for="name">Admin
                        <input type="radio" name="usertype" value="4" required class="form-control" />
                        </label>
                        <span class="text-danger"><?php if (isset($type_error)) echo $type_error; ?></span>
						<label for="name">Project picture
						<input type="file" name="file">
						</label>
						
                
                </fieldset>
                <input type="submit" name="signup" value="Account aanmaken" class="btn btn-primary" />
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
            </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
