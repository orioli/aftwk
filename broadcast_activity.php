<?php $content = $_POST['activity']; $file = "logs.txt"; $Saved_File = fopen($file, 'w'); fwrite($Saved_File, $content); fclose($Saved_File); ?>