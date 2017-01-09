<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
<?php
    //#### Saving the uploaded file (with restrictions) ####
    //The user may only upload .gif or .jpeg files and the file size must be under 20 kb:
    if(isset($_POST["submit"])){
        if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg"))){
            // The same as in index.php
            if ($_FILES["file"]["error"] > 0)
            {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            } else
            {
               /* echo "Upload: " . $_FILES["file"]["name"] . "<br />";
                echo "Type: " . $_FILES["file"]["type"] . "<br />";
                echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
                echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";*/

                // Checks if the file already exists, if it does not, it copies the file to the specified folder.
                if (file_exists("upload/" . $_FILES["file"]["name"]))
                {
                    echo $_FILES["file"]["name"] . " already exists. ";
                } else
                {
                    move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                    //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
                    echo "De afbeelding is opgeslagen.";
                }
            }
        }
        else{
            echo "Alleen afbeeldingen kunnen geupload worden.";
        }
    }
?> 
        <form action="#" method="post" enctype="multipart/form-data">
            <label for="file">Filename:</label><input type="file" name="file" id="file" />
            <br />
            <input type="submit" name="submit" value="Submit" />
        </form>
    </body>
</html>
