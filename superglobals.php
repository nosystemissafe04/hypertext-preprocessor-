<?php
 $c;
 $a=100;
 $b=200;
 function add()
 {
 $GLOBALS['z']= $GLOBALS['a']+$GLOBALS['b'];
 }
// print_r($GLOBALS);
 add();
 print_r($GLOBALS);
 echo "<br>";
 function sub()
 {
 echo "my name is ali hanfi ";
   $GLOABALS['c']=30000;
 }
sub();
//$c;
echo $GLOBALS['c'];
print_r($GLOBALS);
//echo add();
?>
