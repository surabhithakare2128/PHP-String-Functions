<?php
$str_1 = "Hello World";
$str_2 = "World";

echo "<h2>This is strlen function</h2>";
echo "the length of " . $str_1 . " is: " . strlen($str_1) ;
echo "<hr>";

echo "<h2>This is str_word_count function</h2>";
echo str_word_count($str_1);
echo "<hr>";

echo "<h2>This is strrev function</h2>";
echo strrev($str_1);
echo "<hr>";



?>
