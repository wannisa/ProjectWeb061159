<meta charset="utf-8">
<?php
	error_reporting(0);
	session_start();
	$Article_id=$_GET["ID"];

	mysql_connect("ap-cdbr-azure-southeast-b.cloudapp.net","b6b0b7800c86fb","3b13daae");
	mysql_select_db("pawarisaclinic");
	$strSQL = "DELETE FROM article WHERE article_id = $Article_id";
	$objQuery = mysql_query($strSQL);
	?>
				<script> 
				window.location = "showdata.php";
				alert("ลบข้อมูลสำเร็จ");
				</script>
				<?php	
	
	?>