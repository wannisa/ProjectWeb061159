<?php
$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
$user = "b6b0b7800c86fb";
$pass = "3b13daae";
$db = "pawarisaclinic";

mysql_connect($host,$user,$pass);
mysql_query("SET NAMES UTF8");
mysql_query("USE $db");
?>