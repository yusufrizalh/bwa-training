<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQL</title>
</head>

<body>
    <h2>Learn PHP and MySQL</h2>
    <p>This is my first php and mysql</p>

    <?php
    // komentar untuk 1 baris
    /* komentar multi baris
            # variable: wadah untuk menampung nilai tertentu 
            # untuk mendeklarasi variable diawali dengan simbol $ 
        */
    $myname = "Yusuf Rizal";    // tipe data string
    $myage = 30;                // tipe data integer 
    $myweight = 60.54;          // tipe data double
    $angka1 = 12;
    $angka2 = 20;
    $angka3 = 5;
    $penjumlahan = $angka1 + $angka2;
    $pengurangan = $angka1 - $angka2;
    $perkalian = $angka1 * $angka2;
    $pembagian = $angka1 / $angka2;
    $rumus = ($angka1 + $angka2) - $angka3;
    /*
        echo("Learn PHP MySQL at Inixindo Surabaya!");
        echo("<br>");
        echo("My name is " . $myname);
        echo("<br>");
        echo("My age is " . $myage);
        echo("<br>");
        echo("Angka 1: $angka1 + Angka 2: $angka2 = $penjumlahan");echo("<br>");
        echo("Angka 1: $angka1 - Angka 2: $angka2 = $pengurangan");echo("<br>");
        echo("Angka 1: $angka1 * Angka 2: $angka2 = $perkalian");echo("<br>");
        echo("Angka 1: $angka1 / Angka 2: $angka2 = $pembagian");echo("<br>");
        echo("Hasil rumus adalah " . $rumus);
        */

    /*
            # Conditional Statement: 
              > IF .. ELSE
              > SWITCH .. CASE
        */

    $bilangan1 = 1000;
    $bilangan2 = 1000;

    if ($bilangan1 > $bilangan2) {
        echo "Bilangan 1 lebih besar dari pada Bilangan 2";
    } elseif ($bilangan1 < $bilangan2) {
        echo "Bilangan 1 lebih kecil dari pada Bilangan 2";
    } else {
        echo "Bilangan 1 sama dengan Bilangan 2";
    }
    echo "<br>";

    $warna = "hijau";
    switch ($warna) {
        case 'merah':
            echo "Warna favorit adalah merah";
            break;
        case 'biru':
            echo "Warna favorit adalah biru";
            break;
        case 'hijau':
            echo "Warna favorit adalah hijau";
            break;
        default:
            echo "Tidak ada warna favorit";
            break;
    }
    echo "<br>";
    /*
        # Looping / Pengulangan
          > Counted loop    : FOR, FOREACH
          > Uncounted loop  : WHILE, DO .. WHILE
    */

    // FOR Loop
    for ($nilai = 1; $nilai <= 100; $nilai++) {
        echo "Nilai ke-" . $nilai . "<br>";
    }
    echo "<br>";

    // FOREACH Loop
    // array: wadah untuk menampung banyak nilai dengan tipe data yg seragam
    $mobil = array("sedan", "truck", "SUV", "jeep", "sport", "bus");
    foreach ($mobil as $mobildata) {
        echo "Mobil saya adalah " . $mobildata . "<br>";
    }

    // array associative: key and value 
    $karyawan = array("Henry" => "35", "Mariana" => "20", "Frankie" => "24");
    foreach ($karyawan as $key => $value) {
        echo ("Nama: $key dan usia: $value <br>");
    }

    // WHILE Loop
    $nilaiawal = 1;
    while ($nilaiawal < 1) {
        echo "Nilai adalah " . $nilaiawal . "<br>";
        $nilaiawal++;
    }

    // DO .. WHILE Loop
    $nilaisaya = 1;
    do {
        echo "Nilai saya : " . $nilaisaya . "<br>";
        $nilaisaya++;
    } while ($nilaisaya < 1);

    ?>

</body>

</html>