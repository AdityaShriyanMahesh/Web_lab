<?php

$a = file_get_contents("counter.txt");
file_put_contents("counter.txt",$a+1);
echo "<h1> Count Page</h1>";
echo "<p>Total Number of vistiors: $a</p>";
echo "<p>The Time is: ";
echo date("h:i:s P");


?>