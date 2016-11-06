<meta charset="utf-8">
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<div id="loginbox" style="padding-top:20px;">
<div style="padding-left:30px";>
       	<button type="button" name="button" id="button" class="btn btn-default" style="width:150; height:50;" ><font size="5">บทความ</font></button>
        <div style="padding-left:320px";>
         <button onclick="window.location.href='insert.php'" type="button" name="button" id="button" style="width:250; height:40;" class="btn btn-danger">
        <font size="3">เพิ่มบทความ</font></button>
             <button onclick="window.location.href='showdata.php'" type="button" name="button" id="button" style="width:250; height:40;" class="btn btn-danger">
        <font size="3">บทความ</font></button>
        <button onclick="window.open('https://calendar.google.com/calendar/render#main_7')" type="button" name="button" id="button" style="width:250; height:40;" class="btn btn-danger">
       <font size="3">ตารางนัดหมอ</font></button>
</div>
<?php
	mysql_connect("ap-cdbr-azure-southeast-b.cloudapp.net","b6b0b7800c86fb","3b13daae");
	mysql_select_db("pawarisaclinic");
	mysql_query("SET NAMES 'utf8'");
	$strSQL = "SELECT * FROM article";
	$objQuery = mysql_query($strSQL);
?>
<div style="padding:50px;">
<table class="table table-striped table-hover " ><br>
    <tr>
      <th>ชื่อเรื่อง</th>
      <th>ลบบทความ</th>
      <th>แก้ไขบทความ</th>
      <th>ดูบทความ</th>
    </tr>
    <?php
    while($row = mysql_fetch_array($objQuery)){
    	echo '<tr>';
		echo '<td>'.$row["title"].'</td>';
		echo '<td><a href = "delete.php?ID='.$row["article_id"].'"/>ลบบทความ</a>';
		echo '<td><a href = "showdataedit.php?ID='.$row["article_id"].'"/>แก้ไขบทความ</a></td>';
    echo '<td><a href = "view.php?ID='.$row["article_id"].'"/>ดูบทความ</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>

<div style="padding-left:1100px; padding-top:100px;" >
       	<button onclick="window.location.href='Data.php'"  type="button" name="OKdelete" id="button" class="btn btn-danger" style="width:150; height:50;" ><font size="5">ตกลง</font></button>
	   </div>
