<?php
//print_r(__DIR__);
$filename = __DIR__."/../../../public/styles/src/hotel.txt";
$file = fopen($filename,"r");
    $hotel = fread($file, filesize($filename));
fclose($file);
printf($hotel);
?>
