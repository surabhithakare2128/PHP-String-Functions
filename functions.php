<?php
$str_1 = "     Hello World";
$str_2 = "This is PHP";

echo "<h2>This is strlen function</h2>";
echo "the length of " . $str_1 . " is: " . strlen($str_1) ;
echo "<hr>";

echo "<h2>This is str_word_count function</h2>";
echo str_word_count($str_1);
echo "<hr>";

echo "<h2>This is strrev function</h2>";
echo strrev($str_1);
echo "<hr>";

echo "<h2>This is str_replace  function</h2>";
echo str_replace("Hello", "Hi", $str_1);
echo "<hr>";

echo "<h2>This is strpos  function</h2>";
echo strpos( $str_1 , "Hello");
echo "<hr>";

echo "<h2>This is ltrim function</h2>";
echo ltrim($str_1);
echo "<hr>";

echo "<h2>This is strcmp function</h2>";
echo strcmp($str_1, $str_2);
echo "<hr>";

echo "<h2>This is str_repeat function</h2>";
echo str_repeat($str_1, 5);
echo "<hr>";


?>
