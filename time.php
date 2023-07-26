<?php
date_default_timezone_set("Asia/Kolkata");
 echo "time is (hours in 12 with 0 prifix)".date("h")."<br>";
 echo "time is (hours in 24 with 0 prefix)".date("H")."<br>";
 echo "time is (hours in 12 with no prefix)".date("g")."<br>";
 echo "time is (hours in 24 with no prefix)".date("G")."<br>";
 echo "time is (minutes )".date("i")."<br>";
 echo "time is (seconds )".date("s")."<br>";
 echo "time is (meredium in lowercase)".date("a")."<br>";
 echo "time is (meredium in uppercase)".date("A")."<br>";
 while(true)
 {
 echo "all together time is ".date("h-i-sA")."<br>";
 }
?>
