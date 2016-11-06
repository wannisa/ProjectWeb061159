<meta charset="utf-8">
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">


tinymce.init({
  selector: '#textArea',
  // height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
  image_advtab: true,
  external_filemanager_path:"filemanager/",
  filemanager_title:"Responsive Filemanager" ,
  external_plugins: { "filemanager" : "../../filemanager/plugin.min.js" }
 });

</script>
</head>



<form method="post" action="edit.php">
<?php
$Article_id = $_GET["ID"];
mysql_connect("ap-cdbr-azure-southeast-b.cloudapp.net","b6b0b7800c86fb","3b13daae");
mysql_select_db("pawarisaclinic");
mysql_query("SET NAMES 'utf8'");
$strSQL = "SELECT * FROM article WHERE article_id = $Article_id";
//echo $strSQL;
$objQuery = mysql_query($strSQL);
while($objResult = mysql_fetch_array($objQuery))
{
?>
<div id="loginbox" style="padding-top:20px;" class="col-lg-12" >
  <input type ="hidden" name="id" value="<? echo $Article_id; ?>"> 
<div style="padding-left:30px";>
       	<button type="button" name="button" id="button" class="btn btn-default" style="width:220; height:50;" ><font size="5">หน้าแก้ไขบทความ</font></button>
	   </div>
	<div style="padding-top:20px; padding-left:80px;" class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label"><font size="3">ชื่อเรื่อง</font></label>
      <div class="col-lg-10">
        <input type="title" value="<?php echo $objResult['title']?>" name="title" size="20" class="form-control" style="width:1000;"/><br />
    </div>
     </div>
     <div class="form-group" style="padding-top:20px; padding-left:80px;" >
      <label for="textArea" class="col-lg-2 control-label"><font size="3">เนื้อหา</font></label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="15" id="textArea" name="acticle"><?php echo $objResult['detail']?></textarea>
	</div>
    </div>
    <?php
}
?>
    <div style="padding-left:1175px; padding-top:10px;" class="col-lg-6"> 
       	<button type="submit" name="buttoninsert" id="button" class="btn btn-danger" style="width:150; height:50;" ><font size="5">บันทึก</font></button>
	   </div>

</from>
</html> 
