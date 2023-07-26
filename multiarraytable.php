<?php
 $roles=[
   [1,"cyber_analyst","blueteam"],
   [2,"SOC_analyst","blueteam"],
   [3,"bug_bounty","redteam"],
   [4,"penetration_testing","redteam"]
 ];
 echo "<table border='1px' cellspacing='5px cellpadding='50px'>";
 foreach ($roles as list($id,$role,$type)) {
     
    echo "<tr><td>$id</td> <td>$role</td> <td>$type</td></tr>";
  
 }
 echo "<table>";
?>
