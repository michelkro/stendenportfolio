
        <?php
        
        //lijst met bestanden in een folder
        // van vele bestanden een zip maken
        $dir = "uploadbestand/";
        $files = scandir($dir);rsort($files);
        $zipname = 'PROJECT_ONE.zip';
        $zip = new ZipArchive;
        $zip->open($zipname, ZipArchive::CREATE);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                    echo  $file."<br>";             
                $zip->addFile($dir.$file);
            }
        }
        $zip->close();
        
        
        //$files2 = array('uploadbestand/slburen.docx', 'uploadbestand/Reflectieverslag periode 1.docx');

        // download een bestand
        if(isset($_POST["download"])){
            $filename = "PROJECT_ONE.zip";

            if(file_exists($filename)){

                //Get file type and set it as Content Type
                $finfo = finfo_open(FILEINFO_MIME_TYPE);
                header('Content-Type: ' . finfo_file($finfo, $filename));
                finfo_close($finfo);

                //Use Content-Disposition: attachment to specify the filename
                header('Content-Disposition: attachment; filename='.basename($filename));

                //No cache
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');

                //Define file size
                header('Content-Length: ' . filesize($filename));

                ob_clean();
                flush();
                readfile($filename);
                exit;
            }
        }
        ?>
        
        <form action="#" method="POST">
            <input type="submit" name="download" value="download project">    
        </form>


