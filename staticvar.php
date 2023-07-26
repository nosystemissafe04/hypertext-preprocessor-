<?php
 function countCalls() {
    static $count = 0;
    $count++;
    echo "Function has been called $count times.<br>";
}

countCalls(); // Output: Function has been called 1 times.
countCalls(); // Output: Function has been called 2 times.
countCalls(); // Output: Function has been called 3 times.
?>
