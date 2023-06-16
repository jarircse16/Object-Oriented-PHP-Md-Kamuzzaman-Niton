<?php

class FileOperation
{
    const MAX_LEN = 1024; // Maximum allowed file size
    
    public function readFile($filename)
    {
        $file_size = filesize($filename);
        
        if ($file_size <= self::MAX_LEN) {
            echo 'Size is okay<br>';
            $contents = file_get_contents($filename);
            echo 'File Contents:<br>';
            echo $contents;
        } else {
            echo 'Size exceeded';
        }
    }
    
    public function writeFile($filename)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $contents = $_POST['file_contents'];
            
            if (strlen($contents) <= self::MAX_LEN) {
                file_put_contents($filename, $contents);
                echo 'File written successfully<br>';
            } else {
                echo 'Size exceeded';
            }
        } else {
            echo '<form method="POST">';
            echo '<textarea name="file_contents" rows="10" cols="50"></textarea><br>';
            echo '<input type="submit" value="Write to File">';
            echo '</form>';
        }
    }
}

$filename = 'example.txt'; //write to this file

$fileOp = new FileOperation();
$fileOp->readFile($filename);
$fileOp->writeFile($filename);

?>
