<?php
 $biodata=array("firstname"=>"mohammad","lastname"=>"ali","surname"=>"hanfi","age"=>19,"gender"=>"male");
 $morebio=array("nationality"=>"india","studyat"=>"maheshwari college","closefriend"=>"anas_qureshi");
 $fullbiodata=array_merge($biodata,$morebio);
 foreach($fullbiodata as $key=>$ans)
 {
 echo $key."<br>";
 }
 foreach($fullbiodata as $key=>$ans)
 {
 echo $ans."<br>";
 }
 //print_r($fullbiodata);
 echo "<br>";
 $arr=array("msi_pro_b660m_a wifi","i5_12400");
 array_push($arr,"corsair_vengence LPX 8gb DDR4 3600mhz");
// echo $arr;
// print_r($arr);
 for($i=0;$i<count($arr);$i++)
 {
 echo $arr[$i]."<br>";
  
 }
 echo array_search("i5_12400",$arr);
 echo "<br>".count($arr);
 ?>
