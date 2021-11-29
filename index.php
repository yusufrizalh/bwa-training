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
    ?>
</body>
</html>