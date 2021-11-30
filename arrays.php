<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>

<body>
    <?php
    /*
    # Array: wadah yg menyimpan banyak nilai dg tipe data seragam
      didalam array setiap data disebut dengan index
      index selalu diawali dari 0
        > indexed array
        > associative array
        > multidimension array
    */

    // indexed array
    $mobil = array("Sedan", "Truck", "Jeep", "SUV", "Sport", "Bus");
    $hitungMobil = count($mobil);
    // echo "Banyaknya mobil ada " . $hitungMobil . " yaitu: <br>";
    for ($mobildata = 0; $mobildata < $hitungMobil; $mobildata++) {
        // echo $mobil[$mobildata] . "<br>";
    }

    // associative array
    $person = array("Peter" => "20", "Louis" => "24", "Diego" => "40", "Francisco" => "34", "Stephanie" => "28");
    // echo "List of persons: <br>";
    foreach ($person as $key => $value) {
        // echo "Name is " . $key . " and age is " . $value . "<br>";
    }

    // multidimension array
    /* data mobil:
        > merk  BMW     Volvo   Bajaj
        > tipe  sedan   Sport   Bus
        > roda  4       4       12
    */
    $datamobil = array(
        array("BMW", "Sedan", 4),
        array("Volvo", "Sport", 4),
        array("Bajaj", "Bus", 12),
        array("Scania", "Bus", 14),
    );
    for ($baris = 0; $baris < 4; $baris++) {
        echo "<p>Baris ke $baris</p>";
        echo "<ul>";
        for ($kolom = 0; $kolom < 3; $kolom++) {
            echo "<li>" . $datamobil[$baris][$kolom] . "</li>";
        }
        echo "</ul>";
    }

    /*
        Untuk membuat list:
        > ul (unordered list) -> bullet
        > ol (ordered list) -> numbering
    */

    ?>
</body>

</html>