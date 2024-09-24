<?php
$file = "file.txt";
if (file_exists($file)) {
echo readfile($file);
copy ($file,"newfile.txt");
} else {
    echo "file does not exist";
}
?>