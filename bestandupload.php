<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
<?php
    //#### Saving the uploaded file (with restrictions) ####

    if(isset($_POST["submit"])){
        if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "text/css") || ($_FILES["file"]["type"] == "text/html") || ($_FILES["file"]["type"] == "audio/mpeg3")
            || ($_FILES["file"]["type"] == "application/pdf")  || ($_FILES["file"]["type"] == "application/mspowerpoint")  || ($_FILES["file"]["type"] == "application/vnd.ms-powerpoint")  || ($_FILES["file"]["type"] == "text/plain")  || ($_FILES["file"]["type"] == "application/excel")
            || ($_FILES["file"]["type"] == "application/zip")  || ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")  || ($_FILES["file"]["type"] == "text/php")    )){
           
            // The same as in index.php
            if ($_FILES["file"]["error"] > 0)
            {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            } else
            {
                /*echo "Upload: " . $_FILES["file"]["name"] . "<br />";
                echo "Type: " . $_FILES["file"]["type"] . "<br />";
                echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
                echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";*/

                // Checks if the file already exists, if it does not, it copies the file to the specified folder.
                if (file_exists("uploadbestand/" . $_FILES["file"]["name"]))
                {
                    echo $_FILES["file"]["name"] . " already exists. ";
                } else
                {
                    move_uploaded_file($_FILES["file"]["tmp_name"], "uploadbestand/" . $_FILES["file"]["name"]);
                    echo "Stored in: " . "uploadbestand/" . $_FILES["file"]["name"];
                }
            }
        }
        else{
            echo 'Dit bestandstype wordt niet geaccepteerd.';
        }
    }
?> 
        <form action="#" method="post" enctype="multipart/form-data">
            <p>Filename:<input type="file" name="file"></p>
            <input type="submit" name="submit" value="Submit" />
        </form>
    </body>
</html>
