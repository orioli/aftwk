<?php 

// $content = $_POST['activity']; 
$content = $_GET['activity']; 
$file = "logs.txt"; 
$Saved_File = fopen($file, 'w'); 
fwrite($Saved_File, $content); 
fclose($Saved_File);
echo "posting". $content

?>