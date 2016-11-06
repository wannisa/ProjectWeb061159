<meta charset="utf-8">
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

<form method="post" action="insertdata.php">

<div id="loginbox" style="padding-top:20px;" class="col-lg-12" >
<div style="padding-left:30px";>
       	
        <button type="button" name="button" id="button" class="btn btn-default" style="width:200; height:50;" ><font size="5">หน้าเพิ่มบทความ</font></button> 
         <div style="padding-left:410px";>
         <button onclick="window.location.href='insert.php'" type="button" name="button" id="button" style="width:250; height:40;" class="btn btn-danger">
        <font size="3">เพิ่มบทความ</font></button>
             <button onclick="window.location.href='showdata.php'" type="button" name="button" id="button" style="width:250; height:40;" class="btn btn-danger">
        <font size="3">บทความ</font></button>
        <button onclick="window.open('https://calendar.google.com/calendar/render#main_7')" type="button" name="button" id="button" style="width:250; height:40;" class="btn btn-danger">
       <font size="3">ตารางนัดหมอ</font></button>
	   </div>
	<div style="padding-top:20px; padding-left:80px;" class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label"><font size="3">ชื่อเรื่อง</font></label>
      <div class="col-lg-10">
        <input type="title" name="title" size="20" class="form-control" style="width:975;"/><br />
    </div>
     </div>
     <div class="form-group" style="padding-top:20px; padding-left:80px;" >
      <label for="textArea" class="col-lg-2 control-label"><font size="3">เนื้อหา</font></label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="15" id="textArea" name="acticle"></textarea>
	</div>
    </div>
    <div style="padding-left:1125px; padding-top:10px;" class="col-lg-12"> 
       	<button type="submit" name="buttoninsert" id="button" class="btn btn-danger" style="width:150; height:50;" ><font size="5">เพิ่ม</font></button>
	   </div>



</from>