<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php 
  $path="/opt/lampp/temp/myfile.txt";
  $readFile=file_get_contents($path);
  echo $readFile;
  $singleChar=explode(" ",$readFile);
   // print_r($singleChar);
   for($i=0;$i<=sizeof($singleChar);$i++)
   {
   	echo $singleChar[$i];
   	echo "<br>";
   }
  ?>
</body>
</html>