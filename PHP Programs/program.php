<?php

// 1. Hello World
echo "<h3>1. Hello World</h3>";
echo "Hello, World!<br><hr>";

// 2. Print Student Details
echo "<h3>2. Student Details</h3>";
$name = "John";
$roll = 101;
echo "Name: $name <br>";
echo "Roll No: $roll <br><hr>";

// 3. Addition of Two Numbers
echo "<h3>3. Addition of Two Numbers</h3>";
$a = 10;
$b = 20;
$sum = $a + $b;
echo "Sum = $sum <br><hr>";

// 4. Largest of Two Numbers
echo "<h3>4. Largest of Two Numbers</h3>";
$a = 15;
$b = 25;
if ($a > $b)
    echo "$a is the largest.";
else
    echo "$b is the largest.";
echo "<hr>";

// 5. Even or Odd
echo "<h3>5. Even or Odd</h3>";
$num = 8;
if ($num % 2 == 0)
    echo "$num is Even.";
else
    echo "$num is Odd.";
echo "<hr>";

// 6. Factorial
echo "<h3>6. Factorial</h3>";
$num = 5;
$fact = 1;
for ($i = 1; $i <= $num; $i++) {
    $fact *= $i;
}
echo "Factorial of $num = $fact<hr>";

// 7. Print Numbers from 1 to 10
echo "<h3>7. Numbers from 1 to 10</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<hr>";

// 8. Multiplication Table
echo "<h3>8. Multiplication Table of 5</h3>";
$num = 5;
for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = " . ($num * $i) . "<br>";
}
echo "<hr>";

// 9. Reverse a String
echo "<h3>9. Reverse a String</h3>";
$str = "PHP";
echo "Original String: $str <br>";
echo "Reversed String: " . strrev($str);
echo "<hr>";

// 10. String Length
echo "<h3>10. String Length</h3>";
$str = "Internet Programming";
echo "String: $str <br>";
echo "Length = " . strlen($str);

?>
