<?php
    $myFile = "logs.txt";
    $fh = fopen($myFile, 'r');
    $theData = fread($fh, 1);
    fclose($fh);
    echo $theData;
    ?>   


    