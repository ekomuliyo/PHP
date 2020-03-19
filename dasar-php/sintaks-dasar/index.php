<?php

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

$nama = "Eko Muliyo";

// operator
// + - * / %
$a = 10;
$b = 20;
$c = $a * $b;

// Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 == "1"); // true, hanya mengecek isi nilai nya.

// Perbandingan dengan identitas / type data
// ===, !==
var_dump(1 === "1"); // false, mengecek nilai dan type data

// Logika
// &&, ||, !
$x = 21;
var_dump($x < 30 && $x % 2 == 0)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Hai <?php print $nama;?></h1>
    
    <h2><?php print $a . "+" . $b . "=" . $c ?></h2>
</body>
</html>