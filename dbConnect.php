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
$dbname = "db_bwa";

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
    // membuat koneksi
    $connection3 = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $connection3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // membuat database
    /*
    $createDB = "CREATE DATABASE db_bwa";
    $connection3->exec($createDB);
    echo "Database created is succesful!";
    */

    // membuat table
    $createTableEmployee = "CREATE TABLE employee(
        emp_id INT(15) PRIMARY KEY AUTO_INCREMENT, 
        emp_name VARCHAR(255),
        emp_email VARCHAR(255),
        emp_hire_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $connection3->exec($createTableEmployee);
    echo "Table Employee is succesfully created!";
} catch (PDOException $ex) {
    echo "Error on Table creation: " . $ex->getMessage();
}

$connection3 = null;