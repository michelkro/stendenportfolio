<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        
    </head>
    <body>
        <?php
$dir = 'upload/';
$files = scandir($dir);
rsort($files);
foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
        echo '<img src="' . $dir . $file . '"/>';
    }
}
        ?>
    </body>
</html>