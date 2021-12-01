<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_bwa";

try {
    $dbconn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $updateEmployee = "UPDATE employee SET 
        emp_name = 'Mariana Louis', emp_email = 'mariana_louis@email.com'
        WHERE emp_id = 10";
    $stmt = $dbconn->prepare($updateEmployee);
    $stmt->execute();
    echo "Data from employee updated succesfully!";
} catch (PDOException $ex) {
    echo "Error: " . $ex->getMessage();
}
$dbconn = null;
