<html>
<body>
<?php
if(isset($_GET))
print_r($_GET);
else 
echo "no data is passed please enter it ";
?>
<form>
<input type="text" name="username"></input>
<input type="password" name="password"></input>
<button type="submit">submit me</button>
</form>
</body>
</html>
