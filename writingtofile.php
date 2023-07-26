<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<?php 
 $myfile=fopen("/opt/lampp/temp/myfile.txt","a");
 echo $myfile;
 if(isset($_POST["data"]))
 {
 $filedata=$_POST['data'];
 fwrite($myfile,$filedata);
 $filedata1="and this is to overright the data in the veriable ";
 //fwrite($myfile,$filedata1);
 fclose($myfile);
  }
 ?>
 <form method="post" >
 	<input type="txt" name="data">
 	<button type="submit">submitme</button>
 </form>
</body>
</html>