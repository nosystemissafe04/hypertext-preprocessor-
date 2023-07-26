<html>
  <body>
   <?php
   $myname=array("mohammad","ali","hanfi");
   $myintrest=array("football","programming","cyber_security");
   var_dump($myname);
   echo "<br>";
   print_r($myname);
   echo "<br><br>";
   $newarray=array_merge($myname,$myintrest);
   print_r($newarray);
   ?>
  </body>
</html>
