      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Contact opnemen met: <small>Variabele naam ID</small></h1>
			<ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i> Hoofdpagina</a></li>
              <li class="active"><i class="icon-file-alt"></i> Contact</li>
            </ol>
          </div>
        </div><!-- /.row -->
            <?php

                require "PHPMailer/class.phpmailer.php";

                if (isset($_POST["submit"])){

                $contact_name = $_POST["naam"];
                $contact_email = $_POST["email"];
                $contact_text = $_POST["bericht"];

                    if (!empty($contact_name) && !empty($contact_email) && !empty($contact_text)){

                        require 'PHPMailer/PHPMailerAutoload.php';

                        $mail = new PHPMailer;                            

                        $mail->isSMTP();                                    
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;                               
                        $mail->Username = 'kevintestmailschool@gmail.com';            
                        $mail->Password = 'WachtWoord123';                          
                        $mail->SMTPSecure = 'tls';                            
                        $mail->Port = 587;                                    

                        $mail->setFrom('kevintestmailschool@gmail.com', $contact_name);
                        $mail->addAddress($row2['User_Email']);     
                        $mail->addReplyTo($contact_email, $contact_name);   
                        $mail->isHTML(true);                                  

                        $mail->Subject = 'Contact formulier portfolio';
                        $mail->Body    = $contact_text;
                        $mail->AltBody = $contact_text;
                        
                        $mail->SMTPOptions = array(
        
                            'ssl' => array(
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                            )
                        );

                        if(!$mail->send()) {
                            echo '<h2>Sorry, we are unable to send your message. Please try again later<h2>';
                        } 

                        else {
                            echo '<h2>Your message has been send!<h2>';
                            
                        }

                    }

                } 

            ?>
      </div><!-- /#page-wrapper -->