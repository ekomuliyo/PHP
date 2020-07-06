<?php
    $angka = [1, 2, 5, 2, 10, 11];

    // Associative Array
    $mahasiswa = [
        [
            "nama" => "andi",
            "npm" => "15192400912",
            "email" => "andi@gmail.com",
            "jurusan" => "Teknik Informatika",
            "img" => "andi.png"
        ],
        [
            "nama" => "budi",
            "npm" => "15192400901",
            "email" => "budi@gmail.com",
            "jurusan" => "Sistem Informasi",
            "img" => "budi.webp"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>

    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%
        }
    </style>
</head>
<body>
    <!-- <?php foreach($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?> -->

    <h1>Daftar Mahasiswa</h1>
    
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs['img'] ?>" alt="Gambar Avatar" width="200px">
            </li>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>NPM : <?= $mhs["npm"] ?></li>
            <li>Email : <?= $mhs["email"] ?></li>
            <li>Jurusan : <?= $mhs["jurusan"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>