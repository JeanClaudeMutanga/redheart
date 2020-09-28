<?php
$database="afrigycn_redheart"; 
$con = mysqli_connect("localhost","afrigycn_jean" ,"afrigot3lt3ch_admin",$database);
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
	 echo mysql_error();
?>