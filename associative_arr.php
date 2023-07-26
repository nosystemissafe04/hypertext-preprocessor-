<html>
 <body>
  <?php
   $myname=array("firstname" => "mohammad","lastname" => "ali","surname"=>"hanfi","laqab"=>"madni,attari");
   print_r($myname);
   //another way of creating associative array is 
   echo "<br>";
   $myname1["fullname"]= "mohammadalihanfimadniattari";
   echo $myname1["fullname"];
    echo "<br>";
    foreach ($myname as $key => $value)
   { 
    echo "my " .$key. " is " . $value . "<br>";
   }
  ?>
 </body>
</html>
