<?php 

$my_bucket = "afterwork-175307.appspot.com"
// $content = $_POST['activity']; 
$content = $_GET['activity']; 
file_put_contents("gs://${my_bucket}/logs.txt", $newFileContent);
echo "posting". $content

?>