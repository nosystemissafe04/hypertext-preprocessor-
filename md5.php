<?php
 $str="alihanfi";
echo $str."<br>";
echo "md5 hash with binary format =".md5("$str",TRUE)."<br>";
echo "md5 hash with 32bit hexadecimal format=".md5("$str")."<br>";
?>
