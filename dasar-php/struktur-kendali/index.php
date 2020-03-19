<?php

// Perulangan 

// for ($i=0; $i < 5; $i++) { 
//     echo "hello dunia <br>";
// }

// $a = 0;
// while ($a <= 5) {
//     echo "hai dunia <br>";
// $a++;
// }

// $i = 0;
// do {
//     echo "halo lagi <br>";
//     $i++;
// }while($i < 5);

// Pengkondisian / Percabangan
$x = 5;
if ($x < 10) {
    echo "yakk benar";
}else if($x == 20){
    echo "ini kalau nilainya 20";
}else{
    echo "salah semua";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struktur Kendali</title>
    <style>
        .warna-abu{
            background-color: gray;
        }
    </style>
</head>
<body>
    <h1>Contoh 1</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for ($i=1; $i <= 5; $i++) { 
                echo "<tr>";
                for ($j=1; $j <= 5; $j++) { 
                    echo "<td> $i, $j </td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

    <h1>Contoh 2</h1>
    <table border="1" cellpading="10" cellspacing="0">
        <?php for( $i = 1; $i <= 5; $i ++) : ?>
            <?php if($i % 2 == 0) : ?>
                <tr class="warna-abu">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
