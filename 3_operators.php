<?php

echo "<h1>Arithmetic operators</h1>";
$a = 10;
$b = 5;
echo "a = " . $a;
echo "<br>";
echo "b = " . $b;
echo "<br>";
echo "a + b = " . $a + $b;
echo "<br>";
echo "a - b = " . $a - $b;
echo "<br>";
echo "a * b = " . $a * $b;
echo "<br>";
echo "a / b = " . $a / $b;
echo "<br>";
echo "a % b = " . $a % $b;
echo "<br>";
echo "a ** b = " . $a ** $b;    
echo "<br>";


echo "<h1>Assignment operators</h1>";
$a = 10;
$b = 5;
echo "a = " . $a;
echo "<br>";
echo "b = " . $b;
echo "<br>";
echo "a += b = " . $a += $b;
echo "<br>";
echo "a -= b = " . $a -= $b;
echo "<br>";
echo "a *= b = " . $a *= $b;
echo "<br>";
echo "a /= b = " . $a /= $b;
echo "<br>";
echo "a %= b = " . $a %= $b;
echo "<br>";
echo "a **= b = " . $a **= $b;    
echo "<br>";
echo "a &= b = " . $a &= $b;
echo "<br>";
echo "a |= b = " . $a |= $b;
echo "<br>";
echo "a ^= b = " . $a ^= $b;
echo "<br>";
echo "a <<= b = " . $a <<= $b;
echo "<br>";
echo "a >>= b = " . $a >>= $b;
echo "<br>";
echo "a >>= b = " . $a >>= $b;    
echo "<br>";


echo "<h1>Increment and decrement operators</h1>";

$a = 10;    
$b = 5;
echo "a = " . $a;
echo "<br>";
echo "b = " . $b;
echo "<br>";
echo "a++ = " . $a++ . " => " . $a;
echo "<br>";
echo "b++ = " . $b++ . " => " . $b;
echo "<br>";

echo "<br>";
$a = 10;    
$b = 5;
echo "a = " . $a;
echo "<br>";
echo "b = " . $b;
echo "<br>";
echo "a-- = " . $a-- . " => " . $a;    
echo "<br>";
echo "b-- = " . $b-- . " => " . $b;
echo "<br>";

echo "<br>";
$a = 10;    
$b = 5;
echo "a = " . $a;
echo "<br>";
echo "b = " . $b;
echo "<br>";
echo "++a = " . ++$a . " => " . $a;
echo "<br>";
echo "++b = " . ++$b . " => " . $b;
echo "<br>";

echo "<br>";
$a = 10;    
$b = 5;
echo "a = " . $a;
echo "<br>";
echo "b = " . $b;
echo "<br>";
echo "--a = " . --$a . " => " . $a;
echo "<br>";
echo "--b = " . --$b . " => " . $b;
echo "<br>";


echo "<h1>Comparison operators</h1>";

$a = 10;
$b = 5;
echo "a = " . $a;
echo "<br>";
echo "b = " . $b;
echo "<br>";
echo "a == b" . var_dump($a == $b);
echo "<br>";
echo "a != b" . var_dump($a != $b);
echo "<br>";
echo "a > b" . var_dump($a > $b);
echo "<br>";
echo "a < b" . var_dump($a < $b);
echo "<br>";
echo "a >= b" . var_dump($a >= $b);
echo "<br>";
echo "a <= b " . var_dump($a <= $b);    
echo "<br>";
echo "a === b" . var_dump($a === $b);
echo "<br>";
echo "a !== b" . var_dump($a !== $b);    
echo "<br>";
echo "a <=> b" . var_dump($a <=> $b);
echo "<br>";


echo "<h1>Logical operators</h1>";

$a = true;    
$b = false;
echo "a = " . var_dump($a);
echo "<br>";
echo "b = " . var_dump($b);
echo "<br>";
echo "a && b" . var_dump($a && $b);
echo "<br>";
echo "a || b" . var_dump($a || $b);
echo "<br>";
echo "a xor b" . var_dump($a xor $b);
echo "<br>";
echo "a and b" . var_dump($a and $b);
echo "<br>";
echo "a or b" . var_dump($a or $b);    
echo "<br>";
echo "!a" . var_dump(!$a);
echo "<br>";

echo "<h1>Conditional Assignment operators</h1>";
echo "Ternary operator";
echo "<br>";
echo "x = expr1 ? expr2 : expr3";
echo "<br>";
echo "Null coalescing operator";
echo "<br>";
echo "x = expr1 ?? expr2";
echo "<br>";