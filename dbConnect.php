<?php
/*
    koneksi dengan database:
        > MySQLi diakses secara object oriented
        > MySQLi diakses secara procedural
        > PHP Data Object (PDO)
*/
// kebutuhan sistem untuk koneksi ke database antara lain:
$username = "root";
$password = "";
$host = "localhost";

// MySQLi object oriented
/*
$connection1 = new mysqli($host, $username, $password);
if ($connection1->connect_error) {
    die("Connection is failed: " . $connection1->connect_error);
}
echo ("Connection with object oriented way is succesful");
*/

// MySQLi procedural
/*
$connection2 = mysqli_connect($host, $username, $password);
if (!$connection2) {
    die("Connection is failed: " . mysqli_connect_error());
}
echo ("Connection with procedural way is succesful");
*/

// PHP Data Object (PDO)
try {
    $connection3 = new PDO("mysql:host=$host;dbname=db_bwa", $username, $password);
    $connection3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection with PDO way is succesful";
} catch (PDOException $ex) {
    echo "Connection is failed: " . $ex->getMessage();
}
