<div id="page-wrapper">
    <?php   
        if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
            if(isset($_POST['guest'])){
                $sql = "SELECT * FROM User WHERE User_Name = 'Guest'";
                $result = mysqli_query($db,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                $count = mysqli_num_rows($result);

                if($count == 1) {
                   $_SESSION['login_user'] = 'guest@email.com';

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
                    echo "Uw e-mail of wachtwoord is verkeerd ingevoerd";
                }  
            }
        }
    ?>

    <div class="row">
        <form action = "" method = "post">
            <label>E-mail  :</label><input type = "text" name = "email" class = "box"/><br /><br />
            <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
            <label>Guest User :</label><input type = "checkbox" name = "guest" class = "box" /> <br/><br />
            <input type = "submit" value = " Sign in "/><br />
        </form>
    </div><!-- /.row -->

</div><!-- /#page-wrapper -->