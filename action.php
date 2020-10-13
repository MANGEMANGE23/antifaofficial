<?php
 $path = 'terrorists.txt';
 if (isset($_POST['name']) && isset($_POST['code'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['field1'].' - '.$_POST['field2'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>
