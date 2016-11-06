<meta charset="utf-8">
<?php
	error_reporting(0);
	session_start();
	$Article_id=$_GET["ID"];

	mysql_connect("ap-cdbr-azure-southeast-b.cloudapp.net","b6b0b7800c86fb","3b13daae");
	mysql_select_db("pawarisaclinic");
	mysql_query("SET NAMES 'utf8'");
	$strSQL = "SELECT * FROM article WHERE article_id = $Article_id";
	//echo $strSQL;
	$objQuery = mysql_query($strSQL);
	$row = mysql_fetch_array($objQuery);
	echo $row["title"];
	echo $row["detail"];
	?>