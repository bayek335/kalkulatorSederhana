<?php
// Menghubungkan dengan file function 
require "function.php";

// deklarasi variabel yang memiliki nilai default 
$bil_1 = "";
$bil_2 = "";
$nilai = [];

// jika form submit diterima
if (isset($_POST['submit']) && $_POST['bil_1']!=0 && $_POST['bil_2']!=0) {
    // Set nilai variabel dengan nilai yang diterima dari form
    $bil_1 = $_POST['bil_1'];
    $bil_2 = $_POST['bil_2'];
    // buat array yang berisi nilai dari form
    $nilai = [
        "bil_1" => $bil_1,
        "bil_2" => $bil_2
    ];

    // Panggil function dataNilai dengan 1 parameter berupa array
    $nilai = dataNilai($nilai);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="../assets/img/icon.png" alt="">
            <h2>Kalkulator Sederhana</h2>
        </div>
        <form method="post">
            <div class="form">
                <label for="bil_1" class="form-label">Bilangan 1</label>
                <input required type="number" name="bil_1" id="bil_1" class="form-input">
            </div>
            <div class="form">
                <label for="bil_2" class="form-label">Bilangan 2</label>
                <input required type="number" name="bil_2" id="bil_2" class="form-input">
            </div>
            <button type="submit" class="btn" name="submit">Hitung</button>
        </form>
        <div class="info">
            <p>Bilangan 1 : <?= $bil_1 ?></p>
            <p>Bilangan 2 : <?= $bil_2 ?></p>
        </div>
        <div class="act">
            <p>Hasil penjumlahan adalah : <?= $nilai?$nilai['tambah']:"" ?></p>
            <p>Hasil pengurangan adalah : <?= $nilai?$nilai['kurang']:"" ?></p>
            <p>Hasil perkalian adalah : <?= $nilai?$nilai['kali']:"" ?></p>
            <p>Hasil pembagian adalah : <?= $nilai?$nilai['bagi']:"" ?></p>
        </div>
    </div>
</body>

</html>