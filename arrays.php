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
    echo "Banyaknya mobil ada " . $hitungMobil . " yaitu: <br>";
    for ($mobildata = 0; $mobildata < $hitungMobil; $mobildata++) {
        echo $mobil[$mobildata] . "<br>";
    }

    // associative array
    

    ?>
</body>

</html>