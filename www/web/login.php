<meta charset="utf-8">
<?php
	error_reporting(0);
	session_start();
	$Email=$_POST["email"];
	$Password=$_POST["password"];
	mysql_connect("ap-cdbr-azure-southeast-b.cloudapp.net","b6b0b7800c86fb","3b13daae");
	mysql_select_db("pawarisaclinic");
	$strSQL = "SELECT * FROM admin WHERE email = '".mysql_real_escape_string($_POST['email'])."' 
	and password = '".mysql_real_escape_string($_POST['password'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);


	if($objResult)
	{
			$_SESSION["email"] = $objResult["email"];
			$_SESSION["password"] = $objResult["password"];

			session_write_close();
			
			if($objResult["email"] == $Email && $objResult["password"] == $Password)
			{
				?>
				<script> 
				window.location = "Data.php";
				</script>

				<?php
			}
			
	}
	else
			{
				?>
				<script> 
				window.location = "index.php";
				alert("กรุณาตรวจสอบข้อมูลใหม่");	
				</script>

				<?php
			}

	mysql_close();
?>