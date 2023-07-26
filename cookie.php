<!DOCTYPE html>
<html>
<head>
	<title>
		cookie
	</title>
</head>
<body>
  <?php 
    //cookie are small files which are stored on the client computer for verifying who they are or some more other information 
   //to set the cookie setcookie() function is used it must be at the top of the php program 
   //the setcookie function accepts 6 arguments 
   //name
   //value 
   //expiration 
   //path
   //domain
   //security
   //top 3 will be must and others are optional
   $cookie_name="name";
   $cookie_value="mohammadalihanfi";
   setcookie($cookie_name,$cookie_value,time()+60*60);
   print_r($_COOKIE); 
   echo "<br>";
   if(!isset($_COOKIE["name"]))
   {
   	echo "cookie name ".$_COOKIE["name"]."is not set please set it ";
   }
   else    	
   	echo "cookie name ".$_COOKIE["name"]." is set ";
    echo "<br>";
    echo session_name();
    echo session.cookie_path();
    ?>
</body>
</html>