<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <?php 
  session_start();
  $_SESSION["name"]="faizan khan";
  $_SESSION["age"]=36;
  print_r($_SESSION["name"]);
  // echo session_save_path();
  // session_save_path([/session/session.savepath1]);
   // session_destroy();
  // session_unset();
   ?>
 <!-- there are two methods to distroy the session on the server 
 1st session_distroy
 2nd session unset 
 session distroy will distroy the session or parmanently delete the session from the  server 
 session unset will only delete the content of the session the file will be present in the server  -->
</body>
</html>