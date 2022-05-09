<?php


mysql_connect("localhost","root","");
mysql_select_db("");

$n=$_POST['name'];
$a=$_POST['comon'];


$sql="INSERT INTO  comonbobk VALUES ('$n', '$a')";

$r=mysql_query($sql) ;


?>