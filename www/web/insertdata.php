<meta charset="utf-8">
<?php
	error_reporting(0);
	session_start();
	$Title=$_POST["title"];
	$Acticle=$_POST["acticle"];

	if($Title==""||$Acticle==""){
		?>
				<script> 
				window.location = "insert.php";
				alert("กรุณากรอกข้อมูลใหม่");
				</script>

				<?php
		}
		else{
	mysql_connect("ap-cdbr-azure-southeast-b.cloudapp.net","b6b0b7800c86fb","3b13daae");
	mysql_select_db("pawarisaclinic");
	mysql_query("SET NAMES 'utf8'");//กำหนดใ้ข้อมูลที่เพิ่มลงฐานข้อมูลเป็นภาษาไทย
	$Datetime = date("Y-m-d H:i:s");
	$strSQL = "INSERT INTO article (title, date_time_article, detail) values ('$Title', '$Datetime', '$Acticle')";
	$objQuery = mysql_query($strSQL);

			?>
				<script> 
				window.location = "Data.php";
				alert("บันทึกข้อมูลสำเร็จ");
				</script>

				<?php
			}
?>