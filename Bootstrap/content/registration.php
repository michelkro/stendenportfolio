<?php
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

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1>Account Toevoegen</h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="icon-dashboard"></i> Hoofdpagina</a></li>
            </ol>
        </div>
        <div class="frontendhome">
        <form role="form" action="?page=registration" method="post" name="signupform" enctype="multipart/form-data">
            <fieldset>
                <legend></legend>
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
                    <label for="name">Project picture
                    <input type="file" name="file">
                    </label>
                    <span class="text-danger"><?php if (isset($type_error)) echo $type_error; ?></span>
            </fieldset>
            <input type="submit" name="signup" value="Account aanmaken" class="btn btn-primary" />
        </form>
        <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
        <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div><!-- /.row -->
</div><!-- /#page-wrapper -->