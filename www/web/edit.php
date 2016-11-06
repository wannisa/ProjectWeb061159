<meta charset="utf-8">
<?php
	error_reporting(0);
	session_start();
	$Article_id = $_POST["id"];
	$Title=$_POST["title"];
	$Acticle=$_POST["acticle"];

	mysql_connect("ap-cdbr-azure-southeast-b.cloudapp.net","b6b0b7800c86fb","3b13daae");
	mysql_select_db("pawarisaclinic");
	mysql_query("SET NAMES 'utf8'");//กำหนดใ้ข้อมูลที่เพิ่มลงฐานข้อมูลเป็นภาษาไทย
	$strSQL = "UPDATE article set title='$Title', detail='$Acticle' WHERE article_id = $Article_id";
	$objQuery = mysql_query($strSQL);

			?>
				<script> 
				window.location = "Data.php";
				alert("แก้ไขข้อมูลสำเร็จ");
				</script>

				<?php
		
?>