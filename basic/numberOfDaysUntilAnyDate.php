<?php 
$d1 = strtotime("December 05");
$d2 = ceil(($d1-time())/60/60/24);
echo $d2." Days Remaining to 5 December";

?>