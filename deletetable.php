<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_bwa";

try {
    $dbconn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $deleteEmployee = "DELETE FROM employee WHERE emp_id = 4";
    $stmt = $dbconn->prepare($deleteEmployee);
    $stmt->execute();
    echo "Data from employee deleted succesfully!";
} catch (PDOException $ex) {
    echo "Error: " . $ex->getMessage();
}
$dbconn = null;
