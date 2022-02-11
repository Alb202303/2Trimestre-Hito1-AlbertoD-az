<?php

$numero=$_POST["numero"];

echo "<h3>La conversión a número decimal es: ".bindec($numero)." .</h3>";

echo "<h3>La conversión a número hexadecimal es: ".dechex(bindec($numero))." .</h3>";


?>