<?php
$mysql_hostname = "localhost";
/*$mysql_user = "leopwatc"; */
$mysql_user = "root"; 
/*$mysql_password = 'BRsd6*v0E@J61k'; */
$mysql_password = "";
$mysql_database = "kelly";

$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database)or die("Oops some thing went wrong");

?>