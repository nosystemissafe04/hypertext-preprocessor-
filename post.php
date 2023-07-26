<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php 
  if (isset($_POST))
  {
   echo $_POST["name"]."  will be registered to over website "."<br>"."and the age of the following person is ".$_POST["myage"];
  }
  // else 
  // {
  // 	echo "this is not working at all ";
  // }
  ?>
  <form action="post.php" method="post">
  <input type="text" name="name">
  <input type="text" name="myage">
   <button type="submit">
   submit me 
   </button>
  </form>

</body>
</html>
 