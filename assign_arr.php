<html>
	<body>
	 <?php
       $countries=array("india"=>"dehli","china"=>"beijing","afganistan"=>"kabul","australia"=>"canberra","netherlands"=>"amsterdam","pakistan"=>"islamabad");
       foreach($countries as $key => $value)
       {
       echo "the capital of ".$key." is ".$value."<br>";
       }
	 ?>
	</body>
</html>
